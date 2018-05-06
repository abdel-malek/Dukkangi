@extends('admin.master')

@section('stylesheet')
@endsection

@section('title')
  Manage Users
@endsection

@section('grid')
    <div>
      <div id="user-grid">/div>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript" src={{ URL::asset('js/user-grid.js') }}></script>
@endsection
