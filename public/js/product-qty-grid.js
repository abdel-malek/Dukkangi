(function ($){
  loadProduct();

})(jQuery);

function loadProduct(){
  $("#product-qty-grid").jsGrid({
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
            {name: "product.id", title:'ID',type: "text",width: 5},
            {name: "product.arabic", title: 'Product', type: "text", width: 5},
            {name: "qty", title: 'Available Qty'  , type: "text", width: 5},
            {
              type: "control", width: 10, editButton: false, modeSwitchButton: false, deleteButton: false,
              itemTemplate: function (value, item) {
                console.log(item);
                var $result = jsGrid.fields.control.prototype.itemTemplate.apply(this, arguments);
                var $edit = $('<a class="btn btn-block btn-info btn-xs">Add</a>');
                $edit.attr('href',`/admin/products/qty/`+item.product_id+`/create`);
                return $result.add($edit);
              },
            },
        ]
    });
}
