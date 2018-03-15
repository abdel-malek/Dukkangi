
(function ($){
  loadProduct();

})(jQuery);

function loadProduct(){
  $("#product-grid").jsGrid({
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
            {name: "id"            , title: 'ID'         , type: "text", width: 5},
            {name: "arabic"        , title: 'Name (AR)'  , type: "text", width: 5},
            {name: "english"       , title: 'Name (EN)'  , type: "text", width: 5},
            {name: "category_id"   , title: 'Category'   , type: "text", width: 5},
            {name: "subcategory_id", title: 'Subcategory', type: "text", width: 5},
            {name: "qty"           , title: 'Quantity'   , type: "text", width: 5},
            {name: "price"         , title: 'Price'      , type: "text", width: 5},
            {name: "point"         , title: 'Points'     , type: "text", width: 5},
            {
              type: "control", width: 10, editButton: false, modeSwitchButton: false, deleteButton: false,
              itemTemplate: function (value, item) {
                var $result = jsGrid.fields.control.prototype.itemTemplate.apply(this, arguments);
                var $edit = $('<a class="btn btn-block btn-default btn-xs">View</a>');
                $edit.attr('href',`/admin/products/single/`+item.id);
                return $result.add($edit);
              },
            }, 
            {
              type: "control", width: 10, editButton: false, modeSwitchButton: false, deleteButton: false,
              itemTemplate: function (value, item) {
                var $result = jsGrid.fields.control.prototype.itemTemplate.apply(this, arguments);
                var $edit = $('<a class="btn btn-block btn-info btn-xs">Edit</a>');
                $edit.attr('href',`/admin/categoryproducts/edit/`+item.id);
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
                      deleteProduct(item.id);
                  });
                return $result.add($del);
              },
            },
        ]
    });
}

function deleteProduct(ProductId){
    swal({
    title: "Are you sure?",
    text: "Are you sure you want to delete this Product!",
    type: "warning",
    showCancelButton: true,
    confirmButtonColor: "#DD6B55",
    confirmButtonText: "Yes",
    cancelButtonText: "No"
  }).then((result)=> {
    if(result.value){
      $.ajax({
          type: "POST",
          url: `/admin/products/delete/${ProductId}`,
          headers: {
              "x-csrf-token": $("[name=_token]").val()
          },
      }).done(response => {
        if(response > 0){
          swal("Deleted!", "Category deleted successfully.", "success");
          $('#product-grid').jsGrid('render');
        }
      });
    }
  });
}

