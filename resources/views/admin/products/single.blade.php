@extends('admin.master')

@section('stylesheet')

@endsection
@section('grid')
<br>
<div class= "row">
	<div class="col-md-4 " style="margin-left: 35px">

		<div id="#carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		  <div class="carousel-inner">
		    <div class="carousel-item active">
		      <img class="d-block w-100" src="{{$product->image_id}}" alt="First slide" style="height: 400px">
		    </div>
		  </div>

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
	  		<li class="list-group-item"><b>Discounted Price </b>:   <i> {{ $product->discount_price }} </i> €</li>
	  		<li class="list-group-item"><b>Quantitiy </b>: {{ $product->qty }} </li>
	  		<li class="list-group-item"><b>Points</b>: {{ $product->point }} </li>
	  		<li class="list-group-item"><b>Category</b>:@foreach($categories as $category) {{ $category}}  @endforeach</li>
	  		<li class="list-group-item"><b>Sub-Category</b>: @foreach($subcategories as $subcategory) {{ $subcategory}}  @endforeach </li>
		</ul>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<div class="col-md-2" style="margin-left: 20px;max-width: 100%;width: 23%">
			<ul class="list-group">
		  		<li class="list-group-item"><b>Option1</b> : {{ ($product->option1  ? 'Yes' : 'No' ) }}</li>
		  	</ul>
		</div>
		<div class="col-md-2 " style="max-width: 100%;width: 23%">
			<ul class="list-group">
		  		<li class="list-group-item"><b>Option2</b> : {{ ($product->option2  ? 'Yes' : 'No' ) }}</li>
		  	</ul>
		</div>
		<div class="col-md-2 "  style="max-width: 100%;width: 23%">
			<ul class="list-group">
		  		<li class="list-group-item"><b>Option3</b> : {{ ($product->option3  ? 'Yes' : 'No' ) }}</li>
		  	</ul>
		</div>
		<div class="col-md-2 "  style="max-width: 100%;width: 23%">
			<ul class="list-group">
		  		<li class="list-group-item"><b>Option4</b> : {{ ($product->option4  ? 'Yes' : 'No' ) }}</li>
		  	</ul>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-12 jumbotron" style="margin-left: 30px;margin-right: 30px;padding-right: 0px;max-width: 960px;padding-top: 20px">
		<p >
		<h3 class="text-center"><i> Section 1</i></h3>
		</p>
		<div class="col-md-2" style="margin-left: 20px;max-width: 100%;width: 46%">
			<ul class="list-group">
		  		<li class="list-group-item"><b>English</b> : {{ $product->section1_english }}</li>
		  	</ul>
		</div>
		<div class="col-md-2 " style="max-width: 100%;width: 46%">
			<ul class="list-group">
		  		<li class="list-group-item"><b>Arabic</b> : {{ $product->section1_arabic  }}</li>
		  	</ul>
		</div>
		<div class="col-md-2 "  style="max-width: 100%;margin-left: 20px;width: 46%">
			<ul class="list-group">
		  		<li class="list-group-item"><b>German</b> : {{ $product->section1_german    }}</li>
		  	</ul>
		</div>
		<div class="col-md-2 "  style="max-width: 100%;width: 46%">
			<ul class="list-group">
		  		<li class="list-group-item"><b>Kurdi</b> : {{ $product->section1_kurdi}}   </li>
		  	</ul>
		</div>
		<div class="col-md-2 col-md-offset-4"  style="max-width: 100%;width: 46%;margin-left: 260px">
			<ul class="list-group">
		  		<li class="list-group-item"><b>Turky</b> : {{ $product->section1_turky   }}</li>
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

@endsection
