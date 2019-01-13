@extends('admin.master')

@section('stylesheet')
@endsection
@section('title')
  Manage Category
@endsection
@section('grid')

    <div>
      <div id="about-grid"></div>
    </div>

    <div class="row">
        <div class="col-md-12 footer" >
            <a href="{{route('about.create')}}" class="btn btn-primary btn-new">Add About</a>
        </div>
    </div>


@endsection
@section('scripts')
    <script type="text/javascript" src={{ URL::asset('js/about-grid.js') }}></script>
@endsection
