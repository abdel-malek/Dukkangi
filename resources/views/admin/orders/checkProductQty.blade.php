@extends('admin.master')

@section('stylesheet')
  <style>
  .filter{
    padding: 15px;
    margin-left: 140px;
  }
  .custom >.jsgrid-cell {
    background: #6ea713;
    color:white;
  }
  </style>
@endsection

@section('title')
  Packing Products
@endsection

@section('grid')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <div class="row">
      <div class="col-md-8 filter">
        <label>Barcode</label>
        <input class='form-control' name='barcode' id="barcode" type='text' value=''/>
        <input name='orderId' id="orderId" type='hidden' value='{{$orderId}}'/>
      </div>
    </div>
    <div>
        
      <div id="order-items-grid"></div>
    </div>
    <div class="row">
        <div class="col-md-12 footer" >
            <a href="{{route('order.index')}}" class="btn btn-primary btn-new">Back To Orders</a>
                <button onclick="getOrder();" type="button" >Print</button>
            <div id="td_print_after_packing" style="display: none;">
                
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
            var name = "";
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
                        console.log(response);
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
                                    if(response[i].item_name_ar == ""){
                                        name = response[i].item_name_en;
        }else{
             name = response[i].item_name_ar;
        }
                                    html +="<tr>"+
                                            "<td style='width:35%;'>"+
                                            name+
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
                        $('#td_print_after_packing').html(html);

                        printData('td_print_after_packing');         
                    }
                });
            // 
        }
        
    </script>
    <script type="text/javascript" src={{ URL::asset('js/check-order-qty.js') }}></script>
@endsection
