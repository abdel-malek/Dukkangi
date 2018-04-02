@extends('admin.master')

@section('grid')
	<div class="row">
	<div class="col-md-5 col-md-offset-1">
			{!! Form::model($product,['route' =>'product.update' , 'method' =>'PUT' , 'files' => true]) !!}
				{{ Form::text('id', $product->id , ['hidden' => ''] ) }}

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

				{{ Form::label('turky' , 'Name (Turyi):') }}
				{{ Form::text('turky' , null, ['class'=> 'form-control' , 'required'=> '']) }}
				<br>

			<div class="col-md-12">
				{{ Form::label('active','Active:')}}
        {!! Form::select('active',array('1'=>'Yes','0'=>'NO'),$product->active,['class'=>'form-control']) !!}
			</div>
			<br/>
			<div class="col-md-12">
				{{ Form::label('image' , 'Image:')}}
				{{ Form::file('image') }}
			</div>
	</div>
	<div class="col-md-5">
				{{ Form::label('qty', 'Quantity :' ) }}
				{{ Form::text('qty', null , ['class'=> 'form-control' , 'required'=>'' ]) }}
				<br>

				{{ Form::label('price', 'Price :' ) }}
				{{ Form::text('price', null , ['class'=> 'form-control' , 'required'=>'' ]) }}
				<br>

				{{ Form::label('point', 'Points :' ) }}
				{{ Form::text('point', null , ['class'=> 'form-control' , 'required'=>'' ]) }}
				<br>

				{{ Form::label('category_id' , 'Category:')}}
				<select class="custom-select" name="category_id">
				@foreach($categories as $category)
					<option value="{{$category->id}}" {{($category->id == $product->category_id ? 'selected'  : '' )  }} >{{$category->english}} </option>
				@endforeach
				</select>
				<br>

				{{ Form::label('subcategory_id' , 'Subcategory:')}}
				<select class="custom-select" name="subcategory_id">
				@foreach($subcategories as $subcategory)
					<option value="{{$subcategory->id}}" {{($subcategory->id == $product->subcategory_id ? 'selected'  : '' )}} >{{$subcategory->english}} </option>
				@endforeach
				</select>
		</div>

