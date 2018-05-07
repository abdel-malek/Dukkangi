(function ($){
  loadBrands();
})(jQuery);

// load brand
function loadBrands(){
  $('#brand-product-grid').jsGrid({
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
                    data: {filter}, headers: {
                        "x-csrf-token": $("[name=_token]").val()
                    },
                }).done((response) => data.resolve({ data: response.data, itemsCount: [response.total] }));
                return data.promise();
            },
        },


        fields: [
            {name: "id", title: 'ID', type: "text", width: 5},
            {name: "arabic", title: 'Name (AR)', type: "text", width: 5},
            {name: "english", title: 'Name (EN)', type: "text", width: 5},
            {name: "turky", title: 'Name (TR)', type: "text", width: 5},
            {name: "kurdi", title: 'Name (KU)', type: "text", width: 5},
            {name: "german", title: 'Name(Gr)', type: "text", width: 5},
             {
              type: "control", width: 10, editButton: false, modeSwitchButton: false, deleteButton: false,
              itemTemplate: function (value, item) {
                var $result = jsGrid.fields.control.prototype.itemTemplate.apply(this, arguments);
                var $edit = $('<a class="btn btn-block btn-default btn-xs">See Product</a>');
                $edit.attr('href',`/admin/products/single/${item.id}`);
                return $result.add($edit);
              },
            },
        ]
    });
}

