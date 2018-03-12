@extends('welcome')

@section('stylesheet')



@endsection
@section('grid')
   

    <div class="contain-inner dashboard-v1">
       
        <div id="category-grid">    
                <!-- GRID -->
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 " >
            <a href="/" class="btn btn-default btn-block" style="margin-left: 18px">Return Home</a>
        </div>
        <div class="col-md-6" >
            <a href="{{route('category.create')}}" class="btn btn-primary btn-block" style="width: 628px">Add Category</a>
        </div>
    </div>


@endsection
@section('scripts')
    <script type="text/javascript" src="http://localhost:8000/js/category-grid.js"></script>
@endsection
