@extends ('client.main')
@section ('styles')

<script type="text/javascript" src="{{URL::asset('/front-end/js/plugin/jssor.slider.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('/front-end/js/plugin/slide.js')}}"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="{{URL::asset('/front-end/css/item_view.css')}}">
<style>
	
    .jssorl-009-spin img {
        animation-name: jssorl-009-spin;
        animation-duration: 1.6s;
        animation-iteration-count: infinite;
        animation-timing-function: linear;
    }

    @keyframes jssorl-009-spin {
        from {
            transform: rotate(0deg);
        }
        to {
            transform: rotate(360deg);
        }
    }

    .jssora093 {
        display: block;
        position: absolute;
        cursor: pointer;
    }

    .jssora093 .c {
        fill: none;
        stroke: #fff;
        stroke-width: 400;
        stroke-miterlimit: 10;
    }

    .jssora093 .a {
        fill: none;
        stroke: #fff;
        stroke-width: 400;
        stroke-miterlimit: 10;
    }

    .jssora093:hover {
        opacity: .8;
    }

    .jssora093.jssora093dn {
        opacity: .6;
    }

    .jssora093.jssora093ds {
        opacity: .3;
        pointer-events: none;
    }

    .jssort101 .p {
        position: absolute;
        top: 0;
        left: 0;
        box-sizing: border-box;
        background: #000;
    }

    .jssort101 .p .cv {
        position: relative;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border: 2px solid #000;
        box-sizing: border-box;
        z-index: 1;
    }

    .jssort101 .a {
        fill: none;
        stroke: #fff;
        stroke-width: 400;
        stroke-miterlimit: 10;
        visibility: hidden;
    }

    .jssort101 .p:hover .cv,
    .jssort101 .p.pdn .cv {
        border: none;
        border-color: transparent;
    }

    .jssort101 .p:hover {
        padding: 2px;
    }

    .jssort101 .p:hover .cv {
        background-color: rgba(0, 0, 0, 6);
        opacity: .35;
    }

    .jssort101 .p:hover.pdn {
        padding: 0;
    }

    .jssort101 .p:hover.pdn .cv {
        border: 2px solid #fff;
        background: none;
        opacity: .35;
    }

    .jssort101 .pav .cv {
        border-color: #fff;
        opacity: .35;
    }

    .jssort101 .pav .a,
    .jssort101 .p:hover .a {
        visibility: visible;
    }

    .jssort101 .t {
        position: initial;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border: none;
        opacity: .6;
    }

    .jssort101 .pav .t,
    .jssort101 .p:hover .t {
        opacity: 1;
    }
    .input_singup 
    {
    	margin-top: 10px;
    	width: 90%;
    	color :	#808080;	
    }
    .input_singup:hover {
	    border-color: #9c9c9c;
	}
	.glyph {
  	    width: 2.5em;
	    padding-left: 0.8em;
	    padding-top: 0.7em;
	    height: 2.5em;
	    margin-top: 0em;
	    left: 13.5em;
	    margin-bottom: 1em;
	    background-color: #d80001;
	    border-radius: 1.5em;
	    border-color: #d80001;
	    color: #fff;
	    font-size: 19px;
	    cursor: pointer;
	}
	.input_singup:hover
	{
	    border-color: #9c9c9c;
	}
	.input_singup:focus
	{
		color: #808080;
	}
	.sections
	{
		padding-left: 4em;
		margin-bottom: 9em;
	}
	thead
	{
		border-bottom: 1.5px solid #A9A9A9;
		color: #d80001;
		font-family: EagarFont;
	}
	.tr
	{
		border-top: 1.5px solid #A9A9A9;
	}
	td
	{ 
		border-right: 1.5px solid #A9A9A9;   
		text-align: -webkit-center;
		height: 4.5em;
	}
	.order
	{
		width: 15em;
	}
	.number
	{
		width: 3em;
	}
	.date 
	{
		width: 10em;
	}
	.state 
	{
		width: 8em;
	}
	.rate
	{
		width :8em;
		border-right: 0px solid #A9A9A9;		
	}
        #lang-nav-bar {
            margin-top: -20px;
        }
        #content_page {
            margin-top: -6rem !important;
        }
        .sections {
    width: 65.8%;
        }
        .glyph{
            left: 80%;
        }
        .div_icon_footer {
            padding-left: 14% !important;
        }
         .input_search_sm{
             width: 78% !important;   
            }
        @media (min-width: 1030px) and (max-width: 1270px) {
            .one_item_details, .modal_one_item_details
            {
                left: 2em !important;
                width: 34% !important;
            }
            .sections {
                width: 63.8%;
            }
        }
        @media (min-width: 768px) and (max-width: 1030px) {
            .sections{
                width: 60%;
            }
            .div_icon_footer{
                    margin-left: 20%;
            }
            .ul_navbar {
                width: 50rem !important;
            }
            .ul_navbar_mobile{
                width: 41rem !important;
            }
            .nav-item a {
                font-size: 1.8em !important;
            }
            .one_item_details, .modal_one_item_details
            {
                left: -1em !important;
                width: 41% !important;
            }
            #content_page{
                padding-left: 0rem;
                padding-right: 0rem;
            }
            .header_page_text_div{
                width: 92.3% !important;
                padding-left: 46% !important;
            }
            .icon-flag {
    margin-top: 0em;
            }
        }

        @media (max-width: 910px){
            .header_page{
                background-size: 147% !important;
            }
            .ul_navbar {
                width: 27rem !important;
            }
            .nav-item a {
                font-size: 2em !important;
            }
        }
           @media (max-width: 870px){
            .header_page{
                background-size: 154% !important;
            }
        }
        @media (max-width: 830px){
            .header_page{
                background-size: 161% !important;
                width: 100%;
                height: 17em;
                margin-left: 0%;
            }
            .div_icon_footer {
                margin-left: 16% !important;
            }
            .header_page_text_div {
                width: 100% !important;
                padding-left: 23em !important;
            }
            .one_item_details{
                left: -4em !important;
            }
            .sections {
                width: 64%;
            }
            .icon-flag {
    width: 20px !important;
    height: 20px !important;
}
#lang-nav-bar .nav-item a {
    font-size: 1.3em !important;
}
        }
        @media (min-width: 700px) and (max-width: 767px){
            .one_item_details{
                width: 37% !important;
            }
            .div_icon_footer {
                margin-left: 16% !important;
                width: 60%;
                padding-left: 9% !important;
            }
            .sections {
                width: 70%;
            }
            .header_page_text_div {
    padding-left: 38% !important;
            }
            #content_page {
    padding: 0rem;
            }
            .glyph{
                font-size: 14px !important;
            }
            .navbar-nav{
                display: flex !important;
            }
            #lang-nav-bar .nav-item a {
    font-size: 1em !important;
            }
            .icon-flag {
    margin-top: 0em;
            }
        }
        
        @media (max-width: 700px){
            #content_page {
                padding: 0rem;
            }
              .div_icon_footer {
                margin-left: 18% !important;
                width: 60%;
                padding-left: 4% !important;
            }
            #lang-nav-bar .nav-item a {
    font-size:0.9em !important;
            }
               .icon-flag {
    margin-top: 0em;
        width: 18px !important;
    height: 18px !important;;
            }
               .navbar-nav{
                display: flex !important;
            }
            .header_page {
                  background-size: 170% !important;
    background-position: center;
                height: 14.8em;
            }
            .header_page_text_div {
                top: 9.8em;
                padding-left: 4em !important;
            }
            .one_item_details{
                position: initial; 
                margin-top: 1.2em;
                    width: 70% !important;
                    margin-left: 15%;
            }
            .sections {
    width: 106%;
}
        }

        @media (max-width: 582px){
            .header_page {
                background-size: 190% !important;
            }
               .div_icon_footer {
                margin-left: 10% !important;
                width: 80%;
                padding-left: 4% !important;
            }
               #lang-nav-bar .nav-item a {
    font-size: 0.7em !important;
            }
        }
