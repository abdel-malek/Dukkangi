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
				<br>
				<div class="col-md-12">
					<div class="row">

						<div class="col-md-6">
						<ul class="list-group">
	  						<li class="list-group-item">
							{{ Form::label('option1','Option 1:')}}
							{{ Form::checkbox('option1', '1') }}
							</li>
						</ul>
						</div>
						<div class="col-md-6">
						<ul class="list-group">
	  						<li class="list-group-item">
							
							{{ Form::label('option2','Option 2:')}}
							{{ Form::checkbox('option2', '1') }}
							</li>
						</ul>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<ul class="list-group">
	  							<li class="list-group-item">
					
							{{ Form::label('option3','Option 3:')}}
							{{ Form::checkbox('option3', '1') }}
							</li>
						</ul>
						</div>
						<div class="col-md-6">
							<ul class="list-group">
	  							<li class="list-group-item">
					
							{{ Form::label('option4','Option 4:')}}
							{{ Form::checkbox('option4', '1') }}
								</li>
							</ul>
						</div>
					</div>
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
				{{ Form::text('point', '0' , ['class'=> 'form-control' , 'required'=>'' ]) }}
				
				<br>
				{{ Form::label('section1', 'Section 1 :' ) }}
				{{ Form::text('section1', null , ['class'=> 'form-control' , 'required'=>'' ]) }}
				
				<br>
				{{ Form::label('section2', 'Section 2 :' ) }}
				{{ Form::text('section2', null, ['class'=> 'form-control' , 'required'=>'' ]) }}
				
				<br>
				{{ Form::label('section3', 'Section 3 :' ) }}
				{{ Form::text('section3', null , ['class'=> 'form-control' , 'required'=>'' ]) }}
				<br>

 				{{ Form::label('image' , 'Image:')}}<small><i>optional</i></small>
 				{{ Form::file('image') }}
 				<br>

				{{ Form::label('category_id' , 'Category:')}}
				<select class="custom-select" name="category_id">
				@foreach($categories as $category)
					<option value="{{$category->id}}" >{{$category->english}} </option>
				@endforeach
				</select>
				<br>

				{{ Form::label('subcategory_id' , 'Subcategory:')}}
				<select class="custom-select" name="subcategory_id">
				@foreach($subcategories as $subcategory)
					<option value="{{$subcategory->id}}" >{{$subcategory->english}} </option>
				@endforeach
				</select>
		</div>
		<div class="col-md-10 col-md-offset-1"> 
				{{ Form::label('desc_arabic' ,'Description in Arabic:')}}
				{{ Form::textarea('desc_arabic', 'Type Here!' , ['class' => 'form-control', 'required' =>'']) }}
				<br>
				{{ Form::label('desc_english' ,'Description in English:')}}
				{{ Form::textarea('desc_english', 'Type Here!' , ['class' => 'form-control', 'required' =>'']) }}
				<br>
				{{ Form::label('desc_german' ,'Description in German:')}}
				{{ Form::textarea('desc_german', 'Type Here!' , ['class' => 'form-control' ]) }}
				<br>
				{{ Form::label('desc_turky' ,'Description in Turky:')}}
				{{ Form::textarea('desc_turky', 'Type Here!' , ['class' => 'form-control' ]) }}
				<br>
				{{ Form::label('desc_kurdi' ,'Description in Kurdi:')}}
				{{ Form::textarea('desc_kurdi', 'Type Here!' , ['class' => 'form-control' ]) }}

				{{ Form::submit('Confirm Category' , [ 'class' => 'btn btn-block btn-success' ,'style'=>'margin-top:7px' ])}}
				<a href="{{ route('category.index')}}" class="btn btn-block btn-primary" style="margin-top: 7px"> Cancel</a>
			{!! Form::close() !!}
		</div>
	</div>


@endsection