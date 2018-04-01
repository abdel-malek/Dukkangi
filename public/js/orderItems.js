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
