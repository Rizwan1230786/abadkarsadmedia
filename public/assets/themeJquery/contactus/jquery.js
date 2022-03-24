/////////////lets qoute///////////////
var prviousRequest = null;
var input = document.querySelector("#account-phone");
var inputId = $("#account-phone");
var errorMap = ["Invalid number", "Invalid country code", "Too short", "Too long", "Invalid number"];
var iti = window.intlTelInput(input, { utilsScript: $('body').find('.utilClassLink').text() });
var resetPhoneInput = function() {
    input.classList.remove("is-invalid");
    inputId.parent().parent().parent().find('span').remove();
};
var addPhoneInputError = function(error) {
    input.classList.add("is-invalid");
    inputId.parent().parent().parent().append('<span class="redSpan">' + error + '</span>');
};
var phoneValidation = function() {
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

var previousText = $('.submit_button').html();
$(document).on({
    ajaxStart: function() {
        $(".submit_button").html('<i class="fa fa-circle-o-notch fa-spin"></i> Processing...');
    },
    ajaxStop: function() {
        $(".submit_button").html(previousText);
    },
    ajaxError: function() {
        $(".submit_button").html(previousText);
    }
});
$('.qoute-form').submit(function(e) {
    e.preventDefault();
    var self = this;
    var action=$(this).attr('action');
    if (qouteForm()) {
        $.ajax({
            type: 'POST',
            url:  action,
            dataType: "JSON",
            data: new FormData(this),
            processData: false,
            contentType: false,
            success: function(result) {
                var message = (result,"message") ? result.message : "Thank you for Considering Covid-19";
                var type = (result,"type") ? result.type : 'error' ? result.type : 'success';
                if (result.type=='error') {
                        toastr['error'](message, { showMethod: 'slideDown', hideMethod: 'slideUp', timeOut: 2000});
                }else{
                    toastr['success'](message, { showMethod: 'slideDown', hideMethod: 'slideUp', timeOut: 2000});
                    setTimeout(function()  { $('.test').val(''); }, 1000);
                }
            }
        });

    } else if (!iti.isValidNumber()) {
        phoneValidation();
    } else
        toastr['error']('Fill the all form fields', { showMethod: 'slideDown', hideMethod: 'slideUp', timeOut: 2000 });
});
function qouteForm() {
    var check = true;
    $('.validationForm').find(validate_input).each(function() {
        if (!$(this).hasClass('notrequired') && !$(this).val()) {
            check = false
            $(this).addClass('is-invalid');
        }
    });
    return check;
}