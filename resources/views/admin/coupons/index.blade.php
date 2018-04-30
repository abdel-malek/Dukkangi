@extends('admin.master')

@section('stylesheet')
@endsection

@section('title')
  Manage Coupons
@endsection

@section('grid')
    <div>
      <div id="copuon-grid"></div>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript" src={{ URL::asset('js/manage_coupon.js') }}></script>
@endsection
