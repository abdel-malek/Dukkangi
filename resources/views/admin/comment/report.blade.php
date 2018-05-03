@extends('admin.master')

@section('stylesheet')
@endsection

@section('title')
  Comments
@endsection

@section('grid')
    <div>
      <div id="comment-grid"></div>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript" src={{ URL::asset('js/comment.js') }}></script>
@endsection
