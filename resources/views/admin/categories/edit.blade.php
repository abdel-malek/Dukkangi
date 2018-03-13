@extends('admin.welcome')

@section('grid')

<div class="row">
	<div class="col-md-8 col-md-offset-2">
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
</div>


@endsection