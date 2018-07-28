@extends('admin.master')

@section('stylesheet')
  <style>
  .filter{
    padding: 15px;
    margin-left: 140px;
  }
  .custom >.jsgrid-cell {
    background: #6ea713;
    color:white;
  }
  </style>
@endsection

@section('title')
  Packing Products
@endsection

@section('grid')
    <div class="row">
      <div class="col-md-8 filter">
        <label>Barcode</label>
        <input class='form-control' name='barcode' id="barcode" type='text' value=''/>
        <input name='orderId' id="orderId" type='hidden' value='{{$orderId}}'/>
      </div>
    </div>
    <div>
        
      <div id="order-items-grid"></div>
    </div>
    <div class="row">
        <div class="col-md-12 footer" >
            <a href="{{route('order.index')}}" class="btn btn-primary btn-new">Back To Orders</a>
           
        </div>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript" src={{ URL::asset('js/check-order-qty.js') }}></script>
@endsection
