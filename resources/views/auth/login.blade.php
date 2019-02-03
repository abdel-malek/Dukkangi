
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
                    width: 0.8em;
                    height: 0.8em;
                }
                .long-div{
                    height: 86.7em;
                }
                .input_login, .input_singup{
                    font-size: 1rem;
                    padding: .675rem .75rem;
                    padding-left: 3em;
                    
                }
                .input-group-prepend img {
                    height: 1.3em;
                }
                .input-group-prepend {
                   margin-left: 1.2em;
                   margin-top: 0.9em;
                }
                .welcome-img {
                    margin-left: 22%;
                }
                .div_login, .div_singup {
                    height: 86.7em;
                    width: 36em;
                }
                .btn_login, .btn_cancel {
                    font-size: 1em;
                    padding: 0.6em 1em;
                    width: 80%;
                    margin-left: 10%;
                }
                .singup_text {
                    font-size: 1.3em;
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
             @media (max-width: 1024px) and (min-width: 300px){
         #nav-bar-search {
             margin-top: -2.3rem;
             height: 2.28rem;
         }
         .icon_search {
             width: 2.2rem !important;
             padding-bottom: 0.2rem !important;
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
                width: 46rem;
            }
            #nav-bar-search {
                margin-right: 2rem;
                width: 0px;
            }
            .navbar {
                padding: .5rem 1rem;
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
                    width: 0rem;
            }
            .ul_navbar {
                width: 16rem;
            }
        }
        @media (max-width: 850px){
            .input_search_sm {
                display: none !important;
            }
            .input_search_lg{
                display: block !important
            }
            .ul_navbar {
                width: 18rem;
            }
            .input_search_sm {
                width: 13.7rem;
            }
        }
        @media (max-width: 740px){
            .welcome-img {
                width: 600px;
                left: -125px;
            }
        }
        @media (max-width: 577px){
            .username_form{
                width: 22rem;
            }
            .welcome-img {
                width: 500px;
                left: -59px;
            }
        }
        @media (max-width: 505px){
            .ul_navbar {
                width: 18rem;
            }
            .welcome-img {
                width: 420px;
                left: -10px;
            }
            .username_form {
                width: 24rem;
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
    
     <style>
        .input_search_lg_for_mobile{
            display: none !important;
        }
        .input_search_sm_for_mobile{
            display: block !important;
                font-size: 1.4rem;
        }
        .ul_navbar_for_mobile {
            width: 26rem;
        }
        #lang-nav-bar .nav-item_for_mobile a {
            font-size: 1.7em !important;
        }
        .icon-flag_for_mobile {
            width: 35px;
            height: 35px;
            margin-top: 0.2em;
        }
        .input_login_for_mobile, .input_singup_for_mobile {
            font-size: 2rem;
        }
        .div_login_for_mobile, .div_singup_for_mobile {
            width: 42em;
        }
        .welcome-img_for_mobile {
            width: 826px;
        }
        .btn_login_for_mobile, .btn_cancel_for_mobile {
            font-size: 1.8em;
            width: 100%;
            margin-left: 0%;
        }
        #navbarSupportedContent ul .nav-item_for_mobile {
            font-size: 20px;
        }
        .singup_text_for_mobile {
            font-size: 1.9em;
        }
        .welcome-img_for_mobile{
            margin-left: 15%;
        }
        .logo_for_mobile {
            width: 13rem;
        }
        .input-group-prepend_for_mobile img {
            height: 2.3em;
        }
        .title_footer_for_mobile{
            font-size: 2.5em;
        }
        .title_footer_for_mobile{
            font-size: 1.6em;
        }
    </style>
    
@if(session('lang') == 'ar' )
<style>
    .nav-link, .header_page_text_div, .title_section, .off_item, .product-name, .tax_include_item, .text_item_details, small, .title_customer_review, .rated_details_comment, .text_upvoted_user_actions, .text_leave_constructive_review, .btn_leave_constructive_review, .title_similar_items, .off_item_prodect, .text_discount, .item_name, .tax_include, .title_footer a, .text_footer, 
    .title_item_details, .title_qty, .price_item_details span, .btn_done, .btn_cancel, .btn_view_my_cart, .navbar-brand, table tr td, .title_one_item_details, .title_detail_my_card, .text_item_qty p, .text_item_qty h3, .text_item_qty span, .total_item_qty, .gained_point_rewards p, .taxes_taxes small, .taxes_taxes p, .text_enter_code, 
    .title_choose_payment, .btn_credit_card_details, .form-control, .singup_text, .btn_login, .singup_text a, .singup_text a{
        font-family:arabic3Font !important;
    }
</style>
@endif

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
                            <div class="col-sm-12 my-1 username_form" style="margin-top: 19em !important;float: left;">
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
            function when_open_mobile(){
            if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
                $('.input_search_lg').addClass('input_search_lg_for_mobile');
                $('.input_search_sm').addClass('input_search_sm_for_mobile');
                $('.ul_navbar').addClass('ul_navbar_for_mobile');
                $('.nav-item').addClass('nav-item_for_mobile');
                $('.icon-flag').addClass('icon-flag_for_mobile');
                $('.input_singup').addClass('input_singup_for_mobile');
                $('.input_login').addClass('input_singup_for_mobile');
                $('.div_singup').addClass('div_singup_for_mobile');
                $('.div_login').addClass('div_login_for_mobile');
                $('.welcome-img').addClass('welcome-img_for_mobile');
                $('.btn_cancel').addClass('btn_cancel_for_mobile');
                $('.btn_login').addClass('btn_login_for_mobile');
                $('.singup_text').addClass('singup_text_for_mobile');
                $('.welcome-img').addClass('welcome-img_for_mobile');
                $('.logo').addClass('logo_for_mobile');
                $('.input-group-prepend').addClass('input-group-prepend_for_mobile');
                $('.title_footer').addClass('title_footer_for_mobile');
                $('.title_footer').addClass('title_footer_for_mobile');
            }
        }
when_open_mobile();
        $("input::-webkit-input-placeholder").css({"color": "#fff"});
    </script>
@endsection
