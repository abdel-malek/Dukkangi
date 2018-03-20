@extends('admin.master')

@section('stylesheet')
@endsection

@section('title')
  Manage Payment
@endsection

@section('grid')
    <div>
      <div id="payment-grid"></div>
    </div>
@endsection


@section('scripts')
    <script type="text/javascript" src={{ URL::asset('js/payment-grid.js') }}></script>
@endsection
