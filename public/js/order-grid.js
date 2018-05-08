(function ($){
  loadUsers();
})(jQuery);

function loadUsers(){
  $("#order-grid").jsGrid({
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
            {name: "user.email"    , title: 'User'    , type: "text", width: 5},
            {name: "payment.amount" , title: 'Amount' , type: "text", width: 5},
            {name: "payment.sub_amount" , title: 'Sub Amount' , type: "text", width: 5},
            {name: "order_status.name" , title: 'Status' , type: "text", width: 5},
            {name: "packed" , title: 'Packed' , type: "text",
              itemTemplate: function(value,item){
                $packed = '';

                switch (value) {
                  case "packed":
                    $packed += '<b style="background-color:#6ea713;color:white">PACKED</b>';
                    break;
                  case "part_packed":
                    $packed += '<b style="background-color:#b32323;color:white">PARTIAL PACKED</b>';
                    break;
                  case "unpacked":
                    $packed += '<b>UN PACKED</b>';
                    break;
                  default:
                }
                return $packed;
            }, width: 5},
            {
              type: "control", width: 10, editButton: false, modeSwitchButton: false, deleteButton: false,
              itemTemplate: function (value, item) {
                var $result = jsGrid.fields.control.prototype.itemTemplate.apply(this, arguments);
                var $orderItems = $('<a class="btn btn-block btn-success btn-xs">Order Item</a>');
                $orderItems.attr('href',`orders/${item.id}/order-items`);
                return $result.add($orderItems);
              },
            },
            {
              type: "control", width: 10, editButton: false, modeSwitchButton: false, deleteButton: false,
              itemTemplate: function (value, item) {
                var $result = jsGrid.fields.control.prototype.itemTemplate.apply(this, arguments);
                var $pack = $('<a class="btn btn-block btn-info btn-xs">PACK</a>');
                $pack.attr('href',`orders/${item.id}/checkproduct-qty`);
                return $result.add($pack);
              },
            }
        ]
    });
}
