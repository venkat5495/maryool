@php
    $i = ($orders->currentpage()-1)* $orders->perpage() + 1;
    $deliveryboys=\App\DeliveryBoyDetail::orderBy('id', 'desc')->get();
@endphp
@if($orders->isNotEmpty())
    @foreach ($orders as $key => $order_id)
        @php
            $order = \App\Order::find($order_id->id);
        @endphp
        @if($order != null)
            @php
                $delivery_status = $order->orderDetails->first()->delivery_status;
            @endphp
            <tr>
                <td>
                    <input type="checkbox" class="table_checkbox" name="ids[]" value="{{ $order->id }}">
                </td>
                <td>
                    {{ $order->code }} @if($order->viewed == 0) <span class="pull-right badge badge-info">{{ __('New') }}</span> @endif
                </td>
                <td>
                    {{-- count($order->orderDetails->where('seller_id', Auth::user()->id)) --}}
                     {{ count($order->orderDetails) }}
                </td>
                <td>
                    @if ($order->user_id != null)
                        @if(!empty($order->user->name))
                            {{ $order->user->name }}
                        @endif
                    @else
                        Guest ({{ $order->guest_id }})
                    @endif
                </td>
                <td>
                    @php $voucher_amount = 0; @endphp
                    @if(!empty($order->discount_amount))
                        @php
                            $voucher_amount = $order->discount_amount;
                        @endphp
                    @endif
                    @php 
                        $orderTotalPrice = ($order->orderDetails->sum('price')+ $order->orderDetails->sum('shipping_cost') + ($order->shipping_charge ?? 00)+($order->cod_charge ?? 00))- $voucher_amount ;
                    @endphp
                    {{single_price($orderTotalPrice)}}
                    {{-- single_price($order->orderDetails->where('seller_id', Auth::user()->id)->sum('price') + $order->orderDetails->where('seller_id', Auth::user()->id)->sum('tax') - $voucher_amount) --}}
                </td>
                <?php /*
           <td>{{$voucher_amount}}</td>  */ ?>
                <td> {{$order->OrderStatus}} </td>
                <td>
                    {{__(ucfirst(str_replace('_', ' ', $order->payment_type))) }}
                </td>
                <td width="120px;">
                    <select class="form-control update_payment_status" id="{{$order->id}}" @if ($order->payment_status == 'paid') disabled @endif>
                        <option class="bg-green" value="paid" @if ($order->payment_status == 'paid') selected @endif>{{__('Paid')}}</option>
                        <option class="bg-red" value="unpaid" @if ($order->payment_status == 'unpaid') selected @endif>{{__('Unpaid')}}</option>
                    </select>
                </td>
                <td class="text-center">@if ($order->print_view == 1) <i class="fa fa-check-circle text-success fa-lg"></i> @else <i class="fa fa-times-circle text-danger fa-lg"></i> @endif
                </td>
                 <td>
                     
                     @if($order->ForwardToAramex=="TRUE")
                     Forwarded to aramex
                     @endif
                   
                    
                    @if(!($order->delivery_boy_id ==""))
                    {{ App\DeliveryBoyDetail::where('id', $order->delivery_boy_id )->value('full_name') }} 
                     {{ App\DeliveryBoyDetail::where('id', $order->delivery_boy_id )->value('phone_number') }}
                    @endif
                    
                    </td>
                <td>
                    <div class="btn-group dropdown">
                        <button class="btn btn-primary dropdown-toggle dropdown-toggle-icon" data-toggle="dropdown" type="button">
                            {{__('Actions')}} <i class="dropdown-caret"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li><a href="{{ route('orders.show', encrypt($order->id)) }}">{{__('View')}}</a></li>
                            {{-- <li><a href="{{ route('seller.invoice.download', $order->id) }}">{{__('Download Invoice')}}</a></li> --}}
                            <li><a href="{{ route('customer.invoice.download', $order->id) }}">{{__('Download Invoice')}}</a></li>
                            <li><a onclick="confirm_modal('{{route('orders.destroy', $order->id)}}');">{{__('Delete')}}</a></li>
                            @if(!empty($order->aramex_id) && $order->aramex_id != 'data not find')
                                <li><a href="{{ route('shipping.label.download', $order->id) }}">{{__('Download Shipping Label')}}</a></li>
                            @endif
                             <li>
        <a   href="javascript:void();"  data-toggle="modal" data-target="#exampleModal{{ $order->id }}" >
            {{__('Forward To Delivery Company/Delivery Boy')}}</a></li>
                        </ul>
                    </div>
                </td>
            </tr>
        @endif
  	
		<!-- Modal -->
  <div class="modal fade" id="exampleModal{{ $order->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form name="assignboy{{ $order->id }}" id="assignboy{{ $order->id }}">
         
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Forward To Delivery Boy/Courier Company</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
   
        Forward to delivery boy : <label class="switch">
            <input   name="deliveryoption" type="checkbox" @if(!($order->delivery_boy_id=="" || $order->delivery_boy_id==0 )) checked @endif  id="toggledelivery{{ $order->id }}" onchange="deliverytoggle({{ $order->id }})">
            <span class="slider round"></span>
        </label>

          Forward to delivery company : <label class="switch">
            <input   name="deliveryoption1" type="checkbox" @if(!($order->aramex_id=="")) checked @endif id="toggledeliverycomp{{ $order->id }}" 
            onchange="deliverytogglecomp({{ $order->id }})" >
            <span class="slider round"></span>
        </label>
            <!-- if delivery agent is on -->
            <div id="delboystat{{ $order->id }}" @if($order->delivery_boy_id=="" || $order->delivery_boy_id==0 )) style="display:none" @endif>
        <h5>Select a delivery boy from the list : <h5>
        <select class="form-control" name="delivery_boy{{ $order->id }}" id="delivery_boy{{ $order->id }}">
            <option value="Select one..." >Select one from the list...</option>
            @foreach ($deliveryboys as $key => $deliveryboy)
            <option value="{{ $deliveryboy->id }}" @if($order->delivery_boy_id==$deliveryboy->id) selected="selected" @endif>{{ ucfirst($deliveryboy->full_name) }}</option>
            @endforeach
        </select>
        </div>
        <!-- if delivery agent is on -->  
        <!-- if delivery company exist then-->
        <div id="delcompstat{{ $order->id }}"  @if($order->aramex_id=="") style="display:none" @endif>
          @if(!(App\BusinessSetting::where('type','aramex_setting')->value('type')==""))

          <h5> Select your available courier company :
          </h5>  <select class="form-control" name="delivery_comp{{ $order->id }}" id="delivery_comp{{ $order->id }}">
            <option value="{{ App\BusinessSetting::where('type','aramex_setting')->value('id') }}">
            {{ App\BusinessSetting::where('type','aramex_setting')->value('type') }}</option>


          </select>
          @else
          No courier company is installed.
          @endif

        </div>
        <!-- end of delivery company-->

        

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" id="btnupdate" class="btn btn-primary" onclick="assignboydelivery({{ $order->id }})"> 
          <img src="{{ asset('img/Disk-1s-200px.svg') }}" width="40px" height="40px" style="display:none" id="loader">Update</button>
        </div>
      </div>
        </form>
    </div>
  </div>
    @endforeach
    <tr style="border:none;">
        <td colspan="20">{{$orders->links()}}</td>
    </tr>
@else
    <tr>
        <td colspan="20" align="center"> Record not found</td>
    </tr>
@endif
