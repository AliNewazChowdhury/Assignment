@extends('layouts.app')
@section('content')
<div class="col-md-5 col-sm-5 col-xs-5">
    <div class="text-center my-3">
        <i class="fas fa-address-book" style="font-size: 3rem;"></i>
        <h3>Registration Panel</h3>
    </div>
    <div class="card" style="margin-top: 0rem; height: 447px; width: 460px;">
        <div class="card-body">
            {{--============ Registration Form  ============--}}
            <form method="POST" action="{{ route('register') }}" id="form">
                @csrf

                <div class="form-group row" style="margin-bottom: 10px;">
                    <label for="firstName" class="col-4 col-sm-4 col-xs-3 col-form-label text-md-right">{{ __('First Name') }}</label>

                    <div class="col-8 col-sm-8 col-xs-7">
                        <input id="firstName" type="text" class="form-control col-10 @error('firstName') is-invalid @enderror" name="firstName" value="{{ old('firstName') }}" required autocomplete="firstName" autofocus style="height: 31px;width: 236px;">

                        @error('firstName')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row"  style="margin-bottom: 10px;">
                    <label for="lastName" class="col-4 col-sm-4 col-xs-4 col-form-label text-md-right">{{ __('Last Name') }}</label>

                    <div class="col-8 col-sm-8 col-xs-8">
                        <input id="lastName" type="text" class="reg-form form-control col-10 @error('lastName') is-invalid @enderror" name="lastName" value="{{ old('lastName') }}" required autocomplete="lastName" autofocus style="height: 31px;width: 236px;">

                        @error('lastName')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row"  style="margin-bottom: 10px;">
                    <label for="address" class="col-4 col-sm-4 col-xs-4 col-form-label text-md-right">{{ __('Address') }}</label>

                    <div class="col-8 col-sm-8 col-xs-8">
                        <input id="address" type="text" class="reg-form form-control col-10 @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address" autofocus style="height: 31px;width: 236px;">

                        @error('address')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row"  style="margin-bottom: 10px;">
                    <label for="phone" class="col-4 col-sm-4 col-xs-4 col-form-label text-md-right">{{ __('Phone No') }}</label>

                    <div class="col-8 col-sm-8 col-xs-8">
                        <input id="phone" type="text" class="reg-form form-control col-10 @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" style="height: 31px;width: 236px;">

                        @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row" style="margin-bottom: 10px;">
                    <label for="email" class="col-4 col-sm-4 col-xs-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                    <div class="col-8 col-sm-8 col-xs-8">
                        <input id="email" type="email" class="reg-form form-control col-10 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" style="height: 31px;width: 236px;">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row" style="margin-bottom: 10px;">
                    <label for="birthDate" class="col-4 col-sm-4 col-xs-4 col-form-label text-md-right">{{ __('Birth Date') }}</label>

                    <div class="col-8 col-sm-8 col-xs-8">
                        <input id="birthDate" type="date" class="reg-form form-control  col-10 @error('birthDate') is-invalid @enderror" name="birthDate" value="{{ old('birthDate') }}" required autocomplete="birthDate" style="height: 31px;width: 236px;">

                        @error('birthDate')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row" style="margin-bottom: 10px;">
                    <label for="password" class="col-4 col-sm-4 col-xs-4 col-form-label text-md-right">{{ __('Password') }}</label>

                    <div class="col-8 col-sm-8 col-xs-8">
                        <input id="password" type="password" class="reg-form form-control col-10 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" style="height: 31px;width: 236px;">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row" style="margin-bottom: 10px;">
                    <label for="password-confirm" class="col-4 col-sm-4 col-xs-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                    <div class="col-8 col-sm-8 col-xs-8">
                        <input id="password-confirm" type="password" class="reg-form col-10 form-control" name="password_confirmation" required autocomplete="new-password" style="height: 31px;width: 236px;">
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary" style="margin-right: 24px;">
                            {{ __('Register') }}
                        </button>
                        <button class="btn btn-primary" id="clear" value="Clear">{{__('Clear')}}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection