@extends ('client.main')
 
<style >
	#lang-nav-bar {
		margin-top: -16px !important;
	}
	.about-div{
		left: 7em;
    	top: 11em;
    	margin-bottom: 4em;
	}
	.img-logo{
		margin-left:50px;
	}
        .title_contact_us{
            margin-left: -2.4vw;
        }
        .right-arrow
        {    
            cursor: pointer;
            left: 19.5vw !important;
            top: 10.5em !important;
            background-color: #d80001;
            border-radius: 1.5em;
            border-color: #d80001;
            color: #fff;
            width: 1.5em;
            height: 1.5em;
            padding: 2.5px;
            font-size: 12px;    	
        }
	.left-arrow
	{    
		cursor: pointer;
		top: 10.5em !important;
    	left: -1em;
    	background-color: #d80001;
		border-radius: 1.5em;
		border-color: #d80001;
		color: #fff;
		width: 1.5em;
   		height: 1.5em;
    	padding: 2.5px;
   		font-size: 12px;
	}
        .contact-us-div{
            max-width: 30% !important;
            margin-top: 1em;
            left: 62vw;
            top: 0em;
            padding: 10px;
        }
    .review-div{
        max-width: 48%;
        margin-top: 1em;
        left:10vw;
        border: 1px solid #c0c0c0;
        padding: 10px;
        box-shadow: 1px 1px 6px #999;
    }
	.inner-review{
		width: 75%;
	    margin-left: 12%;
	    border: 1px solid #c0c0c0;
	    padding: 16px 9px;
    	font-size: 14px;
    	height: 250px;
	}
	.hr-review {
		margin-left: -15px !important;
		width: 110.5%;
		border-top:2px solid rgba(0,0,0,.4);
	}
	
	.rating {
        font-size: 1.3em;
        color: #d80001;
       	bottom: 1em !important;
  		left: 3em !important;
    }

    .rating .star::after {
        color: #d80001;
        width: 0.75em;
        height: 1.7em;
    }

    .star::before {
      color: #d80001;
        width: 0.75em;
        height: 0.7em;
    }
    .rating .star::before {
   		color: #d80001 !important;
	}
	.contact-par{
		    margin-left: 2px;
                    margin-top: -2.3rem;
	}	
	.phone {
	    position: absolute;
	    color: #d80001;
	    top: 8em;
	    left: 1.5em;
	    font-size: 19px;
	}
	.mail
	{
		position: relative;
	    top: 0.5em;
	    left:-0.3em;
		color: #d80001;
	    font-size: 20px;
	    margin-left: -20px;
	    font-weight: bolder;
	    font-family: fantasy;
	}
	.glyphicon{
		/*top:140px !important;*/
	}
	.glyphicon {
    /* position: relative; */
    left: -1.5em;
    top: 19px;
    display: inline-block;
    font-family: 'Glyphicons Halflings';
    font-style: normal;
    font-weight: 400;
    line-height: 1;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
	}
	.sth{
		margin-top: 20px;
	}
	.top{
		margin-bottom: 13%;
	}
	.about{
		padding-left: 10% !important;
	}
        
             /*For mobile iphone s6+ (5 inch)*/  
         
        .container_mobile{
            width: 100% !important;
                max-width: 100% !important;
                margin: 0px;
                padding: 0px !important;
        }
        .all_page_item_view_mobile{
            max-width: 100% !important;
            width: 100% !important;
        }
        .block_similar_mobile{
            max-width: 100% !important;
            width: 100% !important;
        }
        .rating_mobile{
            margin-top: 1rem;
        }
        .title_reviews_mobile{
            margin-top: 29rem;
        }
        .header_rating_mobile{
            left : 14.4em !important;
        }
        .block_similar_mobile{
            margin-top: 3rem;
        }
        .ratings4_mobile{
            margin-top: 0rem !important;
        }
        .main-nav-bar_mobile{
            width: 90px !important;
        }
        .top_nav_mobile{
            max-width: 80% !important;
        }
        .sections_mobile{
            width: 59.8%;
        }
        .col_item_mobile{
             width: 90%;
        max-width: 90%;
        }
        .icon-flag{
            margin-top: 0rem !important;
        }
        .body_mobile{
            overflow-x: hidden;
        }
        
        .img-logo_mobile {
            margin-left: 10px;
        }
        .div_icon_footer_mobile {
    margin-left: 15% !important;
        }
        .input_search_sm {
    display: none !important;
}
  .input_search_sm{
                    width: 60% !important;
                }
                .section_about{
                    font-size: 1.8rem;
                }
                #main-navbar-items .navbar-nav{
                    padding-top: 0.6rem;
                }
                @media (min-width: 1450px){
                    .contact-us-div {
                        left: 61.5vw;
                    }
                }
                 @media (min-width: 1550px){
                    .contact-us-div {
                        left: 60.5vw;
                    }
                }
                   @media (min-width: 1850px){
                    .contact-us-div {
                        left: 59.5vw;
                    }
                }
                
                @media (min-width: 1240px) and (max-width: 1400px) {
                    .about {
                        padding-left: 13% !important;
                    }
                }
                @media (min-width: 768px) and (max-width: 1030px) {
                    .sth 
                    {
                        left: 39em !important;
                        max-width: 30% !important;
                    }

                    .top{
                        margin-bottom: 15%;
                    }
                    .right-arrow
                    {
                        left: 15em;
                    }
                    .img-logo{
                        width: 80%;
                    }
                    .logo {
                        width: 13rem;
                        display: block;
                        margin-left: auto;
                        margin-right: auto;
                    }
                    .top_nav_mobile{
                        max-width: 60% !important;
                    }

                }

                @media (max-width: 1105px) and (min-width: 1024px){
                    #main-navbar-items ul li {
                        font-size: 1.1rem !important;
                    }
                }
                @media (max-width: 1025px) and (min-width: 1024px){
                    #main-navbar-items ul li {
                        font-size: 0.7rem !important;
                    }
                    .ul_navbar {
                        width: 47rem;
                    }
                }
                @media (max-width: 1105px) and (min-width: 1025px){
                    #nav-bar-search {
                        width: 33rem !important;
                    }
                        #main-navbar-items .navbar-nav{
                    padding-top: 0rem;
                }
                }
                @media (max-width: 991px){
                    .input_search_sm{
                        width: 33rem !important;
                    }
                }
                @media (max-width: 1030px) and (min-width: 1024px){
                    #main-navbar-items ul li {
                        margin-right: 12px;
                        font-size: 0.9rem;
                    }
                }
        @media (min-width: 400px) and (max-width: 1024px) {
            #main-navbar-items ul li {
                font-size: 0.9rem;
            }
                     #main-navbar-items .navbar-nav{
                    padding-top: 0rem;
                }
            #lang-nav-bar .nav-item a {
                font-size: 1.4em !important;
            }
            .ul_navbar_mobile .nav-item a {
                font-size: 3em !important;
            }
            .ul_navbar_mobile{
                width: 37em !important;
            }
            .nav-item a{
                font-size: 1.3em !important;
            }

            #nav-bar-search
            {
                margin-right: 4rem;
                width: 300px;
            }
           
        }
        @media (min-width: 1000px) and (max-width: 1030px) {
              .contact-us-div{
                margin-top: 5em !important;
        }
        .contact-us-div_mobile{
             margin-top: 2em !important; 
        }
        }
        @media (min-width: 900px) and (max-width: 1000px) {
            .contact-us-div{
                margin-bottom: 5rem;
                margin-top: -7em !important;
            }
            .contact-us-div_mobile{
                margin-top: -5em !important;
                padding-bottom: 23rem;
            }
            .right-arrow {
                left: 25.5vw !important;
            } 
        }
        @media (min-width: 992px) and (max-width: 1000px) {
            .contact-us-div {
                margin-bottom: 5rem;
                margin-top: 4em !important;
            }
            .sth {
                left: 46em !important;
            }
        }
         @media (min-width: 880px) and (max-width: 933px) {
            .contact-us-div {
                margin-top: -9em !important;
            }
             .sth{
                left: 38em !important;
            }
        }
        @media (min-width: 850px) and (max-width: 910px) {
            .sth{
                left: 36em !important;
            }
        }
        @media (min-width: 810px) and (max-width: 850px) {
            .sth{
                left: 34em !important;
            }
            .review-div {
                max-width: 60%;
                margin-top: 1em;
                left: 8vw;
            }
            .contact-us-div {
                margin-top: -11em !important;
                margin-bottom: 7rem;
            }
        }
    
        @media (min-width: 990px) and (max-width: 1022px) {
           .sth {
                left: 43em !important;
           }
        }
        @media (min-width: 400px) and (max-width: 900px) {
          .contact-us-div{
                margin-top: -9em !important;
                margin-bottom: 7rem;
            }     
             .div_icon_footer {
                padding-left: 8% !important;
                /*margin-left: 18% !important;*/
            }
        }
        @media (min-width: 780px) and (max-width: 812px) {
            .sth{
                left: 33em !important;
                margin-bottom: 16rem !important;
            }
            .review-div {
                max-width: 60%;
                margin-top: 1em;
                left: 8vw;
            }
            .contact-us-div {
                margin-top: -17em !important;
                margin-bottom: 7rem;
            }
        }
                @media (min-width: 768px) and (max-width: 780px) {
            .sth{
                left: 32em !important;
                 margin-bottom: 21rem !important;
            }
            .review-div {
                max-width: 60%;
                margin-top: 1em;
                left: 8vw;
            }
            .contact-us-div {
                margin-top: -21em !important;
                margin-bottom: 7rem;
            }
        }
        @media (max-width: 776px) and (min-width: 690px){
            .div_icon_footer {
                padding-left: 8% !important;
                margin-left: 0% !important;
            }
        }
        @media (max-width: 768px){
            .about-div {
                left: 1em;
                margin-top: 0rem !important;
            }
            .text_in_about{
                margin-top: -16rem !important;
            }
            .about {
                padding-left: 18% !important;
            }
        }
        </style>
        @if(session('lang') == 'ar')
        <style>
            .rtl{
                float: right;
                text-align: right;
                direction: rtl;
            }

        </style>
        @endif
