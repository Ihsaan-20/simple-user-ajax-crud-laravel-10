    //add new user;
    $("#addNewUser").on('click',function(){
        $("#EditUserForm").trigger('reset');
        $("#modal_title").html('Add New User');
        $("#userBtn").html('Add User');
        $("#modal_user").modal('show');
        $("#id").val("");
    });

    //store/update new user;
    $("form").on('submit',function(e){
        e.preventDefault();
        $.ajax({
            url:"/user/store",
            data: $("#userForm").serialize(),
            type:'POST'
        }).done(function(res){
            var row = '<tr id="row_user_'+ res.id + '">';
            row += '<td>' + res.profile + '</td>';
            row += '<td>' + res.name + '</td>';
            row += '<td>' + res.email + '</td>';
            row += '<td>' + '<button type="button" id="edit_user" data-id="' + res.id +'" class="btn btn-warning">Edit</button>' + '<button type="button" id="delete_user" data-id="' + res.id +'" class="btn btn-danger">Delete</button>' + '</td>';

            if($("#id").val()){
                $("#row_user_" + res.id).replaceWith(row);
            }else{
                $("#list_user").prepend(row);
            }
            $("#userForm").trigger('reset');
            $("#modal_user").modal('hide');

        });
    });


    $("body").on('click', '#edit_user', function () {
        var id = $(this).data('id');
        $.get('user/edit/' + id, function (res) {
            console.log(res);
            $("#modal_title").html('Edit User');
            $("#userBtn").html('Update User');
    
            $("#id").val(res.id);
            $("#name").val(res.name);
            $("#email").val(res.email);
            // Avoid setting the password directly in the input field for security reasons
            $("#passwordDiv").hide();
    
            // Trigger the modal display
            $("#modal_user").modal('show');
        });
    });

    // Delete users
    $("body").on('click','#delete_user',function(){
        var id = $(this).data('id');
        confirm('Are you sure want to delete !');

        $.ajax({
            type:'DELETE',
            url: "/user/destroy/" + id
        }).done(function(res){
            $("#row_user_" + id).remove();
        });
    });

    




