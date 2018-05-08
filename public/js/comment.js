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
    fields: [


      {
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
      {
        type: "control", width: 10, editButton: false, modeSwitchButton: false, deleteButton: false,
        itemTemplate: function (value, item) {
          var $result = jsGrid.fields.control.prototype.itemTemplate.apply(this, arguments);
          var $del = $('<a class="btn btn-block btn-danger btn-xs">Delete</a>');
          $del.on('click', function (e) {
              e.stopPropagation();
              e.preventDefault();
              deleteComment(item.id);
          });
        return $result.add($del);
      },
    },
    ]
  });
}
function deleteComment(commentId){
    swal({
    title: "Are you sure?",
    text: "Are you sure you want to delete this Comment!",
    type: "warning",
    showCancelButton: true,
    confirmButtonColor: "#DD6B55",
    confirmButtonText: "Yes",
    cancelButtonText: "No"
  }).then((result) => {
    if(result.value){
      $.ajax({
          type: "POST",
          url: `/admin/comment/delete/${commentId}`,
          headers: {
              "x-csrf-token": $("[name=_token]").val()
          },
      }).done(response => {
        if(response > 0){
          swal("Deleted!", "Comment deleted successfully.", "success");
          $('#comment-grid').jsGrid('render');
        }
      });
    }
  });
}