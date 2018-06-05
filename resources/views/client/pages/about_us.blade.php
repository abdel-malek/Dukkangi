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
		left: 21.5em;
    	top: 10.5em;
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
		top: 10.5em;
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
		max-width: 30%;
	    margin-top: 1em;
	        left: 61em;
    top: 0em;
	   	padding: 10px;
    }
	.review-div{
	    max-width: 30%;
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
		margin-left: 42px;
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
	    left: 1.7em;
		color: #d80001;
	    font-size: 20px;
	    margin-left: -20px;
	    font-weight: bolder;
	    font-family: fantasy;
	}
	.glyphicon{
		top:140px !important;
	}
	.sth{
		margin-top: 20px;
	}
	.top{
		margin-bottom: 13%;
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
	}
</style>
@section ('styles')

@endsection

@section ('main_section')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<div class="row"> 
	<div class="col-5 about-div">
		<h1> About Dukkangi</h1>
		<p>
			Lorem ipsum dolor sit amet, has et saepe bonorum meliore, eum ex case eros splendide. Mei vide autem at, duo noster patrioque assentior in. Graeci consulatu iracundia in sed, cum autem inermis ut. Has quis quas incorrupte id, cu usu suas eleifend. Eum id ignota everti voluptatum.
		</p>
		<p>
			Mei placerat phaedrum molestiae ut, te velit debet recusabo cum. Falli choro no vim. Commodo quaerendum ad has. Omnis aperiam alterum his an, eos no minim ignota commune. No pro enim ignota, eirmod omnesque qui an, ei sea augue accusamus efficiendi.
		</p>
		<p>
			Mei placerat phaedrum molestiae ut, te velit debet recusabo cum. Falli choro no vim. Commodo quaerendum ad has. Omnis aperiam alterum his an, eos no minim ignota commune. No pro enim ignota, eirmod omnesque qui an, ei sea augue accusamus efficiendi.
		</p>
		<hr>
		<h3>Section 2</h3>
		<p>
			Mei placerat phaedrum molestiae ut, te velit debet recusabo cum. Falli choro no vim. Commodo quaerendum ad has. Omnis aperiam alterum his an, eos no minim ignota commune. No pro enim ignota, eirmod omnesque qui an, ei sea augue accusamus efficiendi.
		</p>
		<hr>
		<h3> Section 3</h3>
		<p>
			Mei placerat phaedrum molestiae ut, te velit debet recusabo cum. Falli choro no vim. Commodo quaerendum ad has. Omnis aperiam alterum his an, eos no minim ignota commune. No pro enim ignota, eirmod omnesque qui an, ei sea augue accusamus efficiendi.
		</p>
		
	</div>
	<div class="col-6 about-div">
		<img class="img-logo" src="front-end/images/welcome-logo.png" width="500" height="180">

		<div class="review-div col-md-6">
			<h4>
				REVIEWS
			</h4>
			<hr class="hr-review">
			<span  class="glyphicon glyphicon-chevron-right right-arrow" onclick="right();"></span>
			<span  class="glyphicon glyphicon-chevron-left left-arrow" onclick="left();"></span>
			<div class="inner-review">
				{{$review->desc}}
					<span class='rating ratings{{$review->rate}} top'></span>
			</div>
			<br><br>
		</div>

	</div> 
	<div class="contact-us-div col-md-6 sth" >
			<h2>Contact Us</h2>
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

	</script>
	
@endsection