<div class="row">
	<div class="col-md-12 jumbotron" style="margin-left: 30px;margin-right: 30px;padding-right: 0px;max-width: 960px;padding-top: 20px">
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
</div><div class="row">
	<div class="col-md-12 jumbotron" style="margin-left: 30px;margin-right: 30px;padding-right: 0px;max-width: 960px;padding-top: 20px">
		<p >
		<h3 class="text-center"><i> Section 2</i></h3>
		</p>
		<div class="col-md-2" style="margin-left: 20px;max-width: 100%;width: 46%">
			<ul class="list-group">
		  		<li class="list-group-item">
		  			{{ Form::label('section2_english' , 'Section 2 (EN) :')}}
		  			{{ Form::text('section2_english' , null,['class' => 'form-control'])}}
		  		</li>
		  	</ul>
		</div>
		<div class="col-md-2 " style="max-width: 100%;width: 46%">
			<ul class="list-group">
		  		<li class="list-group-item">
		  			{{ Form::label('section2_arabic' , 'Section 2 (AR) :')}}
		  			{{ Form::text('section2_arabic' , null,['class' => 'form-control'])}}
		  		</li>
		  	</ul>
		</div>
		<div class="col-md-2 "  style="max-width: 100%;margin-left: 20px;width: 46%">
			<ul class="list-group">
		  		<li class="list-group-item">
		  			{{ Form::label('section2_german' , 'Section 2 (GR) :')}}
		  			{{ Form::text('section2_german' , null,['class' => 'form-control'])}}
		  		</li>
		  	</ul>
		</div>
		<div class="col-md-2 "  style="max-width: 100%;width: 46%">
			<ul class="list-group">
		  		<li class="list-group-item">
		  			{{ Form::label('section2_kurdi' , 'Section 2 (KU) :')}}
		  			{{ Form::text('section2_kurdi' , null,['class' => 'form-control'])}}
		  		</li>
		  	</ul>
		</div>
		<div class="col-md-2 col-md-offset-4"  style="max-width: 100%;width: 46%;margin-left: 260px">
			<ul class="list-group">
		  			{{ Form::label('section2_turky' , 'Section 2 (TR) :')}}
		  			{{ Form::text('section2_turky' , null,['class' => 'form-control'])}}

		  	</ul>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-12 jumbotron" style="margin-left: 30px;margin-right: 30px;padding-right: 0px;max-width: 960px;padding-top: 20px">
		<p >
		<h3 class="text-center"><i> Section 3</i></h3>
		</p>
		<div class="col-md-2" style="margin-left: 20px;max-width: 100%;width: 46%">
			<ul class="list-group">
		  		<li class="list-group-item">
		  			{{ Form::label('section3_english' , 'Section 3 (EN) :')}}
		  			{{ Form::text('section3_english' , null,['class' => 'form-control'])}}
		  		</li>
		  	</ul>
		</div>
		<div class="col-md-2 " style="max-width: 100%;width: 46%">
			<ul class="list-group">
		  		<li class="list-group-item">
		  			{{ Form::label('section3_arabic' , 'Section 3 (AR) :')}}
		  			{{ Form::text('section3_arabic' , null,['class' => 'form-control'])}}
		  		</li>
		  	</ul>
		</div>
		<div class="col-md-2 "  style="max-width: 100%;margin-left: 20px;width: 46%">
			<ul class="list-group">
		  		<li class="list-group-item">
		  			{{ Form::label('section3_german' , 'Section 3 (GR) :')}}
		  			{{ Form::text('section3_german' , null,['class' => 'form-control'])}}
		  		</li>
		  	</ul>
		</div>
		<div class="col-md-2 "  style="max-width: 100%;width: 46%">
			<ul class="list-group">
		  		<li class="list-group-item">
		  			{{ Form::label('section3_kurdi' , 'Section 3 (KU) :')}}
		  			{{ Form::text('section3_kurdi' , null,['class' => 'form-control'])}}
		  		</li>
		  	</ul>
		</div>
		<div class="col-md-2 col-md-offset-4"  style="max-width: 100%;width: 46%;margin-left: 260px">
			<ul class="list-group">
		  			{{ Form::label('section3_turky' , 'Section 3 (TR) :')}}
		  			{{ Form::text('section3_turky' , null,['class' => 'form-control'])}}

		  	</ul>
		</div>
	</div>
</div>
		<div class="col-md-10 col-md-offset-1">
				{{ Form::label('desc_arabic' ,'Description in Arabic:')}}
				{{ Form::textarea('desc_arabic', null , ['class' => 'form-control', 'required' =>'']) }}
				<br>
				{{ Form::label('desc_english' ,'Description in English:')}}
				{{ Form::textarea('desc_english', null , ['class' => 'form-control', 'required' =>'']) }}
				<br>
				{{ Form::label('desc_german' ,'Description in German:')}}
				{{ Form::textarea('desc_german', null , ['class' => 'form-control' ]) }}
				<br>
				{{ Form::label('desc_turky' ,'Description in Turky:')}}
				{{ Form::textarea('desc_turky', null , ['class' => 'form-control' ]) }}
				<br>
				{{ Form::label('desc_kurdi' ,'Description in Kurdi:')}}
				{{ Form::textarea('desc_kurdi', null , ['class' => 'form-control' ]) }}

				{{ Form::submit('Update Product' , [ 'class' => 'btn btn-block btn-success' ,'style'=>'margin-top:7px' ])}}
				<a href="{{ route('category.index')}}" class="btn btn-block btn-primary" style="margin-top: 7px"> Cancel</a>
			{!! Form::close() !!}
		</div>
	</div>


@endsection