@section ('styles')

@endsection

@section ('main_section')
<style>
    @media (min-width: 400px) and (max-width: 1024px) {
        #main-navbar-items ul li {
            font-size: 0.9rem;
        }
        #navbarSupportedContent ul li {
            font-size: 1.2rem;
        }
        #lang-nav-bar .nav-item a {
            font-size: 1.4em !important;
        }
        #main-navbar-items ul li {
            margin-right: 2rem !important;
        }
        .ul_navbar {
            width: 33rem;
        }
        .input_search_sm{
            margin-top:2rem !important;
        }
        .ul_navbar_mobile .nav-item a {
            font-size: 3em !important;
        }
        .ul_navbar_mobile{
            width: 39em !important;
        }
        .nav-item a{
            font-size: 1.2rem !important;
        }

        #nav-bar-search
        {
            margin-right: 4rem;
            width: 300px;
        }
        #main-navbar-items ul li {
            margin-top: 9px;
        }
    }
    @media (max-width: 1025px) and (min-width: 992px){
        .ul_navbar {
            width: 75rem;
        }
        .nav-item a{
            font-size: 1.8em !important;
        }
    }
    @media (min-width: 1024px) and (max-width: 1288px) {
        .ul_navbar_mobile .nav-item a {
            font-size: 1em !important;
        }
        .review-div{
            max-width:63%;
        }
        .right-arrow {
            left: 23.5vw !important;
        }
    }
    /*        @media (min-width: 1110px) and (max-width: 1200px) {
               .right-arrow {
                    left: 30.5rem !important;
                }
            }
            @media (min-width: 1024px) and (max-width: 1120px) {
               .right-arrow {
                    left: 25.5rem !important;
                }
            }*/
    @media (max-width: 817px) and (min-width: 750px){
        .ul_navbar {
            width: 33rem;
        }
    }
    @media (min-width: 200px) and (max-width: 590px) {
        .review-div{
            left: 0rem !important;
        }
    }
    @media (min-width: 200px) and (max-width: 568px) {
        .thumnbail {
            margin-top: 0rem !important;
            width: 8.6rem !important;
        }
        .block_header{
            left: 0px !important;
            width: 96% !important;
        }
        .input_search_sm{
            width: 100%;
            margin-right: auto !important;
        }
        .block_header .header_slider{
            width: 64rem !important;
            left: 0rem !important;
        }
        .block_header .header_slider div{
            width: 64rem !important;
        }
        .block_header .header_slider .image_header{
            width: 100% !important;
        }
        .block_filter{
            margin-top: 0.8rem;
        }
        .top_nav {
            max-width: 100% !important;
        }
        #main-nav-bar a{
            width: 100% !important;
        }
        .logo{
            width:12rem;
            margin-left:unset !important;
        }
        .review-div{
            left: -1rem !important;
        }
        .img-logo{
            width: 94%;
            height: auto;
            margin-left: 0%;
        }
        .about {
            padding-left: 4em !important;
        }
    }
    @media (min-width: 200px) and (max-width: 450px) {
        .input_search_sm {
            width: 100% !important;
        }
        .ul_navbar {
            width: 100%;
        }
        .about {
            padding-left: 1em !important;
        }
    }
