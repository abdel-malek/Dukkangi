@extends('admin.master')

@section('grid')
	<div class="row">
	<div class="col-md-5 col-md-offset-1">
			{!! Form::open(['route' =>'product.store','files' => true]) !!}

				{{ Form::label('arabic' , 'Name (Arabic):') }}
				{{ Form::text('arabic' , null, ['class'=> 'form-control' , 'required'=> '']) }}
				<br>

				{{ Form::label('english' , 'Name (English):') }}
				{{ Form::text('english' , null, ['class'=> 'form-control' , 'required'=> '']) }}
				<br>

				{{ Form::label('german' , 'Name (German):') }}
				{{ Form::text('german' , null, ['class'=> 'form-control' , 'required'=> '']) }}
				<br>

				{{ Form::label('kurdi' , 'Name (Kurdi):') }}
				{{ Form::text('kurdi' , null, ['class'=> 'form-control' , 'required'=> '']) }}
				<br>

				{{ Form::label('turky' , 'Name (Turki):') }}
				{{ Form::text('turky' , null, ['class'=> 'form-control' , 'required'=> '']) }}
				<br/>
				<div class="col-md-12">
					{{ Form::label('active','Active:')}}
          			{!! Form::select('active',array('1'=>'Yes','0'=>'NO'),null,['class'=>'form-control']) !!}
				</div>
				<br/>
	</div>

	<div class="col-md-5">
				{{ Form::label('qty', 'Quantity :' ) }}
				{{ Form::text('qty', null , ['class'=> 'form-control' , 'required'=>'' ]) }}
				<br>

				{{ Form::label('price', 'Price :' ) }}
				{{ Form::text('price', null , ['class'=> 'form-control' , 'required'=>'' ]) }}
				<br>
				{{ Form::label('discount_price', 'discount price :' ) }}
				{{ Form::text('discount_price', null , ['class'=> 'form-control' , 'required'=>'' ]) }}
				<br>


				{{ Form::label('point', 'Points :' ) }}
				{{ Form::text('point', '0' , ['class'=> 'form-control' , 'required'=>'' ]) }}

				<br>


<!--				{{ Form::label('category_id' , 'Category:')}}
				<select class="js-example-basic-multiple form-control" required="required" name="category_id[]" multiple="multiple">
				@foreach($categories as $category)
					<option value="{{$category->id}}" >{{$category->english}} </option>
				@endforeach
				</select>
				<br/>
				<br/>
			-->
				{{ Form::label('subcategory_id' , 'Subcategory:')}}
				<select class="js-example-basic-multiple form-control" required="required" name="subcategory_id[]" multiple="multiple">
				@foreach($subcategories as $subcategory)
					<option value="{{$subcategory->id}}" >{{$subcategory->english}} </option>
				@endforeach
				</select>

				<br/>
				<br/>
				{{ Form::label('brand_id' , 'Brand:')}}
				<select class="custom-select" name="brand_id" required="required">
				@foreach($brands as $brand)
					<option value="{{$brand->id}}" >{{$brand->english}} </option>
				@endforeach
				</select>
		</div>
