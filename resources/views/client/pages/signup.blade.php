@extends('client.main')
@section('styles')
        <meta charset="UTF-8">
        <title>Dukkangi</title>
        <link rel="stylesheet" href="{{URL::asset('/front-end/css/style.css')}}">
        <link rel="stylesheet" href="{{URL::asset('/front-end/css/login.css')}}">
         <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
      
        <style type="text/css">
               .div_icon_footer {
        display: flex;
        align-items: center;
        align-content: center;
        justify-content: center;
        justify-items: center;
        padding-left: 1% ;
    }
    .icon_inst {
        margin-left: 0em !important;
    }
/*    .align-self-center{
        display: flex;
        justify-content: center;
        justify-items:center; 
    }*/
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
                
@media (min-width: 1024px) and (max-width:1030px){
    #main-navbar-items ul .nav-item {
     font-size: 0.7rem;   
    }
}

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
                    font-size: 1rem;
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
                    margin-left: 15%;
                }
                .div_login, .div_singup {
                    height: 86.7em;
                    width: 30em;
                }
                .btn_login, .btn_cancel {
                    font-size: 1em;
                    padding: 0.6em 1em;
                    width: 80%;
                    margin-left: 10%;
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
                width: 20rem !important;
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
                padding-left: 1%;
            }
        }
         @media (max-width: 990px) and (min-width: 920px){
            .div_icon_footer {
                padding-left: 1%;
            }
        }
        @media (max-width: 1024px) and (min-width: 992px){
            #nav-bar-search {
                margin-top: -0.3rem !important;
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
                width: 20rem;
            }
            #main-navbar-items ul li {
                margin-right: 1.4rem !important;
                font-size: 0.7rem !important;
            }
        }
        
        @media (max-width: 940px){
            .input_search_sm {
                display: none !important;
            }
            .input_search_lg{
                display: block !important
            }
            .ul_navbar {
                width: 20rem;
            }
            .input_search_sm {
                width: 16.7rem;
            }
        }
        
        @media (max-width: 725px){
            .welcome-img {
                width: 600px;
                left: -130px;
            }
        }
        @media (max-width: 576px){
            .div_singup{
                width: 22rem;
            }
              .welcome-img {
                width: 500px;
                left: -61px;
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
                .welcome-img {
                width: 420px;
                left: -15px;
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
        @media (min-width:631px) and (max-width:775px){
         #main-navbar-items ul li {
             font-size: 0.8rem !important;
         }
     }
     @media (min-width:514px) and (max-width:630px){
         #main-navbar-items ul li {
             font-size: 0.7rem !important;
         }
     }
     @media (min-width:400px) and (max-width:570px){
        #main-navbar-items ul li {
           font-size: 0.8rem !important;
       }
       .top_nav {
    max-width: 74% !important;
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
           .btn_login_for_mobile, .btn_cancel_for_mobile {
            font-size: 1.8em;
            width: 100%;
            margin-left: 0%;
        }
         .welcome-img_for_mobile {
            width: 826px;
        }
        .logo_for_mobile {
            width: 13rem;
        }
    </style>
    <style>
        @media (max-width: 570px) and (min-width: 200px){
                 #main-nav-bar a{
                float: none !important;
                margin: 8px auto !important;
                width: auto !important;
                text-align: center !important;
            }
            .ul_navbar{
                float: none !important;
                margin: 5px auto !important;
            }
            .top_nav{
                margin-left: 0rem;
            }
            #main-navbar-items ul li {
                margin-right: 0.65rem !important;
                margin-left: 0.65rem;
                font-size: 0.84rem !important;
            }
            .logo {
                width: 9rem !important;
            }
            .icon_search{
                margin-top: 0.3rem;
            }
        }
</style>
    @if(session('lang') == 'ar' )
<style>
    .nav-link, .header_page_text_div, .title_section, .off_item, .product-name, .tax_include_item, .text_item_details, small, .title_customer_review, .rated_details_comment, .text_upvoted_user_actions, .text_leave_constructive_review, .btn_leave_constructive_review, .title_similar_items, .off_item_prodect, .text_discount, .item_name, .tax_include, .title_footer a,  
    .title_item_details, .title_qty, .price_item_details span, .btn_done, .btn_cancel, .btn_view_my_cart, .navbar-brand, table tr td, .title_one_item_details, .title_detail_my_card, .text_item_qty p, .text_item_qty h3, .text_item_qty span, .total_item_qty, .gained_point_rewards p, .taxes_taxes small, .taxes_taxes p, .text_enter_code, 
    .title_choose_payment, .btn_credit_card_details, .form-control, .singup_text, .btn_login, .singup_text a, .singup_text a{
        font-family:arabic3Font !important;
    }
    .input_singup{
        text-align: right;
        direction: rtl;
    }
    .input_email{
        font-family: NormalFont !important;
    }
    .input_email::-moz-placeholder {
        font-family: arabic3Font !important;
    }
    .input_email::-webkit-input-placeholder{
         font-family: arabic3Font !important;
    }
</style>
@endif
 <div class="col-md-12" style="padding-left:0px;padding-right: 0px  " id="content_page">
        <div  id="main-container" class="main-container main-container_singup">
            <div class="container" style="display: flex;">
                <div class="row" style="width: 108%;">
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
                                    <input type="text" required class="form-control input_singup input_email" id="inlineFormInputGroupUsername"  placeholder="@lang('Username')" name="name" value="{{old("name")}}">
                                </div>
                            </div>
                            <div class="col-sm-12 my-1" style="margin-top: 0.5em !important;float: left;">
                                <div class="input-group">

                                    <input type="email" required class="form-control input_singup input_email" id="inlineFormInputGroupEmail" placeholder="@lang('Email')" name="email"   value="{{old("email")}}">
                                </div>
                            </div>
                            <div class="col-sm-12 my-1" style="margin-top: 0.5em !important;float: left;">
                                <div class="input-group">

                                    <input name="password" required type="password" class="form-control input_singup" id="inlineFormInputGroupPassword" placeholder="@lang('Password')" value="{{old("password")}}">
                                </div>
                            </div>
                            <div class="col-sm-12 my-1" style="margin-top: 0.5em !important;float: left;">
                                <div class="input-group">

                                    <input type="password" required class="form-control input_singup" id="inlineFormInputGroupConfirmPassword" placeholder="@lang('Confirm Password')" name="password_confirmation" value="{{old("password_confirmation")}}">
                                </div>
                            </div>
                            
                              <div class="col-sm-12 my-1" style="margin-top: 0.5em !important;float: left;">
                                <div class="input-group">

                                    <input type="text" required class="form-control input_singup" id="inlineFormInputGroupConfirmAddress" placeholder="@lang('Address')" name="address" value="{{old("address")}}">
                                </div>
                            </div>
                           
                            <div class="col-sm-12 my-1" style="margin-top: 0.5em !important;float: left;">
                                <div class="input-group">

                                    <input type="text" required class="form-control input_singup datepicker" id="date_of_brith" placeholder="@lang('Date of birth')" name="dateofbirth" value="{{old("dateofbirth")}}">
                                </div>
                            </div>
                            <div class="col-sm-12 my-1" style="margin-top: 0.6em !important;float: left;">
                                <div class="input-group">
                                    <select class="custom-select form-control input_singup input_select" name="gender" value="{{old("gender")}}">
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
<span class="off_item" value="5"></span>
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
                $('.logo').addClass('logo_for_mobile');
            }
        }
when_open_mobile();
    $( function() {
    $("#date_of_brith").datepicker({
       yearRange: "-70:-15",
      changeMonth: true,
      changeYear: true
    });
  });
    </script>
    @endsection