</style>

<style>
    .ul_navbar_mobile_for_mobile .navbar-nav {
        width: 41em !important;
        padding-top: 1rem !important;
    }
    .input_search_sm_for_mobile{
        padding: 2.5rem 12px !important;
        font-size: 2.5rem !important;
        width: 47rem !important;
    }
    .logout-form_for_mobile{
        margin-top: -0.7rem;
    }
    .main-navbar-items_for_mobile {
        font-size: 0.7rem !important;
    }
    .ul_navbar_mobile .nav-item_for_mobile a {
        font-size: 4em !important;
    }
    .logo_for_mobile {
        width: 16rem;
    }
    #lang-nav-bar .nav-item_for_mobile a {
        font-size: 2.4em !important;
    }
    .icon-flag_for_mobile {
        width: 35px;
        height: 35px;
        margin-top: -0.5rem !important;
    }
    .div_icon_footer_mobile_for_mobile {
        margin-left: 20% !important;
        padding-left: 4% !important;
    }
    .text_in_about_for_mobile{
        max-width: 92%;
        flex: 0 0  92%;
        left: 4%;
    }
    .img-logo_mobile_for_mobile{
        display: none !important;
    }
    .slider_image_about_for_mobile{
        margin-top: 0rem !important;
        margin-bottom: 20rem;
    }
    .slider_image_about_for_mobile .review-div{
        flex: 0 0 80%;
        max-width: 80%;
    }
    .hr-review_for_mobile {
        width: 106.5%;
    }
    .section_about_for_mobile{
        font-size: 2.5rem;
    }
    .section_title_for_mobile{
        font-size: 3rem;
    }
    .contact-us-div_for_mobile{
        left: -44rem !important;
        margin-top: 40em !important;
        padding-bottom: 5rem;
    }
    .contact-par_for_mobile{
        font-size: 2.3rem;
    }
    .phone_for_mobile, .mail_for_mobile {
        font-size: 2.3rem;
    }
    .icon_slider_right_for_mobile, .icon_slider_left_for_mobile{
        padding: 0.4rem;
        font-size: 2rem;
        top: 7em !important;
    }
    .top_for_mobile{
            left: 5em !important;
            bottom:  2% !important;
    }
    .title_block_slider_for_mobile{
        font-size: 2.2rem;
    }
    .title_footer_for_mobile{
        font-size: 3.7rem;
    }
    .text_footer_for_mobile{
        font-size: 2.6rem;
    }
    .icon_footer_for_mobile{
       font-size: 4rem;
    }
