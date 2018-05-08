(function ($){
  loadUsers();

  $('#barcode').keydown(function (e){
    if(e.keyCode == 13){
        // Do Ajax and check the Barcode
        orderId = $('#orderId').val();
        checkBarcode($(this).val(),orderId);
    }
})
})(jQuery);

function checkBarcode(barcode,orderId){
  $.ajax({
        type: "POST",
        url: `/admin/orders/${orderId}/check/${barcode}`,
        dataType: "json",
        data: {}, headers: {
            "x-csrf-token": $("[name=_token]").val()
        },
    }).done((response) => {
        if(response.length == 1){
            swal({title:"Info",
            html:"<b>Product: </b>"+response[0].product.arabic+"<br/>"+"<b>QTY:</b>"+response[0].qty,
            type: "success",timer:response[0].qty > 1 ? 200000 : 2000,showConfirmButton:response[0].qty > 1 ? true:false});

            //update grid
            $('#order-items-grid').jsGrid('render');
        }else{
          swal({title:"Info",
          html:"<b>Product Not Found in this Order</b>",
          type: "error",showConfirmButton:true});
        }
    });
}
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
            }
        },
        rowRenderer: function(item, row)
        {
          status = '';
          if(item.order_status){
            status = item.order_status.name;
          }
          var classStr = "";
          packet = 'FALSE';
          if (item.packed == 1) {
            classStr = "custom";
            packet = 'TRUE';
          }
          var test = '<tr class="jsgrid-row ' + classStr + ' style="background:red">' +
            '<td class="jsgrid-cell" style="width: 50px;">' + item.id + '</td>' +
            '<td class="jsgrid-cell" style="width: 50px;">' + item.order_id + '</td>' +
            '<td class="jsgrid-cell" style="width: 50px;">' + item.product.arabic + '</td>' +
            '<td class="jsgrid-cell" style="width: 50px;">' + item.product.barcode + '</td>' +
            '<td class="jsgrid-cell" style="width: 50px;">' + item.qty + '</td>' +
            '<td class="jsgrid-cell" style="width: 50px;">' + packet + '</td>' +
            '<td class="jsgrid-cell" style="width: 50px;">' + status + '</td>' +
            '</tr>';

          return $(test)
        },
       fields: [
            {name: "id"         , title: 'ID'      , type: "text", width: 5},
            {name: "order_id"    , title: 'Order ID'    , type: "text", width: 5},
            {name: "product.arabic" , title: 'Product' , type: "text", width: 5},
            {name: "product.barcode" , title: 'Product' , type: "text", width: 5},
            {name: "qty" , title: 'Qty' , type: "text", width: 5},
            {name: "packed" , title: 'Packed' , type: "checkbox", width: 5},
            {name: "order_status.name" , title: 'Status' , type: "text", width: 5}
        ]
    });
}
