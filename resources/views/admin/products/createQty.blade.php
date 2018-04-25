@extends('admin.master')

@section('grid')
<div class="row">
	<div class="col-md-5 col-md-offset-1">
			{!! Form::open(['route' => ['productQty.store',$id]]) !!}

      {!! Form::input('product_id','product_id', $id ? $id : 0  , ['class' => 'form-control','class' => 'hidden']) !!}
      {{ Form::label('qty', 'Quantity :' ) }}
      {{ Form::text('qty', null , ['class'=> 'form-control' , 'required'=>'' ]) }}

      <br/>
      <div class="box-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
      {!! Form::close() !!}

  </div>
</div>
@endsection
