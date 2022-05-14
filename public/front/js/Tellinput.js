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
//////////////////////sweet alert////////////////////////////
