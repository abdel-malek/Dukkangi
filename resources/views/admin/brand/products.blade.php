@extends('admin.master')

@section('stylesheet')
@endsection
@section('title')
  Manage Brands Products
@endsection
@section('grid')

    <div>
      <div id="brand-product-grid"></div>
    </div>

    

@endsection
@section('scripts')
    <script type="text/javascript" src={{ URL::asset('js/brand-product.js') }}></script>
@endsection
