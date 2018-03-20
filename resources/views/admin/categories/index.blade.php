@extends('admin.master')

@section('stylesheet')
@endsection
@section('title')
  Manage Category
@endsection
@section('grid')

    <div>
      <div id="category-grid"></div>
    </div>

    <div class="row">
        <div class="col-md-12 footer" >
            <a href="{{route('category.create')}}" class="btn btn-primary btn-new">Add Category</a>
        </div>
    </div>


@endsection
@section('scripts')
    <script type="text/javascript" src={{ URL::asset('js/category-grid.js') }}></script>
@endsection
