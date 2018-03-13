@extends('admin.welcome')

@section('grid')
	<div class="row">
	<div class="col-md-8 col-md-offset-2">
			{!! Form::open(['route' =>'category.store']) !!}
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
				{{ Form::text('kurdi' , null, ['class'=> 'form-control' ,]) }}
				<br>
				{{ Form::label('turky' , 'Name (Turky):') }}
				{{ Form::text('turky' , null, ['class'=> 'form-control' ,]) }}

				{{ Form::submit('Confirm Category' , [ 'class' => 'btn btn-block btn-success' ,'style'=>'margin-top:7px' ])}}
				<a href="{{ route('category.index')}}" class="btn btn-block btn-primary" style="margin-top: 7px"> Cancel</a>
			{!! Form::close() !!}
		</div>
	</div>


@endsection