
var validate_input = "input[type=text],input[type=file],input[type=radio],input[type=email],input[type=password],textarea, select";
function validateremove() {
    $(validate_input).off('keyup').keyup(function () {
        clearDiv();
    });
    $(validate_input).off('click').click(function () {
        clearDiv();
    });
}

function clearDiv() {
    $('body').find('.redSpan').remove();
    $('body').find('.is-invalid').removeClass('is-invalid');
    $('body').find('.is-loading').removeClass('is-loading');
    $('body').find('.customerSpinner').remove();
}
validateremove();

function validateForm() {
    var check = true;
    $('.validationForm').find(validate_input).each(function () {
        if (!$(this).hasClass('notrequired') && !$(this).val()) {
            check = false
            $(this).addClass('is-invalid');
        }
    });
    return check;
}
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
    }
});
var previousText = $('.submit_button').html();
$(document).on({
    ajaxStart: function () {
        $(".submit_button").html('<i class="fa fa-circle-o-notch fa-spin"></i> Processing...');
    },
    ajaxStop: function () {
        $(".submit_button").html(previousText);
    },
    ajaxError: function () {
        $(".submit_button").html(previousText);
    }
});
function validationErrors(list) {
    if (_.isObject(list)) {
        $.map(list, function (value, index) {
            $("input[name='" + index + "']").addClass('is-invalid');
            $("<span class='redSpan'>" + value + "</span>").insertAfter("input[name='" + index + "']");
        });
    }
}

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
                    setTimeout(function () { window.location.href = '/user/signin' }, 1000);
                }
            }
        });
    }
});
