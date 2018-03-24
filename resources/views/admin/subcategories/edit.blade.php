@extends('admin.master')


@section('stylesheet')
	 
@endsection

@section('grid')
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			{!! Form::model($subcategory ,  ['route' => 'subcategory.update', 'method' => 'PUT' ]) !!}
				{{ Form::text('id' , null , ['hidden' => 'hidden']) }}


				{{ Form::label('arabic','Name (AR):') }}
				{{ Form::text('arabic' , null , ['class' => 'form-control']) }}
				<br>
				{{ Form::label('english', 'Name (EN):') }}
				{{ Form::text('english' , null , ['class' => 'form-control']) }}
				<br>
				{{ Form::label('german', 'Name (GR):') }}
				{{ Form::text('german' , null , ['class' => 'form-control']) }}
				<br>
				{{ Form::label('turky', 'Name (TR):') }}
				{{ Form::text('turky' , null , ['class' => 'form-control']) }}
				<br>
				{{ Form::label('kurdi', 'Name (KR):') }}
				{{ Form::text('kurdi' , null , ['class' => 'form-control']) }}
				<br>
				{{ Form::label('category_id' , 'Category:')}}
				<select class="custom-select" name="category_id">
				@foreach($categories as $category)
					<option value="{{$category->id}}" >{{$category->english}} </option>
				@endforeach
				</select>

				{{ Form::submit('Edit Subcategory' , ['class' => 'btn btn-block btn-success' , 'style' =>'margin-top:7px']) }}
				<a href="{{route('subcategory.index')}}" class="btn btn-default btn-block" style="margin-top: 7px">Cancel</a>

			{!! Form::close() !!}
		</div>
	</div>


@endsection


@section('scripts')
@endsection
