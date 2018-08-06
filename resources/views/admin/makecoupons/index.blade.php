@extends('admin.master')

@section('stylesheet')
<style type="text/css">
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1000; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4);  Black w/ opacity */
    -webkit-animation-name: fadeIn; /* Fade in the background */
    -webkit-animation-duration: 0.4s;
    animation-name: fadeIn;
    animation-duration: 0.4s
}
.modal-content {
    position: fixed;
    bottom: 0;
    background-color: #fefefe;
    width: 100%;
    -webkit-animation-name: slideIn;
    -webkit-animation-duration: 0.4s;
    animation-name: slideIn;
    animation-duration: 0.4s
}
.modal-header {
    padding: 2px 16px;
    background-color: #087380;
    color: white;
}

.modal-body {padding: 2px 16px;}

.modal-footer {
    padding: 2px 16px;
    background-color: #fefefe;
    color: white;
    text-align: center;
}

/* Add Animation */
@-webkit-keyframes slideIn {
    from {bottom: -300px; opacity: 0} 
    to {bottom: 0; opacity: 1}
}

@keyframes slideIn {
    from {bottom: -300px; opacity: 0}
    to {bottom: 0; opacity: 1}
}

@-webkit-keyframes fadeIn {
    from {opacity: 0} 
    to {opacity: 1}
}

@keyframes fadeIn {
    from {opacity: 0} 
    to {opacity: 1}
}
</style>
<link rel="stylesheet" href={{URL::asset('css/select2.min.css')}} />
@endsection

@section('title')
  Manage Coupons
@endsection

@section('grid')
    <div>
      <div id="coupon-grid"></div>
    </div>
    <div class="col-md-12" style="margin-top: 30px">
        <a href="{{route('groupcoupon')}}" class="btn btn-block btn-primary">Make Coupon</a>
        
    </div>

<div id="myModal" class="modal" >
	{!! Form::open(['route'=>'submitcoupon']) !!}
	<input type='hidden' value="0" id='user_id' name='user_id'>
    <div class="modal-content" 	style="width: 50%;margin-bottom: 20%; margin-left: 30%">
    <div class="modal-header">
      <h2>Submit Coupon</h2>
    </div>
    <div class="modal-body">
    	<p>
    		<h3>Submit Coupon.</h3>
    		Please Choose Type and Amount. 
    	</p>
		<div class="input-group">
		  <div class="input-group-prepend">
		    <div class="input-group-text" style="width: 100%">
		    <select class="custom-select" name="type">	
				<option value="fixed">Fixed Value </option>
				<option value="percentage">Percentage Value </option>
			</select>
		    <input type="number" class="form-control" name="fixedamount" aria-label="Text input with radio button" style="margin-left: 10px"> 
		    	
		    </div>
		  </div>
		 </div>
    </div>
    <div class="modal-footer" style="padding: 10px 10px"> 
    	<div class="col-md-6" >
    	{{ Form::Submit("Confirm",['class'=>'btn btn-block btn-primary'])}}
    	</div>
   		<div class="col-md-6">
    	<button type="button" class="btn btn-block btn-default" onclick="closeModal()"> Cancel</button>
    	</div>
   
    </div>
      </div>
    {!! Form::close() !!}
</div>

@endsection

@section('scripts')
    <script type="text/javascript" src="{{ URL::asset('js/coupon-grid.js') }}"></script>

	<script>
	var modal = document.getElementById('myModal');

	function viewModal(id){

	    modal.style.display = "block";
	    $('#user_id').val(id);

	}

	window.onclick = function(event) {
	    if (event.target == modal) {
	        modal.style.display = "none";
	    }
	}
	function closeModal(){
		modal.style.display = "none";
		$('#user_id').val(0);
	}
	</script>
	    <script type="text/javascript" src={{ URL::asset('js/select2.min.js') }}></script>

@endsection
