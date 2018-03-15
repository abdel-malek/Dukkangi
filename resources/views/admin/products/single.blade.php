@extends('admin.welcome')

@section('stylesheet')
 <link rel="stylesheet" href="http://localhost:8000/css/util.css" />
@endsection
@section('grid')
<br>
<div class= "row">
	<div class="col-md-4 " style="margin-left: 35px">
			
		<div id="#carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		  <ol class="carousel-indicators">
		    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		  </ol>
		  <div class="carousel-inner">
		    <div class="carousel-item active">
		      <img class="d-block w-100" src="..." alt="First slide">
		    </div>
		    <div class="carousel-item">
		      <img class="d-block w-100" src="..." alt="Second slide">
		    </div>
		    <div class="carousel-item">
		      <img class="d-block w-100" src="..." alt="Third slide">
		    </div>
		  </div>
		  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>

	</div>
	<div class="col-md-7">
		<ul class="list-group">
	  		<li class="list-group-item"><b>Name </b>(EN): {{ $product->english}} </li>
	  		<li class="list-group-item"><b>Name </b>(AR): {{ $product->arabic }} </li>
	  		<li class="list-group-item"><b>Name </b>(GR): {{ $product->german }} </li>
	  		<li class="list-group-item"><b>Name </b>(TR): {{ $product->turky  }} </li>
	  		<li class="list-group-item"><b>Name </b>(KR): {{ $product->kurdi  }} </li>
	  		<li class="list-group-item"><b>Price </b>:   <i> {{ $product->price }}</i> €</li>
	  		<li class="list-group-item"><b>Quantitiy </b>: {{ $product->qty }} </li>
	  		<li class="list-group-item"><b>Points</b>: {{ $product->point }} </li>
	  		<li class="list-group-item"><b>Category</b>: {{ $product->category_id }} </li>
	  		<li class="list-group-item"><b>Sub-Category</b>: {{ $product->subcategory_id }} </li>
		</ul>
	</div>
</div>  
<div class="row">
	<div class="col-md-12">
		<div class="col-md-2" style="margin-left: 100px">
			<ul class="list-group">
		  		<li class="list-group-item"><b>Option1</b> : {{ ($product->option1  ? 'Yes' : 'No' ) }}</li>
		  	</ul>
		</div>
		<div class="col-md-2 " style="margin-left: 50px">
			<ul class="list-group">
		  		<li class="list-group-item"><b>Option2</b> : {{ ($product->option2  ? 'Yes' : 'No' ) }}</li>
		  	</ul>
		</div>
		<div class="col-md-2 " style="margin-left: 50px">
			<ul class="list-group">
		  		<li class="list-group-item"><b>Option3</b> : {{ ($product->option3  ? 'Yes' : 'No' ) }}</li>
		  	</ul>
		</div>
		<div class="col-md-2 " style="margin-left: 50px">
			<ul class="list-group">
		  		<li class="list-group-item"><b>Option4</b> : {{ ($product->option4  ? 'Yes' : 'No' ) }}</li>
		  	</ul>
		</div>
	</div> 
</div>


<div class="row">
	<div class="col-md-11 " style="margin-left: 35px">
		<ul class="list-group">
  			<li class="list-group-item">
  				<p>
					<h4>
					{{ $product->desc_english}}
					</h4>
				</p>
			</li>
		</ul>
	</div>
</div>



<div class="row">
	
	<div class="col-md-5 " style="margin-left: 35px">
		<ul class="list-group">
  			<li class="list-group-item">
  				<p>
					<h4>
					{{ $product->desc_german}}
					</h4>
				</p>
			</li>
		</ul>
	</div>
	<div class="col-md-6 ">
		<ul class="list-group">
  			<li class="list-group-item">
  				<p>
					<h4>
					{{ $product->desc_arabic}}
					</h4>
				</p>
			</li>
		</ul>
	</div>
	<div class="col-md-5 " style="margin-left: 35px">
		<ul class="list-group">
  			<li class="list-group-item">
  				<p>
					<h4>
					{{ $product->desc_turky}}
					</h4>
				</p>
			</li>
		</ul>
	</div>
	<div class="col-md-6 " >
		<ul class="list-group">
  			<li class="list-group-item">
  				<p>
					<h4>
					{{ $product->desc_kurdi}}
					</h4>
				</p>
			</li>
		</ul>
	</div>
</div>
<div class="row">
	<div class="col-md-11" style="margin-left: 35px">
		<a href="{{route('product.edit',$product)}}" class="btn btn-default btn-block btn-xl">Edit</a>
	</div>
</div>

@endsection
@section('scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
@endsection