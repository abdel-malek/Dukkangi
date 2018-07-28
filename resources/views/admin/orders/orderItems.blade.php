@extends('admin.master')

@section('stylesheet')
@endsection

@section('title')
  Manage Order Items
@endsection

@section('grid')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
    
function printData(mytdid,title='')
{
    var mywindow = window.open();
    mywindow.document.write('<html><head><title>Print Report</title>');
    mywindow.document.write('</head><body style="font-family: sans-serif;">');
//    mywindow.document.write('<h4 style="float:right;font-size:22px;color:#999;">rstgsert</h2>');
    mywindow.document.write('<table cellspacing="4" bgcolor="#eee" border="0px" style="font-size:18px;font-weight:bold;width:100%;border-radius:1vw;background-color:#eee;" >');
    mywindow.document.write(document.getElementsByClassName('jsgrid-table').outerHTML);
//    mywindow.document.write('<tr style="background-color:#aaa;">');
//    
//    $('.jsgrid-table thead tr th').each(function () {
//        alert(1);
//         mywindow.document.write('<td style="padding:8px;border:0.15vw solid #555;margin:1vw;font-weight:bold;">' + $(this).text() + '</td>');
//        if($(this).text() == "Product"){
//        mywindow.document.write('<td style="padding:8px;border:0.15vw solid #555;margin:1vw;font-weight:bold;">' + $(this).text() + '</td>');
//    }
//    });
//    mywindow.document.write('</tr>');
//    $('.' + mytdid + ' tbody tr ').each(function () {
//        mywindow.document.write('<tr style="border-bottom:0.15vw solid #999;">');
//        $(this).find('td span').each(function () {
//            if ($(this) != null || $(this).hasClass('is_null')) {
//                mywindow.document.write('<td style="padding:8px;border:0.15vw solid #999;margin:1vw;font-weight:500;">' + $(this).text() + '</td>');
//            }
//        });
//        mywindow.document.write('</tr>');
//    });
    mywindow.document.write('</table>');
    mywindow.document.write('</body></html>');
    mywindow.print();
    mywindow.close();
}
    </script>
    <div>
      <div id="order-items-grid"></div>
    </div>

    <div class="row">
        <div class="col-md-12 footer" >
            <a href="{{route('order.index')}}" class="btn btn-primary btn-new">Back To Orders</a>
                       <a href="{{route('order.index')}}" class="btn btn-primary btn-new">Back To Orders</a>
            <button onclick="printData('jsgrid-table','Dukkangi.com')" type="button">Print</button>
        </div>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript" src={{ URL::asset('js/orderItems.js') }}></script>
@endsection
