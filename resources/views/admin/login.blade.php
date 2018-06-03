@extends('admin.master_login')

@section('grid')
      <div class="row">
	       <div class="col-md-8 col-md-offset-2">
	            <!-- general form elements -->
	            <div class="box box-primary">
	                <div class="box-header with-border">
	                    <h3 class="box-title">Administrator</h3>
	                </div>
	                <!-- /.box-header -->
	                <!-- form start -->
	                <form class="form-horizontal" method="POST" action="{{url('/admin-login')}}">
	                <div class="box-body">

	                    <div class="form-group">
	                        {!! Form::label('userName', 'User Name') !!}
	                        {!! Form::text('userName', '' , ['class' => 'form-control','placeholder'=>'user name','name'=>"email"]) !!}
	                    </div>

                      <div class="form-group">
	                        {!! Form::label('password', 'Password') !!}
	                        <input type="password" name="password" id="password" placeholder="password" class="form-control">
	                    </div>

	                </div>
	                <!-- /.box-body -->

	                <div class="box-footer">
	                    <button type="submit" class="btn btn-primary">Submit</button>
	                </div>
                </form>
	            </div>
	        </div>
	    </div>
@endsection