</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<div class="row"> 
    <div class="col-lg-5 col-md-4 col-sm-11 col-xs-11  about-div text_in_about" style="margin-top:-16rem;">
		<h1 class="rtl"> @lang('About Dukkangi')</h1>
                @if(session('lang') == 'ar' )
                    <p class="rtl section_about">
			موقع دكنجي هو موقع يضم كل مستلزمات المستهلك من مواد غذائية و البسة و معدات ضروري لحياته اليومية 
                        هدفنا راض المستهلك و سعادته و تامين كل وسائل الراحلة المتاحة  
                        في حال وجهتك اي مشكلة عند التعامل مع الموقع يمكنك ان ترسلنا و سوف نقوم بحلها مباشرا
                    </p>
                @else
		<p class="rtl section_about">
			Lorem ipsum dolor sit amet, has et saepe bonorum meliore, eum ex case eros splendide. Mei vide autem at, duo noster patrioque assentior in. Graeci consulatu iracundia in sed, cum autem inermis ut. Has quis quas incorrupte id, cu usu suas eleifend. Eum id ignota everti voluptatum.
		</p >
                @endif
                @if(session('lang') == 'ar' )
                    <p class="rtl section_about">
                        موقع دكنجي يتح لك العديد من العروض و الهدية يمكنك الاستفادة منها 
                        كما انه يضمن لك جودة المنتجات التي يقوم ببيعك اياها 
                        يمكنك ارجاع اي منتاج في حال كان غير مطابق للموصفات المذكور في الموقع
                    </p>
                @else
                    <p class="rtl section_about">
			Mei placerat phaedrum molestiae ut, te velit debet recusabo cum. Falli choro no vim. Commodo quaerendum ad has. Omnis aperiam alterum his an, eos no minim ignota commune. No pro enim ignota, eirmod omnesque qui an, ei sea augue accusamus efficiendi.
                    </p>
                @endif
                @if(session('lang') == 'ar' )
                    <p class="rtl section_about">
                        خدمتنا متاحة  اربعون و عشرون ساعة ويوجد موضفين 
                        للاجاب عن استفسارتكم
                        و تسائلتكم يمكنكم التواصل معون في اي وقت تريدون 
                    </p>
                @else
                     <p class="rtl section_about">
                        Mei placerat phaedrum molestiae ut, te velit debet recusabo cum. Falli choro no vim. Commodo quaerendum ad has. Omnis aperiam alterum his an, eos no minim ignota commune. No pro enim ignota, eirmod omnesque qui an, ei sea augue accusamus efficiendi.
                    </p>
                @endif
		<hr class="rtl ">
                @if(session('lang') == 'ar' )
                <h3 class="rtl section_title" style="font-weight:600;">ما المطلوب من المستخدم :</h3>
                    <p class="rtl section_about">
                            نرجو من مستخدمين تقيم المنتجات و ذلك للحصول على خدمة افضل و لمساعدتنا على تطوير ادائن في العمل و تحسين خدمتنا
                            ادخال المعلومات الصحيح عند تسجيل الدخول و اعطاء العنوان بتفصيل من اجل سرعة و صول المنتج الى المستخدم
                            
                    </p>
                @else
                <h3 class="rtl section_title" style="font-weight:600;">Section 2</h3>
                    <p class="rtl section_about">
                            Mei placerat phaedrum molestiae ut, te velit debet recusabo cum. Falli choro no vim. Commodo quaerendum ad has. Omnis aperiam alterum his an, eos no minim ignota commune. No pro enim ignota, eirmod omnesque qui an, ei sea augue accusamus efficiendi.
                    </p>
                @endif
		<hr class="rtl">
                @if(session('lang') == 'ar' )
                <h3 class="rtl section_title" style="font-weight:600;"> طموحتنا :</h3>
                    <p class="rtl section_about">
                          نطمح في المستقبل انا نصبح اكبر متجر على مستوى العالم 
                          وان نلبي كل مطالب زبائننا الكرام 
                          وان نوفر احسن اخدمة باقل سعر 
                          
                    </p><span class="off_item" value="5"></span>
                @else
                    <h3 class="rtl section_title" style="font-weight:600;"> Section 3</h3>
                    <p class="rtl section_about">
                            Mei placerat phaedrum molestiae ut, te velit debet recusabo cum. Falli choro no vim. Commodo quaerendum ad has. Omnis aperiam alterum his an, eos no minim ignota commune. No pro enim ignota, eirmod omnesque qui an, ei sea augue accusamus efficiendi.
                    </p>
                @endif
		
	</div>
	<div class="col-lg-6 col-md-8 col-sm-11  about-div slider_image_about" style="margin-top:-16rem;">
		<img class="img-logo" src="front-end/images/welcome-logo.png" width="500" height="180">

		<div class="review-div col-xl-6 col-lg-7 col-xs-12">
                    <h4 class="title_block_slider" style="@if(session('lang') == 'ar' )
				float: right;
				@endif
			  ">
				@lang('REVIEWS')
			</h4>
			<hr class="hr-review" style="margin-top: 40px;">
                        <span  class="glyphicon glyphicon-chevron-right right-arrow icon_slider_right" style="left: 91% !important;" onclick="right();"></span>
			<span  class="glyphicon glyphicon-chevron-left left-arrow icon_slider_left" onclick="left();"></span>
			<div class="inner-review">
				{{$review->desc}}
					<span class='rating ratings{{$review->rate}} top'></span>
			</div>
			<br><br>
		</div>
	</div> 
    <div class="contact-us-div col-md-6  sth"  style="margin-top: 6em;">
        <h2 class="title_contact_us">@lang('Contact Us')</h2>
        <span class="mail">@</span>
        <p class="contact-par">
            info@dukkangi.com
            <br>
            support@dukkangi.com
        </p><span class="glyphicon glyphicon-earphone phone"></span>
        <p class="contact-par">
            +49 5609-809<br>
            +49 5609-808
        </p>
    </div>
