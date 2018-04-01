@extends('admin.master')

@section('stylesheet')
@endsection

@section('title')
  Manage Order Items
@endsection

@section('grid')
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
    <script type="text/javascript" src={{ URL::asset('js/orderItems.js') }}></script>
@endsection
