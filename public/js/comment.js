(function($) {
  loadComments();
})(jQuery);

function loadComments() {
  $("#comment-grid").jsGrid({
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
      loadData: function(filter) {
        var data = $.Deferred();
        $.ajax({
          type: "POST",
          url: ``,
          dataType: "json",
          data: {
            filter
          },
          headers: {
            "x-csrf-token": $("[name=_token]").val()
          },
        }).done((response) => data.resolve({
          data: response.data,
          itemsCount: [response.total]
        }));
        return data.promise();
      },
    },
    fields: [{
        name: "user.email",
        title: 'Email',
        type: "text",
        width: 5
      },
      {
        name: "product.arabic",
        title: 'Product Name',
        type: "text",
        width: 5
      },
      {
        name: "description",
        title: 'Description',
        type: "text",
        width: 5
      },
      {
        name: "rate",
        title: 'Rate',
        type: "text",
        width: 5
      },
      {
        name: "created_at",
        title: 'created',
        type: "text",
        width: 5
      },
    ]
  });
}
