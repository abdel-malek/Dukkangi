@extends('client.main')
@section('styles')
        <link rel="stylesheet" href="/front-end/css/login.css">
@endsection  

@section('main_section')
        <div  id="main-container" class="main-container">
            <div class="container">
                <div class="row">
                    <div class="col align-self-start">
                    </div>
                    <div class="col align-self-center">
                      <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                        <img class="welcome-img" src="/front-end/images/welcome-logo.png" />
                        <div class="col-md-12 col-xs-12 div_login">
                            @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong class="alert">{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                            <div class="col-sm-12 my-1" style="margin-top: 19em !important;float: left;">
                                <label class="sr-only" for="inlineFormInputGroupUsername">Username</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <img src="/front-end/images/signup/at.png" />
                                    </div>
                                    <input type="text" class="form-control input_login" id="inlineFormInputGroupUsername" name="email" placeholder="@lang('Username')">
                                </div>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong class="alert">{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col-sm-12 my-1" style="margin-top: 0.5em !important;float: left;">
                                <label class="sr-only" for="inlineFormInputGroupUsername">Username</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <img src="/front-end/images/signup/locked-padlock.png" />
                                    </div>
                                    <input type="password" class="form-control input_login" id="inlineFormInputGroupUsername" name="password" placeholder="@lang('Password')">
                                </div>
                            </div>
                            <div class="col-sm-12 my-1" style="margin-top: 3em !important;float: left;">
                                <label class="sr-only" for="inlineFormInputGroupUsername">Username</label>
                                <div class="input-group">
                                   <button type="submit" class="btn_login">
                                        @lang('LOGIN')
                                    </button>
                                </div>
                            </div>
                            
                                   <div class="col-sm-12 my-1" style="margin-top: 0em !important;float: left;">
                                <label class="sr-only" for="inlineFormInputGroupUsername">Username</label>
                                <div class="input-group">
                                  <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                                    <p class="singup_text">
                                        @lang("Don't have an account ?") <a href="#">@lang('Sign up')</a>
                                    </p>
                                </div>
                            </div>
                             </form>
                               <div class="col-sm-12 my-1" style="margin-top: 0em !important;float: left;padding-left: 2.6em;">
                                   <img src="./images/signup/facebook copy.png" class="icon_social_media" />
                                   <img src="./images/signup/insta.png" class="icon_social_media" />
                                   <img src="./images/signup/twitter.png" class="icon_social_media" />
                            </div>
                        </div>
                
                    
                        
                    </div>
                    <div class="col align-self-end">
                    </div>
                </div>
            </div>
        </div>

@endsection
@section('scripts')
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <script>

        $("input::-webkit-input-placeholder").css({"color": "#fff"});
    </script>
@endsection
