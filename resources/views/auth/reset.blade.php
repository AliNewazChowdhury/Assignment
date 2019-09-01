@extends('layouts.app')
@section('content')

<main class="col-lg-10 col-md-10 col-xs-12 col-sm-12 py-4" style=" margin: inherit;">
    <div class="row justify-content-center border-bottom" >
        <div class="col-md-5 col-sm-8 col-xs-8">
            <h2 style="">Change Password</h2>
        </div>
    </div>
    <div class="row justify-content-center" style="height: 400px;">
        <div class="col-md-7 col-sm-12 col-xs-12 m-auto" >

            @if(session()->has('success'))
            {{--============ Notification Part  ============--}}
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                  <strong>{{session()->get('success')}}</strong> 
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
            @endif
            <div class="card my-auto w-100 text-center"   style="border: none; margin-top: 0rem; margin-bottom: 1rem;height: 240px;width: 471px;">
                {{--============ Reset Password form  ============--}}
                <form method="POST" action="{{url('reset')}}" id="form">
                    @csrf

                    <div class="form-group row">
                        <label for="prevPassword" class="col-5 col-form-label text-md-right">{{ __('Previous Password') }}<span class=""
                             style="float: right; width: 5px;">:</span></label>

                        <div class="col-6">
                            <input id="prevPassword" type="password" class="form-control @error('prevPassword') is-invalid @enderror" name="prevPassword" value="{{ old('prevPassword') }}" required autocomplete="password" autofocus style="width: 246px;">

                            @error('prevPassword')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="col-5 col-form-label text-md-right">{{ __('New Password') }}<span 
                             style="float: right; width: 5px;">:</span></label>

                        <div class="col-6">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" style="width: 246px;">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password-confirm" class="col-5 col-form-label text-md-right">{{ __('Confirm Password') }}<span
                             style="float: right;  width: 5px;">:</span></label>

                        <div class="col-6">
                            <input id="password-confirm" type="password" class="form-control @error('password') is-invalid @enderror" name="password_confirmation" required autocomplete="current-password"style="width: 246px;">
                        </div>
                    </div>

                    <div class="form-group">
                        
                        <button type="submit" class="btn btn-primary" style="
                                                
                            float: left;
                            margin-left: 166px;">
                            {{ __('Change Password') }}
                        </button>
                        <button  class="btn btn-primary" id="clear"   style="   
                            margin-left: 40px;
                            " value="Clear">{{__('Clear')}}
                        </button>                            
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
<script type="text/javascript">
    function clearFields() {
        document.getElementById("email").value=""
        document.getElementById("password").value=""
    }
</script>
@endsection
