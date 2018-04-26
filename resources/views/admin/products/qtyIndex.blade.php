@extends('admin.master')

@section('stylesheet')
@endsection

@section('title')
  Manage Product Qty
@endsection

@section('grid')
    <div>
      <div id="product-qty-grid"></div>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript" src={{ URL::asset('js/product-qty-grid.js') }}></script>
@endsection
