var prviousRequest = null;
$('.subscribeFrom').submit(function(e) {
    let thiss = $(this);
    e.preventDefault();
    var self = this;
    if (subscriptionForm()) {
        prviousRequest = $.ajax({
            type: 'POST',
            url: thiss.attr('action'),
            dataType: "JSON",
            data: new FormData(this),
            processData: false,
            contentType: false,
            async: false,
            beforeSend: function() {
                if (prviousRequest != null) {
                    prviousRequest.abort();
                }
            },
            success: function(result) {
                var message = (_.hasIn(result, "message") ? result.message : "");
                var type = (_.hasIn(result, "type") ? result.type : 'error');
                if (_.isEqual(type, 'error')) {
                    if (_.isObject(message))
                        toastr['error']("The subscription email must be a valid email address.", { showMethod: 'slideDown', hideMethod: 'slideUp', timeOut: 2000 });
                    else
                        toastr['error'](message, { showMethod: 'slideDown', hideMethod: 'slideUp', timeOut: 2000 });
                } else {
                    toastr['success'](message, { showMethod: 'slideDown', hideMethod: 'slideUp', timeOut: 2000 });
                    setTimeout(function() { $('.test').val(''); }, 300);
                }
            }
        });

    } else if (!iti.isValidNumber()) {
        phoneValidation();
    } else
        toastr['error']('Fill the all form fields', { showMethod: 'slideDown', hideMethod: 'slideUp', timeOut: 2000 });
});
var subscriptionText = $('.subscription_button').html();
$(document).on({
    ajaxStart: function() {
        $(".subscription_button").html('<i class="fa fa-circle-o-notch fa-spin"></i> Processing...');
    },
    ajaxStop: function() {
        $(".subscription_button").html(subscriptionText);
    },
    ajaxError: function() {
        $(".subscription_button").html(subscriptionText);
    }
});

function subscriptionForm() {
    var check = true;
    $('.subscribeFrom').find(validate_input).each(function() {
        if (!$(this).hasClass('notrequired') && !$(this).val()) {
            check = false
            $(this).addClass('is-invalid');
        }
    });
    return check;
}