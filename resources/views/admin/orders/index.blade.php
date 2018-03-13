@extends('admin.welcome')

@section('stylesheet')



@endsection
@section('grid')
   

    <div class="contain-inner dashboard-v1">
       
        <div id="order-grid">    
                <!-- GRID -->
        </div>
    </div>

    <div class="row">
        <div class="col-md-12" >
            <a href="/admin/" class="btn btn-default btn-block" style="margin-left: 18px">Return Home</a>
        </div>
    </div>


@endsection
@section('scripts')
    <script type="text/javascript" src="http://localhost:8000/js/order-grid.js"></script>
@endsection