</div>

@endsection

@section('scripts')
<script src="{{URL::asset('js/jquery.min.js')}}"></script>
<script src="{{URL::asset('/front-end/js/plugin/SimpleStarRating.js')}}"></script>
	<script>
    function when_open_mobile(){
        if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
            $('#main-navbar-items').addClass('ul_navbar_mobile_for_mobile');
            $('.input_search_sm').addClass('input_search_sm_for_mobile');
            $('.logo').addClass('logo_for_mobile');
            $('.nav-item').addClass('nav-item_for_mobile');
            $('.icon-flag').addClass('icon-flag_for_mobile');
            $('.about').addClass('div_icon_footer_mobile_for_mobile');
            $('.text_in_about').addClass('text_in_about_for_mobile');
            $('.img-logo').addClass('img-logo_mobile_for_mobile');
            $('.slider_image_about').addClass('slider_image_about_for_mobile');
            $('.hr-review').addClass('hr-review_for_mobile');
            $('.section_about').addClass('section_about_for_mobile');
            $('.section_title').addClass('section_title_for_mobile');
            $('.contact-us-div').addClass('contact-us-div_for_mobile');
            $('.contact-par').addClass('contact-par_for_mobile');
            $('.phone').addClass('phone_for_mobile');
            $('.mail').addClass('mail_for_mobile');
            $('.icon_slider_right').addClass('icon_slider_right_for_mobile');
            $('.icon_slider_left').addClass('icon_slider_left_for_mobile');
            $('.top').addClass('top_for_mobile');
            $('.title_block_slider').addClass('title_block_slider_for_mobile');
            $('.title_footer').addClass('title_footer_for_mobile');
            $('.text_footer').addClass('text_footer_for_mobile');
            $('.icon_footer').addClass('icon_footer_for_mobile');
            $('#logout-form').addClass('logout-form_for_mobile');
        }
    }
    
