@extends('admin.master')

@section('stylesheet')
<link rel="stylesheet" href={{URL::asset('css/select2.min.css')}} />
@endsection

@section('title')
  Make Coupons
@endsection

@section('grid')
    <div class="col-md-10 col-md-offset-1">
        <h3> Group Coupon </h3>
        <p>
            Set range of gain points to make a group coupon
        </p>
        <div class="row">
            <div class="col-md-6">
            {!! Form::open(['route'=>'makegroupcoupon'] ) !!}
 
              {{ Form::label('from' , 'From:')  }}
              {{ Form::number('from' , null , ['class'=> 'form-control']) }}
            </div>
            <div class="col-md-6">
              {{ Form::label('to' , 'To:')  }}
              {{ Form::number('to' , null , ['class'=> 'form-control']) }}
            <br>
           
            </div>
            <h5 style="margin-left:15px">Coupon Value</h5>
               <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text" style="margin-left: 15px;width: 97.3%;">
            <select class="custom-select" name="type">  
                <option value="fixed">Fixed Value (Euros) </option>
                <option value="percentage">Percentage Value </option>
            </select>
            <input type="number" class="form-control" name="amount" aria-label="Text input with radio button" style="margin-left: 10px"> 
                
            </div>
          </div>
         </div>
            <br>
            <br>
             {{Form::submit('Make Coupon' , ['class' => 'btn btn-default btn-block' , 'style' => 'margin-left: 17px;margin-top: 27px;width:97.4%' ])}}
            {!! Form::close() !!}
              
        </div>
    </div>


@endsection

@section('scripts')
	<script type="text/javascript" src={{ URL::asset('js/select2.min.js') }}></script>

@endsection
