<div class="card-body">        
       <form class="login-reg-box p-4" action="{{ route('customer.password.change') }}" method="POST" enctype="multipart/form-data">
                @csrf           
            <div class="row">
                <div class="form-group col-md-12">
                    <label class="form__label">{{__('Current Password')}}</label>
                    <input type="password" placeholder="{{__('Current Password')}}" name="current_password" required class="form-control">
                    @if ($errors->has('current_password'))
                        <div class="error">{{ $errors->first('current_password') }}</div>
                    @endif
                 </div>       
               
                
                <div class="form-group col-md-12">
                    <label class="form__label">{!! __('New Password') !!}</label>
                    <input type="password" placeholder="{{__('New Password')}}" name="new_password" required class="form-control">
                    @if ($errors->has('new_password'))
                        <div class="error">{{ $errors->first('new_password') }}</div>
                    @endif
                </div>
                <div class="form-group col-md-12">
                    <label class="form__label">{!! __('Confirm New Password') !!}</label>
                    <input type="password" placeholder="{{__('Confirm New Password')}}" name="new_password_confirmation" required class="form-control">
                    @if ($errors->has('new_password_confirmation'))
                        <div class="error">{{ $errors->first('new_password_confirmation') }}</div>
                    @endif
                </div>
                
                <div class="col-md-12">
                    <button type="submit" class="btn btn-fill-out" name="submit" value="Submit">{{__('Change')}}</button>
                </div>
            </div>
        </form>
    </div>