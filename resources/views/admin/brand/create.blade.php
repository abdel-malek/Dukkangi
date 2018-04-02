@extends('admin.master')

@section('grid')
      <div class="row">
	       <div class="col-md-8 col-md-offset-2">
	            <!-- general form elements -->
	            <div class="box box-primary">
	                <div class="box-header with-border">
	                    <h3 class="box-title">Create</h3>
	                </div>
	                <!-- /.box-header -->
	                <!-- form start -->
	                {!! Form::open( array('route' => array('brand.create'),'files' => true)) !!}
	                <div class="box-body">
	                    {!! Form::input('id','id', $brand->id ?$brand->id : 0  , ['class' => 'form-control','class' => 'hidden']) !!}
	                    <div class="form-group">
	                        {!! Form::label('english', 'English') !!}
	                        {!! Form::text('english', $brand->english , ['class' => 'form-control','placeholder'=>'Code']) !!}
	                    </div>

											<div class="form-group">
	                        {!! Form::label('arabic', 'Arabic') !!}
	                        {!! Form::text('arabic', $brand->arabic , ['class' => 'form-control','placeholder'=>'Code']) !!}
	                    </div>

											<div class="form-group">
	                        {!! Form::label('german', 'German') !!}
	                        {!! Form::text('german', $brand->german , ['class' => 'form-control','placeholder'=>'Code']) !!}
	                    </div>

											<div class="form-group">
	                        {!! Form::label('kurdi', 'Kurdi') !!}
	                        {!! Form::text('kurdi', $brand->kurdi , ['class' => 'form-control','placeholder'=>'Code']) !!}
	                    </div>

											<div class="form-group">
	                        {!! Form::label('turky', 'Turky') !!}
	                        {!! Form::text('turky', $brand->turky , ['class' => 'form-control','placeholder'=>'Code']) !!}
	                    </div>

											<div class="form-group">
                        {!! Form::label('image_path', 'Image Logo') !!}
                        {!! Form::file('image_path', ['class' => 'form-control','placeholder'=>'Image Arabic',]) !!}
                        {!! Form::input('hidden','orginal_image_path',!empty($brand->image_path) ? $brand->image_path : '') !!}
                        @if($brand->image_path)
                            <br/>
                            <center><img src="{{$brand->image_path}}" width="200px"/></center>
                        @endif
                     </div>
	                </div>
	                <!-- /.box-body -->

	                <div class="box-footer">
	                    <button type="submit" class="btn btn-primary">Submit</button>
	                </div>
	                {!! Form::close() !!}
	            </div>
	        </div>
	    </div>
@endsection
