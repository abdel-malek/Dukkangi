@extends('admin.master')

@section('stylesheet')
@endsection

@section('title')
  Manage Sub Category
@endsection

@section('grid')
  <div>
    <div id="subcategory-grid"></div>
  </div>

  <div class="row">
      <div class="col-md-12 footer" >
          <a href="{{route('categorytosub.create',$id)}}" class="btn btn-primary btn-new">Add Sub-Category</a>
      </div>
  </div>

@endsection
@section('scripts')
@endsection
