
@extends('client.main')
@section('styles')
    <style>
          .first_input{
                    margin-top: 19em !important;
                }
                .block_icon{
                    margin-top: 0em !important;
                    float: left;
                    padding-left: 2.6em;
                }
                .long-div{
                    height: 45em;
                }
                .div_login{
                    height:45em ;
                }
                .alert{
                    color: #fff;
                    padding: 1rem 1rem;
                    top: 29rem;
                    z-index: 6;
                    background-color: #d80f1687;
                }
            @media (min-width: 768px) and (max-width: 1023px) {
                .main-container {
                    height: 86.7em;
                    background-position-x: -16em;
                }
                .alert {
                    top: 17.5rem;
                        left: 20%;
                }
                .checkbox{    
                    margin-left: 0px;
                    margin-top: 18px;
                    width: 1em;
                    height: 1em;
                }
                .long-div{
                    height: 86.7em;
                }
                .input_login, .input_singup{
                    font-size: 2rem;
                    padding: .675rem .75rem;
                    padding-left: 3em;
                    
                }
                .input-group-prepend img {
                    height: 2.3em;
                }
                .input-group-prepend {
                   margin-left: 1.2em;
                   margin-top: 1em;
                }
                .welcome-img {
                    margin-left: 22%;
                }
                .div_login, .div_singup {
                    height: 86.7em;
                    width: 36em;
                }
                .btn_login, .btn_cancel {
                    font-size: 2em;
                    padding: 0.6em 1em;
                }
                .singup_text {
                    font-size: 2.3em;
                }
                .icon_social_media {
                    height: 5.7em;
                    margin-left: 4.9em;
                }
                .first_input{
                    margin-top: 24em !important;
                    margin-bottom: 1.6em !important;
                }
                .block_icon{
                    margin-top: 1em !important;
                    float: left;
                    padding-left: 2.6em;
                }
                   .nav-link{
                    font-size: 1.5em;
                }
            }
            
                   @media (min-width: 992px) and (max-width: 1030px) {
/*   .input_search_sm {
    display: block !important;
        margin-top: 1rem;
}
   .input_search_lg {
    display: none !important;
}*/
.top_nav {
    max-width: 83% !important;
}
#nav-bar-search {
    margin-right: 0rem;
    width: 179px;
}
.ul_navbar {
    width: 42rem;
}
.nav-item a {
    font-size: 0.9em !important;
}
     }
                  @media (min-width: 750px) and (max-width: 817px) {
               .ul_navbar {
    width: 23rem;
        display: flex!important;
}

   .ul_navbar_mobile {
    width: 24rem;
}
.ul_navbar .nav-item a {
    font-size: 1.4em !important;
}
.ul_navbar_mobile .nav-item a {
    font-size: 1.8em !important;
}

     }
 
                             @media (min-width: 300px) and (max-width: 766px) {
               .ul_navbar {
    width: 22rem;
        display: flex!important;
}
.logo {
    width: 9rem;
}
.navbar {
    padding: .5rem 1rem;
}
   .ul_navbar_mobile {
    width: 31rem;
}
.ul_navbar .nav-item a {
    font-size: 1.3em !important;
}
.ul_navbar_mobile .nav-item a {
    font-size: 1.8em !important;
}

     }
     
              .input_login::-webkit-input-placeholder, textarea::-webkit-input-placeholder {
    color: #fff !important;
    font-weight: bold !important;
}
.input_login:-moz-placeholder, textarea:-moz-placeholder {
    color: #fff !important;
    font-weight: bold !important;
}
    </style>

@endsection
@section('main_section')
      
      <div class="col-md-12" style="padding-left:0px;padding-right: 0px  " id="content_page">
        <div  id="main-container" class="main-container long-div">
            <div class="container">
                <div class="row" style="width: 100%;">
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
                                    <input type="text" required class="form-control input_login" id="inlineFormInputGroupUsername" name="email" placeholder="@lang('Username')">
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
                                    <input type="password" required class="form-control input_login" id="inlineFormInputGroupPassword" name="password" placeholder="@lang('Password')">
                                </div>
                            </div>
                            <p class="singup_text">
                                <input type="checkbox" class="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }} style="margin-left: 0px;"> @lang('Remember Me')
                            </p> 
                            <div class="col-sm-12 my-1" style="margin-top: 3em !important;float: left;">
                                <div class="input-group">
                                   <button type="submit" class="btn_login" style="border : 0px;    cursor: pointer;">
                                        @lang('LOGIN')
                                    </button>
                                </div>
                            </div>
                            
                                   <div class="col-sm-12 my-1" style="margin-top: 0em !important;float: left;">
                                <label class="sr-only" for="inlineFormInputGroupUsername">@lang('Username')</label>
                                <div class="input-group">
                                  <div class="checkbox">
                                      
                                    
                                </div>
                                    <p class="singup_text">
                                        <a href="{{ route('password.request') }}">@lang('Forgot My Password')</a>
                                    </p>
                                    <p class="singup_text">
                                        @lang("Don't have an account ?") <a href="{{ route('register') }}">@lang('Sign up')</a>
                                    </p>
                                </div>
                            </div>
                             </form>
                               <div class="col-sm-12 my-1" style="margin-top: 0em !important;float: left;padding-left: 2.6em;display: none;">
                                    <a href="https://www.facebook.com/" target="_blank"><img src="/front-end/images/signup/facebook copy.png" class="icon_social_media"  style="margin-left: 2em;" /></a>
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
    <!--<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>-->
      <script>

        $("input::-webkit-input-placeholder").css({"color": "#fff"});
    </script>
@endsection
