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
	.right-arrow
	{    
		cursor: pointer;
		left: 21.5em !important;
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
	        left: 61em;
    top: 0em;
	   	padding: 10px;
    }
	.review-div{
	    max-width: 48%;
	    margin-top: 1em;
	    left:14em;
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
	    top: 1.4em;
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
		padding-left: 13em !important;
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
	@media (min-width: 768px) and (max-width: 1030px) {
		.sth 
		{
			left: 46em !important;
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
        
        @media (min-width: 1000px) and (max-width: 1030px) {
              .contact-us-div{
                margin-top: -2em !important;
        }
            
        }
          @media (min-width: 900px) and (max-width: 1000px) {
              .contact-us-div{
                margin-top: -4em !important;
        }
            
        }
         @media (min-width: 400px) and (max-width: 900px) {
              .contact-us-div{
                margin-top: -9em !important;
        }
            
        }
	@if(session('lang') == 'ar')
		.rtl{
			float: right;
		}
	@endif
</style>
@section ('styles')

@endsection

@section ('main_section')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<div class="row"> 
	<div class="col-lg-5 col-sm-4  about-div">
		<h1 class="rtl"> @lang('About Dukkangi')</h1>
		<p class="rtl">
			Lorem ipsum dolor sit amet, has et saepe bonorum meliore, eum ex case eros splendide. Mei vide autem at, duo noster patrioque assentior in. Graeci consulatu iracundia in sed, cum autem inermis ut. Has quis quas incorrupte id, cu usu suas eleifend. Eum id ignota everti voluptatum.
		</p >
		<p class="rtl">
			Mei placerat phaedrum molestiae ut, te velit debet recusabo cum. Falli choro no vim. Commodo quaerendum ad has. Omnis aperiam alterum his an, eos no minim ignota commune. No pro enim ignota, eirmod omnesque qui an, ei sea augue accusamus efficiendi.
		</p>
		<p class="rtl">
			Mei placerat phaedrum molestiae ut, te velit debet recusabo cum. Falli choro no vim. Commodo quaerendum ad has. Omnis aperiam alterum his an, eos no minim ignota commune. No pro enim ignota, eirmod omnesque qui an, ei sea augue accusamus efficiendi.
		</p>
		<hr class="rtl">
		<h3 class="rtl">Section 2</h3>
		<p class="rtl">
			Mei placerat phaedrum molestiae ut, te velit debet recusabo cum. Falli choro no vim. Commodo quaerendum ad has. Omnis aperiam alterum his an, eos no minim ignota commune. No pro enim ignota, eirmod omnesque qui an, ei sea augue accusamus efficiendi.
		</p>
		<hr class="rtl">
		<h3 class="rtl"> Section 3</h3>
		<p class="rtl">
			Mei placerat phaedrum molestiae ut, te velit debet recusabo cum. Falli choro no vim. Commodo quaerendum ad has. Omnis aperiam alterum his an, eos no minim ignota commune. No pro enim ignota, eirmod omnesque qui an, ei sea augue accusamus efficiendi.
		</p>
		
	</div>
	<div class="col-lg-6 col-sm-8 about-div">
		<img class="img-logo" src="front-end/images/welcome-logo.png" width="500" height="180">

		<div class="review-div col-xs-6">
			<h4 style="@if(session('lang') == 'ar' )
				float: right;
				@endif
			  ">
				@lang('REVIEWS')
			</h4>
			<hr class="hr-review" style="margin-top: 40px;">
			<span  class="glyphicon glyphicon-chevron-right right-arrow" onclick="right();"></span>
			<span  class="glyphicon glyphicon-chevron-left left-arrow" onclick="left();"></span>
			<div class="inner-review">
				{{$review->desc}}
					<span class='rating ratings{{$review->rate}} top'></span>
			</div>
			<br><br>
		</div>
	</div> 
    <div class="contact-us-div col-md-6  sth"  style="margin-top: 5em;">
        <h2>@lang('Contact Us')</h2>
        <span class="mail">@</span>
        <p class="" ="contact-par">
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
}

	</script>
	
@endsection