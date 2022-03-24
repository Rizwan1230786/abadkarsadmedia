$('.formSubmit').submit(function(e) {
    let thiss = $(this);
    e.preventDefault();
    var self = this;
            $.ajax({
                type: 'POST',
                url: thiss.attr('action'),
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
                        setTimeout(function() { window.location.href = '/admin/users' }, 1000);
                    }
                }
            });
});