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
            {name: "user_id"    , title: 'User'    , type: "text", width: 5},
            {name: "product_id" , title: 'Product' , type: "text", width: 5},
            {name: "payment_id" , title: 'Payment' , type: "text", width: 5},
            
            {
              type: "control", width: 10, editButton: false, modeSwitchButton: false, deleteButton: false,
              itemTemplate: function (value, item) {
                var $result = jsGrid.fields.control.prototype.itemTemplate.apply(this, arguments);
                var $edit = $('<a class="btn btn-block btn-default btn-xs">See Something</a>');
                $edit.attr('href',`#`);
                return $result.add($edit);
              },
            },
            {
                type: "control", width: 10, editButton: false, modeSwitchButton: false, deleteButton: false,
                itemTemplate: function (value, item) {
                  var $result = jsGrid.fields.control.prototype.itemTemplate.apply(this, arguments);
                  var $del = $('<a class="btn btn-block btn-danger btn-xs">Delete</a>');
                  $del.on('click', function (e) {
                      e.stopPropagation();
                      e.preventDefault();
                      deleteOrder(item.id);
                  });
                return $result.add($del);
              },
            },
        ]
    });
}

function deleteOrder(orderId){
    swal({
    title: "Are you sure?",
    text: "Are you sure you want to delete this User!",
    type: "warning",
    showCancelButton: true,
    confirmButtonColor: "#DD6B55",
    confirmButtonText: "Yes",
    cancelButtonText: "No"
  }).then((result)=> {
    if(result.value){
      $.ajax({
          type: "POST",
          url: `/admin/orders/delete/${orderId}`,
          headers: {
              "x-csrf-token": $("[name=_token]").val()
          },
      }).done(response => {
        if(response > 0){
          swal("Deleted!", "User deleted successfully.", "success");
          $('#order-grid').jsGrid('render');
        }
      });
    }
  });
}
