$('.formSubmited').submit(function(e) {
    e.preventDefault();
    var self = this;
    if (validateForm()) {
            $.ajax({
                type: 'POST',
                url:  '/admin/agent/submit',
                dataType: "JSON",
                data: new FormData(this),
                processData: false,
                contentType: false,
                success: function(result) {
                    var message = (_.hasIn(result, "message") ? result.message : "");
                    var type = (_.hasIn(result, "type") ? result.type : 'error');
                    if (_.isEqual(type, 'error')) {
                        if (_.isObject(message))
                            validationErrors(message);
                        else
                            toastr['error'](message, { showMethod: 'slideDown', hideMethod: 'slideUp', timeOut: 2000 });
                    } else {
                        toastr['success'](message, { showMethod: 'slideDown', hideMethod: 'slideUp', timeOut: 2000 });
                        window.location.href ='/admin/agent';
                    }
                }
            });

    }
});

///////agency base agents add/////
$('.formSubmited2').submit(function(e) {
    e.preventDefault();
    var self = this;
    if (validateForm()) {
            $.ajax({
                type: 'POST',
                url:  '/agency/agent/submit',
                dataType: "JSON",
                data: new FormData(this),
                processData: false,
                contentType: false,
                success: function(result) {
                    var message = (_.hasIn(result, "message") ? result.message : "");
                    var type = (_.hasIn(result, "type") ? result.type : 'error');
                    if (_.isEqual(type, 'error')) {
                        if (_.isObject(message))
                            validationErrors(message);
                        else
                            toastr['error'](message, { showMethod: 'slideDown', hideMethod: 'slideUp', timeOut: 2000 });
                    } else {
                        toastr['success'](message, { showMethod: 'slideDown', hideMethod: 'slideUp', timeOut: 2000 });
                        window.location.href ='/agency/agent';
                    }
                }
            });

    }
});
/////////////////sweet_alerat/////////////////////
$(document).on('click', '.delete_record', function (e) {
    e.preventDefault();
    var id = $(this).data('id');

    swal({
            title: "Are you sure!",
            text: "You will not be able to recover this imaginary file!",
            type: "error",
            confirmButtonClass: "btn-danger",
            confirmButtonColor : "#DD6B55",
            confirmButtonText: "Yes!",
            showCancelButton: true,
        },
        function() {
            $.ajax({
                type: "post",
                url: '/admin/delete_agent/' + id,
                data: {id:id},
                success: function (data) {
                        swal("Deleted!", "Product has been deleted.", "success");
                        location.reload();
                    }
            });
        });
});
///////// agency agents delet record//////
$(document).on('click', '.delete_record_agent', function (e) {
    e.preventDefault();
    var id = $(this).data('id');

    swal({
            title: "Are you sure!",
            text: "You will not be able to recover this imaginary file!",
            type: "error",
            confirmButtonClass: "btn-danger",
            confirmButtonColor : "#DD6B55",
            confirmButtonText: "Yes!",
            showCancelButton: true,
        },
        function() {
            $.ajax({
                type: "post",
                url: '/agency/delete_agent/' + id,
                data: {id:id},
                success: function (data) {
                        swal("Deleted!", "Agent has been deleted.", "success");
                        location.reload();
                    }
            });
        });
});