</div>
<div class="row">

	<div class="col-md-10 col-md-offset-1">
		<p >
		<h3 class="text-center"><i> Section 1</i></h3>
		</p>
		<div class="col-md-2" style="margin-left: 20px;max-width: 100%;width: 46%">
			<ul class="list-group">
		  		<li class="list-group-item">
		  			{{ Form::label('section1_english' , 'Section 1 (EN) :')}}
		  			{{ Form::text('section1_english' , null,['class' => 'form-control'])}}
		  		</li>
		  	</ul>
		</div>
		<div class="col-md-2 " style="max-width: 100%;width: 46%">
			<ul class="list-group">
		  		<li class="list-group-item">
		  			{{ Form::label('section1_arabic' , 'Section 1 (AR) :')}}
		  			{{ Form::text('section1_arabic' , null,['class' => 'form-control'])}}
		  		</li>
		  	</ul>
		</div>
		<div class="col-md-2 "  style="max-width: 100%;margin-left: 20px;width: 46%">
			<ul class="list-group">
		  		<li class="list-group-item">
		  			{{ Form::label('section1_german' , 'Section 1 (GR) :')}}
		  			{{ Form::text('section1_german' , null,['class' => 'form-control'])}}
		  		</li>
		  	</ul>
		</div>
		<div class="col-md-2 "  style="max-width: 100%;width: 46%">
			<ul class="list-group">
		  		<li class="list-group-item">
		  			{{ Form::label('section1_kurdi' , 'Section 1 (KU) :')}}
		  			{{ Form::text('section1_kurdi' , null,['class' => 'form-control'])}}
		  		</li>
		  	</ul>
		</div>
		<div class="col-md-2 col-md-offset-4"  style="max-width: 100%;width: 46%;margin-left: 260px">
			<ul class="list-group">
		  		<li class="list-group-item">
		  			{{ Form::label('section1_turky' , 'Section 1 (TR) :')}}
		  			{{ Form::text('section1_turky' , null,['class' => 'form-control'])}}
		  		</li>
		  	</ul>
		</div>
	</div>
</div>
		<div class="col-md-10 col-md-offset-1">
				{{ Form::label('desc_arabic' ,'Description in Arabic:')}}
				{{ Form::textarea('desc_arabic', '' , ['class' => 'form-control', 'required' =>'','placeholder' => 'Type Here!']) }}
				<br>
				{{ Form::label('desc_english' ,'Description in English:')}}
				{{ Form::textarea('desc_english', '' , ['class' => 'form-control', 'required' =>'','placeholder' => 'Type Here!']) }}
				<br>
				{{ Form::label('desc_german' ,'Description in German:')}}
				{{ Form::textarea('desc_german', '' , ['class' => 'form-control','placeholder' => 'Type Here!' ]) }}
				<br>
				{{ Form::label('desc_turky' ,'Description in Turky:')}}
				{{ Form::textarea('desc_turky', '' , ['class' => 'form-control','placeholder' => 'Type Here!' ]) }}
				<br>
				{{ Form::label('desc_kurdi' ,'Description in Kurdi:')}}
				{{ Form::textarea('desc_kurdi', '' , ['class' => 'form-control','placeholder' => 'Type Here!' ]) }}

				<div class="row">
					<div class="col-md-3">
						{{ Form::label('image' , 'Image:')}}
						{{ Form::file('image') }}
					</div>

					<div class="col-md-3">
						{{ Form::label('image_path_2' , 'Image 2:')}}
						{{ Form::file('image_path_2') }}
					</div>

					<div class="col-md-3">
						{{ Form::label('image_path_3' , 'Image 3:')}}
						{{ Form::file('image_path_3') }}
					</div>

					<div class="col-md-3">
						{{ Form::label('image_path_3' , 'Image 4:')}}
						{{ Form::file('image_path_4') }}
					</div>
				</div>
				<div class='row'>
							<div class='col-md-4'>
								{{ Form::label('barcode' , 'Barcode') }}
								{{ Form::text('barcode' , null, ['class'=> 'form-control' , 'required'=> '']) }}
							</div>
							<div class='col-md-4'>
								{{ Form::label('custom_id' , 'Custom ID:') }}
								{{ Form::text('custom_id' , null, ['class'=> 'form-control' , 'required'=> '']) }}
							</div>
							<div class='col-md-4'>
								{{ Form::label('tax_fees' , 'Tax Fees:') }}
								{{ Form::text('tax_fees' , null, ['class'=> 'form-control' ]) }}
							</div>
				</div>

				{{ Form::submit('Add Product' , [ 'class' => 'btn btn-block btn-success' ,'style'=>'margin-top:7px' ])}}
				<a href="{{ route('category.index')}}" class="btn btn-block btn-primary" style="margin-top: 7px"> Cancel</a>
			{!! Form::close() !!}
		</div>
	</div>
 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script >
	$(document).ready(function() {
    $('.js-example-basic-multiple').select2();
});
</script>

@endsection
