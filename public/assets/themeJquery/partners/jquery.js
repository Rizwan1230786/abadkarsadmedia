var validate_input = "input[type=text],input[type=radio],input[type=email],input[type=password],textarea, select";
    function validateremove() {
        $(validate_input).off('keyup').keyup(function() {
            clearDiv();
        });
        $(validate_input).off('click').click(function() {
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
        $('.validationForm').find(validate_input).each(function() {
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
$('.formSubmited').submit(function(e) {
    e.preventDefault();
    var self = this;
    if (validateForm()) {
            $.ajax({
                type: 'POST',
                url:  '/admin/partners_submit',
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
                        window.location.href ='/admin/partners';
                    }
                }
            });

    }
});
function validationErrors(list) {
    if (_.isObject(list)) {
        $.map(list, function(value, index) {
            $("input[name='" + index + "']").addClass('is-invalid');
            $("<span class='redSpan'>" + value + "</span>").insertAfter("input[name='" + index + "']");
        });
    }
}
/////////////////sweet_alerat/////////////////////
$(document).on('click', '.delete_record1', function (e) {
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
                url: '/admin/delete_partners/' + id,
                data: {id:id},
                success: function (data) {
                        swal("Deleted!", "Product has been deleted.", "success");
                        location.reload();
                    }
            });
        });
});
