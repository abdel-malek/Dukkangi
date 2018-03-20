@extends('admin.master')

@section('stylesheet')
@endsection

@section('title')
  Manage Order
@endsection

@section('grid')
    <div>
      <div id="order-grid"></div>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript" src={{ URL::asset('js/order-grid.js') }}></script>
@endsection
