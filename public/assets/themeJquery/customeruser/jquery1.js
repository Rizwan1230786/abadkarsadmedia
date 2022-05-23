$('.formSubmit').submit(function (e) {
    let thiss = $(this);
    e.preventDefault();
    var self = this;
    if (validateForm()) {
        $.ajax({
            type: 'POST',
            url: thiss.attr('action'),
            dataType: "JSON",
            data: new FormData(this),
            processData: false,
            contentType: false,
            success: function (result) {
                var message = (result, "message" ? result.message : "");
                var type = (result, "type" ? result.type : 'error');
                if (result.type == 'error') {
                    toastr['error'](message, { showMethod: 'slideDown', hideMethod: 'slideUp', timeOut: 2000 });
                } else {
                    toastr['success'](message, { showMethod: 'slideDown', hideMethod: 'slideUp', timeOut: 2000 });
                    setTimeout(function () { window.location.href = '/user/user-profile' }, 1000);
                }
            }
        });
    }
});
