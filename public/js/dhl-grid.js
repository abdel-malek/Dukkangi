(function ($){
  loadUsers();
})(jQuery);

function loadUsers(){
  $("#dhl-grid").jsGrid({
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
            {name: "id"    , title: 'Order ID'    , type: "text", width: 5},
            {name: "user_id"    , title: 'User Email'    , type: "text", width: 5},
            {name: "packed"    , title: 'Packed'    , type: "text", width: 5},
            {name: "dhl_status" , title: 'Status' , type: "text", width: 5},
            {name: "dhl_code" , title: ' DHL Code' , type: "text", width: 5},
            {
              type: "control", width: 10, editButton: false, modeSwitchButton: false, deleteButton: false,
              itemTemplate: function (value, item) {
                var $result = jsGrid.fields.control.prototype.itemTemplate.apply(this, arguments);
                
                if (item.dhl_status == "On Delivery" ){
                    var $orderItems = $('<a class="btn btn-block btn-default btn-xs">Change Code</a>');
                }
                else {
                    var $orderItems = $('<a class="btn btn-block btn-success btn-xs">On Delivery</a>');
                }  
                $orderItems.attr('onclick',`viewModal(${item.id})`);
                return $result.add($orderItems);
              },
            },
            
        ]
    });
}
