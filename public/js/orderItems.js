(function ($){
  loadUsers();
})(jQuery);

function loadUsers(){
  $("#order-items-grid").jsGrid({
        filtering: true,
        width: '100%',
        height: 'auto',
        autoload: true,
        paging: true,
        pageSize: 10,
        pageIndex: 1,
        pageLoading: true,
        editing: false,
        inserting: false,
        subGrid: false,
        controller: {
            updateItem: $.noop,
            loadData: function (filter) {
                var data = $.Deferred();
                $.ajax({
                    type: "POST",
                    url: ``,
                    dataType: "json",
                    data: {filter},
                    headers: {
                        "x-csrf-token": $("[name=_token]").val()
                    },
                }).done((response) => data.resolve({ data: response.data, itemsCount: [response.total] }));
                return data.promise();
            },
        },
       fields: [
            {name: "id"         , title: 'ID'      , type: "text", width: 5},
            {name: "order_id"    , title: 'Order ID'    , type: "text", width: 5},
            {name: "product.arabic" , title: 'Product' , type: "text", width: 5},
            {name: "sub_amount" , title: 'Sub Amount' , type: "text", width: 5},
            {name: "qty" , title: 'Qty' , type: "text", width: 5},
            {name: "total_amount" , title: 'total_amount' , type: "text", width: 5},
            {name: "gain_point" , title: 'gain_point' , type: "text", width: 5},
            {name: "order_status.name" , title: 'Status' , type: "text", width: 5}
        ]
    });
}

function printData(mytdid)
{
    var mywindow = window.open();
    mywindow.document.write('<html><head><title>Print Report</title>');
    mywindow.document.write('</head><body style="font-family: sans-serif;">');
//    mywindow.document.write('<h4 style="float:right;font-size:22px;color:#999;">rstgsert</h2>');
//    mywindow.document.write('<table cellspacing="4" bgcolor="#eee" border="0px" style="font-size:18px;font-weight:bold;width:100%;border-radius:1vw;background-color:#eee;" >');
////    mywindow.document.write(document.getElementsByClassName(mytdid).outerHTML);
//    mywindow.document.write('<tr style="background-color:#aaa;">');
//     alert(1);
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
    mywindow.document.write($('#'+mytdid).html());
    mywindow.document.write('</body></html>');
    mywindow.print();
    mywindow.close();
}