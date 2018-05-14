@extends('admin.master')


@section('stylesheet')
	 <link rel="stylesheet" href="http://localhost:8000/css/select2.min.css" />
@endsection

@section('grid')
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			{!! Form::model($subcategory ,  ['route' => ['categorytosub.update',$subcategory->id] , 'method' => 'PUT','files'=>true ]) !!}
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
				<br>
				{{ Form::label('image' , 'Image:')}}
 				{{ Form::file('image') }}
 				<br>

				{{ Form::submit('Edit Subcategory' , ['class' => 'btn btn-block btn-success' , 'style' =>'margin-top:7px']) }}
				<a href="{{route('categorytosub.index',$subcategory->category_id)}}" class="btn btn-default btn-block" style="margin-top: 7px">Cancel</a>

			{!! Form::close() !!}
		</div>
	</div>


@endsection


@section('scripts')

@endsection
