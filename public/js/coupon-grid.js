(function ($){
  loadUsers();
})(jQuery);

function loadUsers(){
    $("#coupon-grid").jsGrid({
        filtering: true,
        width: '100%',
        height: 'auto',
        autoload: true,
        paging: true,
        pageSize: 1000,
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
            {name: "id"                 , title: 'User ID'    , type: "text", width: 5},
            {name: "email"              , title: 'Email', type: "text", width: 5},
            {name: "order_item.0.points", title: 'Gain Points', type: "text", width: 5},
            {
              type: "control", width: 10, editButton: false, modeSwitchButton: false, deleteButton: false,
              itemTemplate: function (value, item) {
                var $result = jsGrid.fields.control.prototype.itemTemplate.apply(this, arguments);
                var $orderItems = $('<a class="btn btn-block btn-success btn-xs">Send Coupon</a>');
                $orderItems.attr('onclick',`viewModal( ${item.id} )`);
                return $result.add($orderItems);
              },
            },
            
        ]
    });
}
