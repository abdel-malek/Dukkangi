@extends('admin.master')

@section('grid')
	<div class="row">
	<div class="col-md-5 col-md-offset-1">
			{!! Form::open(['route' =>'product.store']) !!}
				
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