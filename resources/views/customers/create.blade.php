@extends('layouts.app')

@section('content')

<form class="form-horizontal" action="{{ route('customers.store') }}" method="POST" enctype="multipart/form-data">
    <div class="row header">
        <div class="col-lg-10">
            <h1>Customer</h1>
            <ul class="breadcrumb">
                <li>{{__('Home')}}</li>
                <li><a href="{{ route('customers.index') }}">{{__('Customer')}}</a></li>
            </ul>
        </div>
        <div class="col-sm-2 text-right">
            <button type="submit" class="btn btn-primary"  data-toggle="tooltip" title="Save"><i class="fa fa-save"></i></button>
            <a href="{{ route('customers.index') }}" data-toggle="tooltip" title="" class="btn btn-default" data-original-title="Cancel"><i class="fa fa-reply"></i></a>
        </div>
    </div>
    <hr>
    <div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title" style="display:inline;"><i class="fa fa-pencil"></i> {{__('Add Customer')}}</h3>
        </div>
        <!--Horizontal Form-->
        <!--===================================================-->
        
        	@csrf
            <div class="panel-body">
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="name">{{__('Name')}}</label>
                    <div class="col-sm-10">
                        <input type="text" placeholder="{{__('Name')}}" id="name" name="name" class="form-control" value="{{ old('name') }}" required>
                        @if ($errors->has('name'))
                            <div class="error">{{ $errors->first('name') }}</div>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label" for="name">{{__('Email')}}</label>
                    <div class="col-sm-10">
                        <input type="text" placeholder="{{__('Email')}}" id="email" name="email" class="form-control" value="{{ old('email') }}" required>
                        @if ($errors->has('email'))
                            <div class="error">{{ $errors->first('email') }}</div>
                        @endif
                    </div>
                </div>

				<div class="form-group">
                    <label class="col-sm-2 control-label" for="name">{{__('Phone')}}</label>
                    <div class="col-sm-10">
                        <input type="text" placeholder="{{__('Phone')}}" id="phone" name="phone" class="form-control" value="{{ old('phone') }}" required>
                        @if ($errors->has('phone'))
                            <div class="error">{{ $errors->first('phone') }}</div>
                        @endif
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="password">{{__('Password')}}</label>
                    <div class="col-sm-10">
                        <input type="text" placeholder="{{__('Password')}}" id="password" name="password" class="form-control" value="{{ old('password') }}" required>
                        @if ($errors->has('password'))
                            <div class="error">{{ $errors->first('password') }}</div>
                        @endif
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="address">{{__('Address')}}</label>
                    <div class="col-sm-10">
                        <input type="text" placeholder="{{__('Address')}}" id="address" name="address" class="form-control" required value="{{ old('address') }}">
                        @if ($errors->has('address'))
                            <div class="error">{{ $errors->first('address') }}</div>
                        @endif
                    </div>
                </div>






                @foreach (\App\Country::where('code','SA')->get() as $key => $country)
                    <input type="hidden" name="country" value="{{ $country->code }}">
                @endforeach

                <div class="form-group">
                    <label class="col-sm-2 control-label">{{__('State')}}</label>
                    <div class="col-sm-10">
                        <select class="form-control demo-select2-placeholder" name="state" id="state" required>
                        <option value="">{!! __('Select State') !!}</option>
                        @php
                            if (session('locale') == "en"){
                                $states = \App\State::orderBy('state_en_name','asc')->pluck('state_en_name','id')->toArray();
                            }else{
                                $states = \App\State::orderBy('state_ar_name','asc')->pluck('state_ar_name','id')->toArray();
                            }
                        @endphp
                        @foreach($states as $key => $value)
                            @php
                                $selected = '';
                            @endphp
                            <option value="{{$key}}" @if(!empty(Auth::user()->state)){{ $key == (Auth::user()->state ?? "") ? 'selected':'' }} @endif {{$selected}}>{{$value}}</option>
                        @endforeach
                    </select>
                        @if ($errors->has('state'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{!! $errors->first('state') !!}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2">{{__('City')}}</label>
                    <div class="col-sm-10">    
                        <select class="form-control demo-select2-placeholder" name="city" id="city_ids" required>
                            <option value="">{!! __('Select City') !!}</option>
                            @php
                                if (session('locale') == "en"){
                                    $states = \App\City::where('state_id',Auth::user()->state)->orderBy('city_name_en','asc')->pluck('city_name_en','id')->toArray();
                                }else{
                                    $states = \App\City::where('state_id',Auth::user()->state)->orderBy('city_name_ar','asc')->pluck('city_name_ar','id')->toArray();
                                }
                            @endphp
                            @foreach($states as $key => $value)
                                @php
                                    $selected = '';
                                @endphp
                                <option value="{{$key}}" @if(!empty(Auth::user()->city)){{ $key == (Auth::user()->city ?? "") ? 'selected':'' }} @endif {{$selected}}>{{$value}}</option>
                            @endforeach
                        </select>
                    </div>        
                </div>
                
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="postal_code">{{__('Postal code')}}</label>
                    <div class="col-sm-10">
                        <input type="text" placeholder="{{__('Postal code')}}" id="postal_code" name="postal_code" class="form-control" required value="{{ old('postal_code') }}">
                        @if ($errors->has('postal_code'))
                            <div class="error">{{ $errors->first('postal_code') }}</div>
                        @endif
                    </div>
                </div>
                
                
            </div>
        <!--===================================================-->
        <!--End Horizontal Form-->

    </div>
</form>

@endsection
