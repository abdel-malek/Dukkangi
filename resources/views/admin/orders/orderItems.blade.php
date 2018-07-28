@extends('admin.master')

@section('stylesheet')
@endsection

@section('title')
  Manage Order Items
@endsection

@section('grid')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <div>
      <div id="order-items-grid"></div>
    </div>

    <div class="row">
        <div class="col-md-12 footer" >
            <a href="{{route('order.index')}}" class="btn btn-primary btn-new">Back To Orders</a>
                       <a href="{{route('order.index')}}" class="btn btn-primary btn-new">Back To Orders</a>
            <button onclick="getOrder();" type="button">Print</button>
        </div>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript">
        function getOrder(){
            id = window.location.href ;
            arr = id.split('/');
            id =arr[arr.length -2 ] ;
            $.ajax({
                    type: "POST",
                    url: `/getOrder`,
                    dataType: "json",
                    data: {'id' : id},
                    headers: {
                        "x-csrf-token": $("[name=_token]").val()
                    },
                }).done(response => {
                    if (response == "Not all items packed"){
                        alert('Not All Items Packed');
                    }
                    else {
                        console.log(response);
                        

                        printData('jsgrid-table','Dukkangi.com');         
                    }
                });
            // 
        }
    </script>


    <script type="text/javascript" src={{ URL::asset('js/orderItems.js') }}></script>
@endsection
