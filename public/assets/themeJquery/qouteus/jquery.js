/////////////lets qoute///////////////
var prviousRequest = null;
var input = document.querySelector("#account-phone");
var inputId = $("#account-phone");
var errorMap = ["Invalid number", "Invalid country code", "Too short", "Too long", "Invalid number"];
var iti = window.intlTelInput(input, { utilsScript:  $('body').find('.utilClassLink').text() });
var resetPhoneInput = function () {
    input.classList.remove("is-invalid");
    inputId.parent().parent().parent().find('span').remove();
};
var addPhoneInputError = function (error) {
    input.classList.add("is-invalid");
    inputId.parent().parent().parent().append('<span class="redSpan">' + error + '</span>');
};
var phoneValidation = function () {
    resetPhoneInput();
    if (input.value.trim()) {
        if (iti.isValidNumber()) {
            resetPhoneInput();
        } else {
            var errorCode = iti.getValidationError();
            input.classList.add("is-invalid");
            addPhoneInputError(errorMap[errorCode]);
        }
    }
};
input.addEventListener('blur', phoneValidation);
input.addEventListener('change', phoneValidation);
input.addEventListener('keyup', phoneValidation);
$('.qoute-form').submit(function (e) {
    let thiss = $(this);
    e.preventDefault();
    var self = this;
    if (qouteForm()) {
        prviousRequest = $.ajax({
            type: 'POST',
            url: thiss.attr('action'),
            dataType: "JSON",
            data: new FormData(this),
            processData: false,
            contentType: false,
            async: false,
            beforeSend: function () {
                if (prviousRequest != null) {
                    prviousRequest.abort();
                }
            },
            success: function (result) {
                var message = (_.hasIn(result, "message") ? result.message : "");
                var type = (_.hasIn(result, "type") ? result.type : 'error');
                if (_.isEqual(type, 'error')) {
                    if (_.isObject(message))
                        validationErrors(message);
                    else
                        toastr['error'](message, { showMethod: 'slideDown', hideMethod: 'slideUp', timeOut: 2000 });
                } else {
                    toastr['success'](message, { showMethod: 'slideDown', hideMethod: 'slideUp', timeOut: 2000 });
                    setTimeout(function () { $('.test').val(''); }, 500);
                }
            }
        });

    } else if (!iti.isValidNumber()) {
        phoneValidation();
    } else
        toastr['error']('Fill the all form fields', { showMethod: 'slideDown', hideMethod: 'slideUp', timeOut: 2000 });
});
var subscriptionText = $('.qoute').html();
$(document).on({
    ajaxStart: function () {
        $(".qoute").html('<i class="fa fa-circle-o-notch fa-spin"></i> Processing...');
    },
    ajaxStop: function () {
        $(".qoute").html(subscriptionText);
    },
    ajaxError: function () {
        $(".qoute").html(subscriptionText);
    }
});

function qouteForm() {
    var check = true;
    $('.qoute-form').find(validate_input).each(function () {
        if (!$(this).hasClass('notrequired') && !$(this).val()) {
            check = false
            $(this).addClass('is-invalid');
        }
    });
    return check;
}
//////////////////////sweet alert////////////////////////////
