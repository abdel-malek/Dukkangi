@extends('client.main')
@section('styles')
        <meta charset="UTF-8">
        <title>Dukkangi</title>
        <link rel="stylesheet" href="{{URL::asset('/front-end/css/style.css')}}">
        <link rel="stylesheet" href="{{URL::asset('/front-end/css/login.css')}}">
         <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
      
        <style type="text/css">
                    .first_input{
                margin-top: 19em !important;
            }
          .input_singup, .input_singup {
    background-color: rgba(255, 255, 255, 0);
}
    a:hover {
        color: inherit;
        text-decoration: none;
    }
    a {
        color: inherit;
        text-decoration: none;

    }
            .block_icon{
                margin-top: 0em !important;
                float: left;
                padding-left: 2.6em;
            }
            .block_input_singup{
                margin-top: 0.5em !important;
            }
            
             .alert {
                    color: #fff;
                    padding: 1rem 1rem;
                    width: 18rem;
                    /*margin-top:  -1rem;*/
                    z-index: 6;
                    background-color: #d80f1687;
                }
                .alert strong{
                    width: 100%;
                    text-align: center;
                }
                .input_singup, .input_singup {
/*    border-radius: 1.5em !important;*/
}
/*                 .input_select{
                    height: 5rem !important;
                }*/
            @media (min-width: 768px) and (max-width: 1023px) {
                .input_select{
                    height: 5rem !important;
                }
                .rate-us{
                    display: none;
                }
                .main-container {
                    height: 86.7em;
                    background-position-x: -16em;
                }
                .input_login, .input_singup{
                    font-size: 2rem;
                    padding: .675rem .75rem;
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
                    width: 37em;
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
                .block_input_singup{
                    margin-top: 1em !important;
                }
            }
            
             #nav-bar-search::-webkit-input-placeholder, textarea::-webkit-input-placeholder {
    color: #aaa !important;
    font-weight: bold !important;
}
#nav-bar-search::-moz-placeholder, textarea:-moz-placeholder {
    color: #aaa !important;
    font-weight: bold !important;
}
        </style>

@endsection    

