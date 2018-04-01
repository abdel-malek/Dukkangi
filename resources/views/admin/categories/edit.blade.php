@extends('admin.master')

@section('grid')
	<div>
		{!! Form::model($category , ['route' => ['category.update',$category->id] , 'method' => 'PUT' ] ) !!}
			{{ Form::label('arabic', 'Name (AR): ') }}
			{{ Form::text('arabic' ,null,['class'=>'form-control'] ) }}
			<br>
			{{ Form::label('english', 'Name (EN): ') }}
			{{ Form::text('english' ,null,['class'=>'form-control'] ) }}
			<br>
			{{ Form::label('turky', 'Name (TR): ') }}
			{{ Form::text('turky' ,null,['class'=>'form-control'] ) }}
			<br>
			{{ Form::label('kurdi', 'Name (KR): ') }}
			{{ Form::text('kurdi' ,null,['class'=>'form-control'] ) }}
			<br>
			{{ Form::label('german', 'Name (GR): ') }}
			{{ Form::text('german' ,null,['class'=>'form-control'] ) }}

			{{Form::submit('Edit Category' , [ 'class'=>'btn btn-success btn-block' ,'style'=>'margin-top:7px']) }}

			<a href="{{route('category.index') }} " class="btn btn-primary btn-block" style="margin-top: 7px">Cancel</a>


		{!! Form::close() !!}
	</div>


@endsection
