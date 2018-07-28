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
            <button onclick="getOrder();" type="button">Print</button>
            <div id="td_print" style="display: none;">
                
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript">
        function printData(mytdid)
{
    var mywindow = window.open();
    mywindow.document.write('<html><head><title>Dukkangi</title><style>table{width:100%}table thead tr td{font-weight:bold;}.block_table{padding:10px;border:1px solid #aaa;}table td{border:1px solid #bbb;padding:4px;}</style>');
    mywindow.document.write('</head><body style="font-family: sans-serif;">');
    mywindow.document.write($('#'+mytdid).html());
    mywindow.document.write('</body></html>');
    mywindow.print();
    mywindow.close();
}
        function getOrder(){
            id = window.location.href ;
            var html = "";
            var net_total = 0;
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
                        html = "<h3>Dukkangi.com</h3>"+
                                "<div class='block_table'>"+
                                "<p>No:"+id+" </p>"+
                                "<table>"+
                                "<thead>"+
                                "<tr>"+
                                "<td>Name</td>"+
                                "<td>Qty</td>"+
                                "<td>Sub total</td>"+
                                "<td>Total</td>"+
                                "</tr>"+
                                "</thead>"+
                                "<tbody>";
                                for(var i =0;i < response.length;i++){
                                    html +="<tr>"+
                                            "<td style='width:35%;'>"+
                                            response[i].item_name+
                                            "</td>"+
                                            "<td>"+
                                            response[i].qty+
                                            "</td>"+
                                            "<td>"+
                                            response[i].sub_amount+
                                            "</td>"+
                                            "<td>"+
                                            parseInt(response[i].sub_amount) * parseInt(response[i].qty) +
                                            "</td>"+
                                            "</tr>";
                                    net_total = net_total + parseInt(response[i].sub_amount) * parseInt(response[i].qty);
                                 }
                         html += "</tbody>"+
                                 "</table>"+
                                 "<h4>"+
                                 "Net Total : "+net_total +
                                 "</h4>";
                              html  +="</div>";
                        $('#td_print').html(html);

                        printData('td_print');         
                    }
                });
            // 
        }
        
    </script>


    <script type="text/javascript" src={{ URL::asset('js/orderItems.js') }}></script>
@endsection
