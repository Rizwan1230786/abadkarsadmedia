// setting this cellStats to false by default
var cellStatus = false;
/*
we can have multiple cell input with different ids like cell1,cell2,cell3 and so on, so we are looping through these id's to init the intl Tel Input
instead of init seperately.
 */
$(function() {
    $.fn.intlTelInput.loadUtils(this_domain + "/javascript/inteltelinpututils.js?v=1");
    $('input[id^="cell"]').each(function(index) {
        var cellInput = $("#" + $(this).attr('id'));
        var currentSelector = "#" + $(this).attr('id');
        // initialise plugin
        cellInput.intlTelInput({
            separateDialCode: true,
            placeholderNumberType: "MOBILE",
            hiddenInput: "full_phone[]"

        });
        var errorMsgc1 = $("#error-msg-" + $(this).attr('id'));
        var validMsgc1 = $("#valid-msg-" + $(this).attr('id'));

        var reset = function() {
            cellInput.removeClass("emptyfield");
            errorMsgc1.hide();
            validMsgc1.hide();
        };


        cellInput.blur(function() {
            reset();
            if ($.trim(cellInput.val())) {

                var numberType = cellInput.intlTelInput("getNumberType");
                var status = cellInput.intlTelInput("isValidNumber");
                var SelectedCountryData = cellInput.intlTelInput("getSelectedCountryData");

                if (numberType == intlTelInputUtils.numberType.MOBILE && status == true) {
                    var cellStatus = true;
                } else if ((SelectedCountryData.iso2 == 'us' || SelectedCountryData.iso2 == 'ca') && status == true) {
                    var cellStatus = true;
                } else {
                    var cellStatus = false;
                }

                if (cellStatus) {
                    errorMsgc1.hide();
                    validMsgc1.show();
                } else {
                    cellInput.addClass("emptyfield");
                    errorMsgc1.show();
                    validMsgc1.hide();
                }
            }
        });



        cellInput.on("keyup change", function() {
            reset();
            if ($.trim(cellInput.val())) {

                var numberType = cellInput.intlTelInput("getNumberType");
                var status = cellInput.intlTelInput("isValidNumber");
                var SelectedCountryData = cellInput.intlTelInput("getSelectedCountryData");

                if (numberType == intlTelInputUtils.numberType.MOBILE && status == true) {
                    var cellStatus = true;
                } else if ((SelectedCountryData.iso2 == 'us' || SelectedCountryData.iso2 == 'ca') && status == true) {
                    var cellStatus = true;
                } else {
                    var cellStatus = false;
                }

                if (cellStatus) {
                    errorMsgc1.hide();
                    validMsgc1.show();
                } else {
                    cellInput.addClass("emptyfield");
                    errorMsgc1.show();
                    validMsgc1.hide();
                }
            } else if (cellInput.val() == '') {
                if (cellInput.attr('placeholder-data'))
                    old_placeholder = cellInput.attr('placeholder-data');
                else
                    old_placeholder = cellInput.attr('placeholder');
                cellInput.attr('placeholder', old_placeholder);
                cellInput.attr('placeholder-data', old_placeholder);

            }
        });

        $('#' + $(this).attr('id')).mask('000000000000');

        setTimeout(function() {
            if (!check_cell_num(currentSelector)) {
                cellInput.addClass("emptyfield");
                errorMsgc1.show();
                validMsgc1.hide();
            } else {
                cellInput.removeClass("emptyfield");
                errorMsgc1.hide();
                validMsgc1.show();
            }
        }, 3000);
    })

});

/*
 check_cell_num this function is being called in form validation in add_property_single1_24.js ( that is our new js version ) on line number 867
 the use of this function will make sure that the cell input has the correct cell number on submit
 */

