@if (Session::has('success'))
	<div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Success! </h4>
  <strong>Success:</strong> {{ Session::get('success') }}
</div>
	
@endif

@if (count($errors) > 0 )
	
	<div class= "alert alert-danger " role = "alert">
	<h4 class="alert-heading"> Failed! </h4>
	<strong>Failed: </strong> 
		<ul>
		@foreach ($errors->all() as $error)
			<li> {{$error}} </li>
		@endforeach
		</ul>
	</div>

@endif