</style>
@endsection

@section ('main_section')
<style>
            @media (max-width: 950px){
            .header_page{
                background-size: 140% !important;
            }
.ul_navbar_mobile .nav-item a {
    font-size: 2.9em !important;
}
           
        }
        @media (max-width: 1024px) and (min-width: 400px){
.ul_navbar_mobile .nav-item a {
    font-size: 2.9em !important;
}
#main-navbar-items ul li {
    margin-top: 13px;
}
.ul_navbar_mobile {
    width: 55rem !important;
}
.input_search_sm{
    margin-top: 2rem !important;
}
.main-nav-bar_mobile{
    margin-right: 1.5rem;
}
#ex3{
    margin-right: 1rem;
}
}
</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<div class="col-md-12 all_page_item_view" id="content_page" style="margin-bottom: 14em;top: 3em;">
    <div class="header_page" style="background-image: url('/front-end/images/items_page/1.png');background-size:133%">
        <p class="header_page_text_div" style="width: 90.3%; padding-left: 30.5em">
            <b>{{Auth::user()->name }}</b> @lang('Profile')
            <img src="/front-end/images/items_page/star.png" class="one_start_slider" />
            
        </p>
	</div>     
	<div class="one_item_details" style="left:5em;width: 28%;">
		<div class="header_item_details" style="    margin-bottom: -6em;">
			<img src="{{isset(Auth::user()->image_id) ?Auth::user()->image_id : '/uploads/user.png'}}" style="height: auto;margin-left: 8%;margin-top: 2rem;width: 84%;">
			<span class="glyphicon glyphicon-cloud-upload glyph" onclick="upload();"  style="font-size: 20px;top: -3em;    width: 12%%;" > </span>
			{!! Form::open(['route'=>'upload-pic' , 'files'=>'true' , 'id'=>'upload']) !!}
				{{ Form::file('image', ['id'=>'file' , 'hidden'=>'hidden' ]) }}
			{!! Form::close() !!}
		</div>
		<div style="padding-left: 2em;padding-top: 2em;">
			<h3> {{Auth::user()->name}}</h3>
		
			<p type="text" class="input_singup" >{{Auth::user()->email}} </p>
			
			<input type="text" id="address" class="input_singup" placeholder ="{{ isset(Auth::user()->address) ? Auth::user()->address :'Address'}}     (Changable)">
			<input type="text" id="date_of_brith" class="input_singup" placeholder ="{{isset(Auth::user()->birth_date) ?Auth::user()->birth_date : Birthdate }} (Changable)" style="margin-bottom: 1em" >
                        <span class="glyphicon glyphicon-pencil glyph" aria-hidden="true"  onclick="changeDetials()" ></span>
		</div>
	</div>
	<div class="sections" style="overflow: auto;height: 33em;">
		<table border="0">
			<thead style="border-top: 0px solid #A9A9A9;">
				<td class="number">
					#	
				</td>
				<td class="order">
					@lang('My Orders')
				</td>
				<td class="date">
					@lang('Date')
				</td>
				<td class="state">
					@lang('Order State')
				</td>
				<td class="state">
					@lang('Packed')
				</td>
				<td class="rate">
					@lang('DHL-Code')
				</td>
			</thead>
			<tbody>
				@foreach($orders as $order)
				<tr class="tr">
					<td>{{$order->id}}</td>
					<td>
						@foreach ($order->orderItems as $item)
							{{isset($item->item_id->english) ?$item->item_id->english : ''}}
							<br>
						@endforeach
					</td>

					<td>{{$order->created_at}}</td>
					<td>
						@if($order->status_id == 2)
							In Progress
						@elseif ($order->status_id == 3)
							Completed
						@elseif ($order->status_id == 4)
							Deleted
						@endif
					</td>
					<td>
						{{$order->packed}}
					</td>
					<td class="rate" >
						{{isset($order->dhl_code) ? $order->dhl_code : 'Not Yet'}}
					</td>
				</tr>		
				@endforeach
			</tbody>
		</table>
	</div>
