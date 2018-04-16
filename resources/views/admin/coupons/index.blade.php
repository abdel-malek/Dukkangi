@extends('admin.master')

@section('stylesheet')
@endsection

@section('title')
  Manage Order
@endsection

@section('grid')
    <div>
      <div id="coupon-grid"></div>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript" src="{{ URL::asset('js/coupon-grid.js') }}"></script>
@endsection
