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
		width: 10em;
	}
	.rate
	{
		width :8em;
		border-right: 0px solid #A9A9A9;		
	}

	@media (min-width: 768px) and (max-width: 1030px) {
		.sections{
			width: 60%;
		}
		.one_item_details, .modal_one_item_details
		{
      		left: -1em !important;
    		width: 38% !important;
		}
	]



</style>
@endsection

@section ('main_section')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<div class="col-md-12 all_page_item_view" id="content_page" style="margin-bottom: 14em;top: 3em;">
    <div class="header_page" style="background-image: url('/front-end/images/items_page/1.png');background-size:133%">
        <p class="header_page_text_div" style="width: 90.3%; padding-left: 30.5em">
            {{Auth::user()->name }}
            <img src="/front-end/images/items_page/star.png" class="one_start_slider" />
            
        </p>
	</div>     
	<div class="one_item_details" style="left:5em;width: 28%;">
		<div class="header_item_details" style="    margin-bottom: -6em;">
			<img src="{{isset(Auth::user()->image_id) ?Auth::user()->image_id : '/uploads/user.png'}}" style="height: 400px;width: 100%">
			<span class="glyphicon glyphicon-cloud-upload glyph" onclick="upload();"  style="font-size: 20px;left: 15em;top: -3em;    width: 12%%;" > </span>
			{!! Form::open(['route'=>'upload-pic' , 'files'=>'true' , 'id'=>'upload']) !!}
				{{ Form::file('image', ['id'=>'file' , 'hidden'=>'hidden' ]) }}
			{!! Form::close() !!}
		</div>
		<div style="padding-left: 2em;padding-top: 2em;">
			<h3> {{Auth::user()->name}}</h3>
		
			<p type="text" class="input_singup" >{{Auth::user()->email}} </p>
			
			<input type="text" id="address" class="input_singup" placeholder ="{{ isset(Auth::user()->address) ? Auth::user()->address :'Address'}}     (Changable)">
			<input type="text" id="date_of_brith" class="input_singup" placeholder ="Birthdate (Changable)" style="margin-bottom: 1em" >
			<span class="glyphicon glyphicon-pencil glyph" aria-hidden="true" onclick="changeDetials()" ></span>
		</div>
	</div>
	<div class="sections">
		<table border="0">
			<thead style="border-top: 0px solid #A9A9A9;">
				<td class="number">
					#	
				</td>
				<td class="order">
					My Orders
				</td>
				<td class="date">
					Date
				</td>
				<td class="state">
					State
				</td>
				<td class="rate">
					Delete
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
					<td>{{$order->status == 1 ? "Delivered <i><small>(or on its way)</small></i>" : "Not Delivered Yet" }}</td>
					<td class="rate" ><span class="glyphicon glyphicon-trash" data-id="{{$order->id}}" data style="cursor: pointer" onclick="Delete(this);"></span></td>
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
        	 swal({ title: "Successfully!", text: "Changed Successfully.", type: "success", timer: 2000, showConfirmButton: false });
        });
	}
	function Delete(obj){
		$.ajax({
            url: '/delteorder',
            type: "POST",
            data: { "id": $(obj).data('id')},
            dataType: 'json',
            headers: {
        		"x-csrf-token": $("[name=_token]").val()
    		},
        }).done(response => {
        	 swal({ title: "Successfully!", text: "Changed Successfully.", type: "success", timer: 2000, showConfirmButton: false });
 			location.reload();
        });
	}
	rerate();

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