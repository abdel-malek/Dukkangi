@extends('admin.master')

@section('stylesheet')
@endsection
@section('title')
  Manage Brands
@endsection
@section('grid')

    <div>
      <div id="brand-grid"></div>
    </div>

    <div class="row">
        <div class="col-md-12 footer" >
            <a href="{{route('brand.createPage')}}" class="btn btn-primary btn-new">Add Brand</a>
        </div>
    </div>


@endsection
@section('scripts')
    <script type="text/javascript" src={{ URL::asset('js/brand.js') }}></script>
@endsection
