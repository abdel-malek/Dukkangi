@extends('admin.master')

@section('stylesheet')
@endsection

@section('title')
  Manage Product Category
@endsection

@section('grid')
    <div>
      <div id="product-grid"></div>
    </div>

    <div class="row">
        <div class="col-md-12 footer" >
            <a href="{{route('product.create')}}" class="btn btn-primary btn-new">Add Product</a>
        </div>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript" src={{ URL::asset('js/productbycategory-grid.js') }}></script>
@endsection