when_open_mobile();
  
		rerate();
			num = 1 ;
	function right(){
		num++;
		getreview(num);
	}
	function left(){
		if (num > 1){
			num--;
			getreview(num)
		}
	}

	function getreview(num){
		$.ajax({
            url: '/getreview',
            type: "POST",
            data: { "index": num },
            dataType: 'json',
            headers: {
        		"x-csrf-token": $("[name=_token]").val()
    		},
        }).done(response => {
        	string1 = "<span class='rating ratings" ;
        	string2 = "'></span>";
        	text = response[0].desc;
        	text += string1 + response[0].rate + string2; 
        	console.log(text);
        	$('.inner-review').html(text);
        	rerate();
        });
	}	
	function rerate(){

		var ratings = document.getElementsByClassName('ratings');

	    for (var i = 0; i < ratings.length; i++) {

	        var r = new SimpleStarRating0(ratings[i]);

	    }
	    //5 functions for 1, 2, 3, 4, 5 Stars for anything
	    //one more function for those which don't have any rate
	    //Initial Rate Subcategory
	    var ratings = document.getElementsByClassName('ratings1');

	    for (var i = 0; i < ratings.length; i++) {

	        var r = new SimpleStarRating1(ratings[i]);

	    }

	 	var ratings = document.getElementsByClassName('ratings2');
		     for (var i = 0; i < ratings.length; i++) {
	        var r = new SimpleStarRating2(ratings[i]);

	    }

	    //Initial Rate Comments

	    var ratings = document.getElementsByClassName('ratings3');
	                

	                for (var i = 0; i < ratings.length; i++) {

	        		var r = new SimpleStarRating3(ratings[i]);
	                }
	    //Initial Rate Simiproducts


	    var ratings = document.getElementsByClassName('ratings4');
	    for (var i = 0; i < ratings.length; i++) {
	        var r = new SimpleStarRating4(ratings[i]);

	    }

	    var ratings = document.getElementsByClassName('ratings5');
	    for (var i = 0; i < ratings.length; i++) {
	        var r = new SimpleStarRating5(ratings[i]);

	    }
	}
        
                  if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {

$('.container').addClass('container_mobile');
$('.all_page_item_view').addClass('all_page_item_view_mobile');
$('.block_similar').addClass('block_similar_mobile');
$('.details_comment .rating').addClass('rating_mobile');
$('.title_reviews').addClass('title_reviews_mobile');
$('.header_page .rating').addClass('header_rating_mobile');
$('.block_similar').addClass('block_similar_mobile');
$('.ratings4').addClass('ratings4_mobile');
$('#main-nav-bar a').addClass('main-nav-bar_mobile');
$('.top_nav').addClass('top_nav_mobile');
$('.sections').addClass('sections_mobile');
$('.col_item').addClass('col_item_mobile');
$('body').addClass('body_mobile');
$('.img-logo').addClass('img-logo_mobile');
$('.div_icon_footer').addClass('div_icon_footer_mobile');
$('.contact-us-div').addClass('contact-us-div_mobile');

}

	</script>
	
@endsection