function check_cell_num(id) {
    var cell = $(id);
    // initialise plugin
    cell.intlTelInput({
        separateDialCode: true,
    });
    var reset = function() {
        cell.removeClass("emptyfield");
    };
    /*
        var numberType = cell.intlTelInput("getNumberType");
        var status = cell.intlTelInput("isValidNumber");
        var SelectedCountryData = cell.intlTelInput("getSelectedCountryData");
        if (numberType == intlTelInputUtils.numberType.MOBILE && status == true) {
            var cellStatus = true;
        } else if ((SelectedCountryData.iso2 == 'us' || SelectedCountryData.iso2 == 'ca') && status == true) {
            var cellStatus = true;
        } else {
            var cellStatus = false;
        }
        */
    if ($.trim(cell.val())) {

        var numberType = cell.intlTelInput("getNumberType");
        var status = cell.intlTelInput("isValidNumber");
        var SelectedCountryData = cell.intlTelInput("getSelectedCountryData");

        if (numberType == intlTelInputUtils.numberType.MOBILE && status == true) {
            var cellStatus = true;
        } else if ((SelectedCountryData.iso2 == 'us' || SelectedCountryData.iso2 == 'ca') && status == true) {
            var cellStatus = true;
        } else {
            var cellStatus = false;
        }

    }

    return cellStatus;
}

/*
 intlValidation function is being used in adD_property_single1_24.js on line number 2148 to add new cell field if required on contact person dropdown change
 */

function intlValidation(id) {

    // initialise plugin
    id.intlTelInput({
        separateDialCode: true,
        placeholderNumberType: "MOBILE",
        hiddenInput: "full_phone[]"

    });
    var errorMsgc1 = $("#error-msg-" + id.attr('id'));
    var validMsgc1 = $("#valid-msg-" + id.attr('id'));

    var reset1 = function() {
        id.removeClass("emptyfield");
        errorMsgc1.hide();
        validMsgc1.hide();
    };


    id.blur(function() {
        reset1();
        if ($.trim(id.val())) {

            var numberType = id.intlTelInput("getNumberType");
            var status = id.intlTelInput("isValidNumber");
            var SelectedCountryData = id.intlTelInput("getSelectedCountryData");

            if (numberType == intlTelInputUtils.numberType.MOBILE && status == true) {
                var cellStatus = true;
            } else if ((SelectedCountryData.iso2 == 'us' || SelectedCountryData.iso2 == 'ca') && status == true) {
                var cellStatus = true;
            } else {
                var cellStatus = false;
            }

            if (cellStatus) {
                errorMsgc1.hide();
                validMsgc1.show();
            } else {
                id.addClass("emptyfield");
                errorMsgc1.show();
                validMsgc1.hide();
            }
        } else if (id.val() == '') {
            console.log('lsjflsjf ' + id.attr('placeholder-data'));
            id.attr('placeholder', id.attr('placeholder-data'));
        }
    });

    id.on("keyup change", function() {
        reset1();
        if ($.trim(id.val())) {

            var numberType = id.intlTelInput("getNumberType");
            var status = id.intlTelInput("isValidNumber");
            var SelectedCountryData = id.intlTelInput("getSelectedCountryData");

            if (numberType == intlTelInputUtils.numberType.MOBILE && status == true) {
                var cellStatus = true;
            } else if ((SelectedCountryData.iso2 == 'us' || SelectedCountryData.iso2 == 'ca') && status == true) {
                var cellStatus = true;
            } else {
                var cellStatus = false;
            }

            if (cellStatus) {
                errorMsgc1.hide();
                validMsgc1.show();
            } else {
                id.addClass("emptyfield");
                errorMsgc1.show();
                validMsgc1.hide();
            }
        } else if (id.val() == '') {
            id.attr('placeholder', id.attr('placeholder-data'));
        }
    });
    id.on("click", function() {
        if (id.val() == '') {
            if (id.attr('placeholder-data'))
                current_placeholder = id.attr('placeholder-data');
            else
                current_placeholder = id.attr('placeholder');
            console.log(id.attr('placeholder-data'));
            id.attr('placeholder', '');
            id.attr('placeholder-data', current_placeholder);
            console.log(current_placeholder);
        }
    });
    $(id).mask('000000000000');

}