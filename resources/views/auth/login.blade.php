@extends('client.main')
@section('main_section')
      
      <div class="col-md-12" style="padding-left:0px;padding-right: 0px  " id="content_page">
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
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <img src="/front-end/images/signup/locked-padlock.png" />
                                    </div>
                                    <input type="password" class="form-control input_login" id="inlineFormInputGroupPassword" name="password" placeholder="@lang('Password')">
                                </div>
                            </div>
                            <p class="singup_text">
                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }} style="margin-left: 0px;"> Remember Me
                            </p> 
                            <div class="col-sm-12 my-1" style="margin-top: 3em !important;float: left;">
                                <div class="input-group">
                                   <button type="submit" class="btn_login" style="border : 0px">
                                        @lang('LOGIN')
                                    </button>
                                </div>
                            </div>
                            
                                   <div class="col-sm-12 my-1" style="margin-top: 0em !important;float: left;">
                                <label class="sr-only" for="inlineFormInputGroupUsername">Username</label>
                                <div class="input-group">
                                  <div class="checkbox">
                                      
                                    
                                </div>
                                    <p class="singup_text">
                                        @lang("Don't have an account ?") <a href="{{ route('register') }}">@lang('Sign up')</a>
                                    </p>
                                </div>
                            </div>
                             </form>
                               <div class="col-sm-12 my-1" style="margin-top: 0em !important;float: left;padding-left: 2.6em;">
                                    <a href="https://www.facebook.com/" target="_blank"><img src="/front-end/images/signup/facebook copy.png" class="icon_social_media" /></a>
                                    <a href="https://www.instagram.com/" target="_blank"><img src="/front-end/images/signup/insta.png" class="icon_social_media" /></a>
                                    <a href="https://twitter.com/" target="_blank"><img src="/front-end/images/signup/twitter.png" class="icon_social_media" /></a>
                                </div>
                        </div>
                
                    
                        
                    </div>
                    <div class="col align-self-end">
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection
@section('scripts')
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="{{URL::asset('/front-end/js/main.js')}}"></script>
    <script>

        $("input::-webkit-input-placeholder").css({"color": "#fff"});
    </script>
@endsection
