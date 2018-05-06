@extends('admin.master')

@section('stylesheet')
@endsection

@section('title')
  Coupon Users
@endsection

@section('grid')
    <div>
      <div id="copuon-users-grid"></div>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript" src={{ URL::asset('js/coupon-users.js') }}></script>
@endsection
