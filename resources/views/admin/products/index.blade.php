@extends('admin.welcome')

@section('stylesheet')



@endsection
@section('grid')
   

    <div class="contain-inner dashboard-v1">
       
        <div id="product-grid">    
                <!-- GRID -->
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 " >
            <a href="/admin/" class="btn btn-default btn-block" style="margin-left: 18px">Return Home</a>
        </div>
        <div class="col-md-6" >
            <a href="{{route('product.create')}}" class="btn btn-primary btn-block" style="width: 628px">Add Product</a>
        </div>
    </div>


@endsection
@section('scripts')
    <script type="text/javascript" src="http://localhost:8000/js/product-grid.js"></script>
@endsection
