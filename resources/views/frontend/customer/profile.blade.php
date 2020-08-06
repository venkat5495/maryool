<div class="card">
    <div class="card-header">
        <h3>Account Details</h3>
    </div>
    <div class="card-body">
        <p>Already have an account? <a href="#">Log in instead!</a></p>
        <form method="post" name="enq" action="{{ route('customer.profile.update') }}">
            @csrf
            @foreach (\App\Country::where('code','SA')->get() as $key => $country)
                <input type="hidden" name="country" value="{{ $country->code }}">
            @endforeach
            <div class="row">
                <div class="form-group col-md-6">
                    <label class="form__label">{{__('Your Name')}}</label>
                    <input type="text" placeholder="{{__('Your Name')}}" name="name" value="{{ old('name',Auth::user()->name) }}" class="form-control">
                 </div>
                 <div class="form-group col-md-6">
                    <label class="form__label">Email</label>
                    <input type="email" placeholder="{{__('Your Email')}}" name="email" value="{{ old('email',Auth::user()->email) }}" class="form-control">
                </div>
                <div class="form-group col-md-12">
                    <label class="form__label">{{__('Address')}}</label>
                    <input type="text"  placeholder="Your Address" value="{{ old('address',Auth::user()->address) }}" name="address" class="form-control">
                </div>
                <div class="form-group col-md-12">
                    <label class="form__label">{{__('State')}}</label>
                    <select class="form-control demo-select2-placeholder" name="state" id="profile_state" required>
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
                </div>
                <div class="form-group col-md-12">
                    <label class="control-label">{{__('City')}}</label>
                    <select class="form-control demo-select2-placeholder" name="city" id="profile_city" required>
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
                            <option value="{{$value}}" @if(!empty(Auth::user()->city)){{ $value == (Auth::user()->city ?? "") ? 'selected':'' }} @endif {{$selected}}>{{$value}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-md-12">
                    <label class="form__label">{{__('Phone')}}</label>
                     <input type="text" class="form-control mb-3" placeholder="Your Phone Number" name="phone" value="{{old('phone', Auth::user()->phone)}}">
                </div>
                
                <div class="col-md-12">
                    <button type="submit" class="btn btn-fill-out" name="submit" value="Submit">{{__('Update Profile')}}</button>
                </div>
            </div>
        </form>
    </div>
</div>