@section('main_section')
        <!--for header and footer--> 
    <style>
        @media (max-width: 1367px) and (min-width: 1300px){
            .div_icon_footer {
                padding-left: 12%;
            }
        }
        @media (max-width: 1024px) and (min-width: 400px){
            .logo {
                width: 11rem;
            }
        }
        @media (max-width: 1030px) and (min-width: 768px){
            .input_search {
                padding: 0.4em 1em;
                font-size: 0.9rem;
            }
        }
        @media (max-width: 1030px) and (min-width: 992px){
            #nav-bar-search {
                width: 22rem !important;
            }
        }
        @media (max-width: 1105px) and (min-width: 1024px){
            #nav-bar-search {
                margin-right: 0px;
                width: 22rem;
            }
        }
        @media (max-width: 1024px) and (min-width: 400px){
            .ul_navbar {
                width: 39rem;
            }
        }
        @media (max-width: 780px) and (min-width: 768px){
            .div_icon_footer {
                float: left;
                margin-left: 16%;
                padding-left: 8%;
            }
        }
        @media (max-width: 920px) and (min-width: 780px){
            .div_icon_footer {
                padding-left: 5%;
            }
        }
         @media (max-width: 990px) and (min-width: 920px){
            .div_icon_footer {
                padding-left: 7%;
            }
        }
        @media (max-width: 991px){
            .input_search_sm {
                display: none !important;
            }
            .input_search_lg{
                display: block !important
            }
            .ul_navbar {
                width: 32rem;
            }
        }
        @media (max-width: 940px){
            .input_search_sm {
                display: block !important;
            }
            .input_search_lg{
                display: none !important
            }
            .ul_navbar {
                width: 18rem;
            }
            .input_search_sm {
                width: 16.7rem;
            }
        }
        @media (max-width: 505px){
            .ul_navbar {
                width: 18rem;
            }
            .top_nav {
                max-width: 80% !important;
            }
            .input_search_sm {
                width: 100%;
            }
            .div_icon_footer{
                padding-left: 2%;
            }
        }
        
    </style>
 <div class="col-md-12" style="padding-left:0px;padding-right: 0px  " id="content_page">
        <div  id="main-container" class="main-container main-container_singup">
            <div class="container">
                <div class="row" style="width: 100%;">
                    <div class="col align-self-start">
                    </div>
                    <div class="col align-self-center">
                        <img class="welcome-img" src="/front-end/images/welcome-logo2.png" style="z-index: 1;" />
                        <div class="col-md-12 col-xs-12 div_singup">
                            {!! Form::open(['route'=>'register']) !!}
                          <div class="col-sm-12 my-1" style="margin-top: 14em !important;float: left;">
                                @if ($errors->has('password') || $errors->has('email') ||$errors->has('name'))
                                <p class="alert" style="text-align: center;">
                                   <strong>{{ $errors->first('password') }}</strong>
                                   <strong>{{ $errors->first('email') }}</strong>
                                   <strong>{{ $errors->first('name') }}</strong>
                                </p>
                                <br>
                                @endif
                
                                <div class="input-group">

                                    <input type="text" required class="form-control input_singup" id="inlineFormInputGroupUsername" placeholder="@lang('Username')" name="name">
                                </div>
                            </div>
                            <div class="col-sm-12 my-1" style="margin-top: 0.5em !important;float: left;">
                                <div class="input-group">

                                    <input type="email" required class="form-control input_singup" id="inlineFormInputGroupEmail" placeholder="@lang('Email')" name="email">
                                </div>
                            </div>
                            <div class="col-sm-12 my-1" style="margin-top: 0.5em !important;float: left;">
                                <div class="input-group">

                                    <input name="password" required type="password" class="form-control input_singup" id="inlineFormInputGroupPassword" placeholder="@lang('Password')">
                                </div>
                            </div>
                            <div class="col-sm-12 my-1" style="margin-top: 0.5em !important;float: left;">
                                <div class="input-group">

                                    <input type="password" required class="form-control input_singup" id="inlineFormInputGroupConfirmPassword" placeholder="@lang('Confirm Password')" name="password_confirmation">
                                </div>
                            </div>
                           
                            <div class="col-sm-12 my-1" style="margin-top: 0.5em !important;float: left;">
                                <div class="input-group">

                                    <input type="text" required class="form-control input_singup datepicker" id="date_of_brith" placeholder="@lang('Date of birth')" name="dateofbirth">
                                </div>
                            </div>
                            <div class="col-sm-12 my-1" style="margin-top: 0.6em !important;float: left;">
                                <div class="input-group">
                                    <select class="custom-select form-control input_singup input_select" name="gender">
                                       <option value="male"  >@lang('Male') </option>
                                       <option value="female" >@lang('Female') </option>
                                    </select>
                                </div>
                            </div>
                           
                            <div class="col-sm-12 my-1" style="margin-top: 3em !important;float: left;">
                                <div class="input-group">
                                    <button type="submit" class="btn_login" style="border :0px;cursor: pointer;">
                                        @lang('Sign up')
                                    </button>
                                </div>
                            </div>
                            <div class="col-sm-12 my-1" style="margin-top: 0.5em !important;float: left;">
                                <div class="input-group">
                                    <a href="{{ route('home') }}" class="btn_cancel"> 
                                        @lang('Cancel')
                                    </a>    
                                </div>
                            </div>
                        </form>
                            <br>
                            <div class="col-sm-12 my-1" style="margin-top: 3em !important;float: left;padding-left: 1.6em;display: none;">
                                <a href="https://www.facebook.com/" target="_blank"><img src="/front-end/images/signup/facebook copy.png" class="icon_social_media" style="margin-left: 2em;" /></a>
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
            <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
            <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
            <script src="/front-end/js/main.js"></script>

    <script>
    $( function() {
    $("#date_of_brith").datepicker({
       yearRange: "-70:-15",
      changeMonth: true,
      changeYear: true
    });
  });
    </script>
    @endsection