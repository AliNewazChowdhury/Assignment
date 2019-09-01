@extends('layouts.app')
@section('content')
<div class="col-md-5 col-sm-8 col-xs-6 mx-auto">
    <div class="text-center" style="margin-top: 6rem;">
        <i class="fas fa-address-book" style="font-size: 3rem;"></i>
        <h3>Login Panel</h3>
    </div>
    <div class="card my-auto" style="height: 285px; width: 480px;">
        <div class="card-body text-center" style="padding: 10px;">
            {{--============ Login form  ============--}}
            <form method="POST" action="{{ route('login') }}" id="form">
                @csrf

                <div class="form-group row justify-content-center mb-0">

                    <div class="col-md-9 col-sm-7 col-xs-7" style="margin-bottom: 25px;">
                        <label for="email" class="col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                        <input id="email" type="email" class="col-11 form-control mx-auto @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" style="margin-bottom: 14px;" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                        <label for="password" class=" col-form-label text-md-right">{{ __('Password') }}</label>

                        <input id="password" type="password" class="col-11 form-control mx-auto @error('password') is-invalid @enderror" name="password"  required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row mb-0 justify-content-center">
                    <div class="col-md-6 offset-md-4 m-0">
                        <button type="submit" class="btn btn-primary mb-3" id="button">
                            {{ __('Login') }}
                        </button>
                        <button class="btn btn-primary mb-3" id="clear" style="margin-left: 69px;" value="Clear">{{__('Clear')}}
                        </button>
                        
                        <div class="row justify-content-center">
                            <span class="" role="alert">
                                <strong>Are you new here? <a href="{{route('register')}}">Register Now</a></strong>
                            </span>
                        </div>
                    </div>

                </div>
            </form>
        </div>

    </div>
</div>

<script type="text/javascript">
    function clearFields() {
        document.getElementById("email").value=""
        document.getElementById("password").value=""
    }
</script>
@endsection