</div>


@endsection

@section('scripts')

 <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
            <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
            <script src="/front-end/js/main.js"></script>

<script src="{{URL::asset('/front-end/js/plugin/SimpleStarRating.js')}}"></script>
<script >
	 $( function() {
	    $("#date_of_brith").datepicker({
	       yearRange: "-70:-15",
	      changeMonth: true,
	      changeYear: true
	    });
	  });
	function upload(){
		$('#file').click();
		$('#file').change(function(){
			submit();
		})
	}
	function submit(){
		$('#upload').submit();
	}
	function changeDetials(){
		birthdate = $('#birthdate').val();
		address = $('#address').val();
		$.ajax({
            url: '/changedetails',
            type: "POST",
            data: { "birthdate": birthdate , "address":address },
            dataType: 'json',
            headers: {
        		"x-csrf-token": $("[name=_token]").val()
    		},
        }).done(response => {
        	 swal({ title:  <?php
                                if (session('lang') == 'ar') 
                                    echo "'نجاح!'";
                                else 
                                    echo "'Successful!'";
                             ?>,
        	  text: <?php
                                if (session('lang') == 'ar') 
                                    echo "'تم التعديل بنجاح'";
                                else 
                                    echo "'Changed Successfully'";
                             ?>, type: "success", timer: 2000, showConfirmButton: false });
        });
	}	</script>
	
	


@endsection