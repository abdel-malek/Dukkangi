(function ($){
  loadUsers();
})(jQuery);

function loadUsers(){
  $("#copuon-users-grid").jsGrid({
        filtering: false,
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
            {name: "id"         , title: 'User ID'      , type: "text", width: 5},
            {name: "name" , title: 'Username' , type: "text", width: 5},
            {name: "email" , title: 'Email' , type: "text", width: 5},
            {name: "status" , title: 'Status' , type: "text", width: 5},
        ]
    });
}
