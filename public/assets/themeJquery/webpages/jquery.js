var prviousRequest = null;
var titleClass = '.txtPageTitle';
$(document).off("keyup", titleClass).on("keyup", titleClass, function(event) {
    event.preventDefault();
    var page_title = $(titleClass).val();
    if (!_.isEmpty(page_title)) {
        $(titleClass).parent().addClass('is-loading');
        $(titleClass).addClass('is-invalid');
        $('<div class="spinner-border spinner-border-sm customerSpinner"></div>').insertAfter($(titleClass));
        page_title = page_title.toLowerCase().replace(/ /g, '-').replace(/[^\w-]+/g, '');
        $(".txtPageUrl").val(page_title.toLowerCase().replace(/ /g, '-').replace(/[^\w-]+/g, ''));
        var id = $('body').find('.formHiddenId').text();
        prviousRequest = $.ajax({
            type: 'POST',
            url: $('body').find('.checkUrlSlug').text(),
            data: { 'page_title': page_title, 'id': id },
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
                        validationErrors(message);
                    clearDiv();
                    $(titleClass).addClass('is-invalid');
                    $("<span class='redSpan'>" + message + "</span>").insertAfter(titleClass);
                } else {
                    clearDiv();
                }
            }
        });
    } else {
        clearDiv();
    }
});
var formData = new FormData();
accountUploadImg = $('#account-upload-img'),
    accountUploadBtn = $('#account-upload');
if (accountUploadBtn) {
    accountUploadBtn.on('change', function(e) {
        var reader = new FileReader(),
            files = e.target.files;
        reader.onload = function() {
            if (accountUploadImg) {
                accountUploadImg.attr('src', reader.result);
            }
        };
        formData.append('merchantImage', files[0]);
        reader.readAsDataURL(files[0]);
    });
}
$('.formSubmit').submit(function(e) {
    e.preventDefault();
    var self = this;
    if (validateForm()) {
        if (!$(titleClass).hasClass("is-invalid")) {
            $.ajax({
                type: 'POST',
                url: $('body').find('.formSubmitUrl').text(),
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
                        setTimeout(function() { window.location.href = $('body').find('.formRedirectUrl').text(); }, 1000);
                    }
                }
            });
        } else {
            toastr['error']('Title is taken', { showMethod: 'slideDown', hideMethod: 'slideUp', timeOut: 2000 });
        }
    }
});
//////////////sweet alearts////////////////////////////
