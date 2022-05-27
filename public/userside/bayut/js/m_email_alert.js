$("#ea_r_hide").live('click', function() {

    $(".ea_rtype_hide").removeClass("ea_rtype_hide");
    $(this).css("display", "none");
});
$("#ea_c_hide").live('click', function() {

    $(".ea_ctype_hide").removeClass("ea_ctype_hide");
    $(this).css("display", "none");
});
$("#ea_more_opt").live('click', function() {

    $("#ea_more_opt").fadeOut('fast', function() {
        $("#ea_less_opt").fadeIn('fast');
        $(".ea_lower").fadeIn('fast');
    });
});
$("#ea_less_opt").live('click', function() {

    $("#ea_less_opt").fadeOut('fast', function() {
        $("#ea_more_opt").fadeIn('fast');
        $(".ea_lower").fadeOut('fast');
    });
});
$("#new_mem").live('click', function() {
    $(".ea_new_member_div").css('display', 'block');
    $(".ea_email").css('display', 'none');

});
$("#old_mem").live('click', function() {
    $(".ea_new_member_div").css('display', 'none');
    $(".ea_email").css('display', 'block');
});
$("#ea_wanted").live('click', function() {
    $("#ea_ohfor").css('display', 'none');
    $("#ea_wantedfor").css('display', 'block');
});
$("#ea_open").live('click', function() {
    $("#ea_wantedfor").css('display', 'none');
    $("#ea_ohfor").css('display', 'block');
});
$("#ea_sale").live('click', function() {
    $("#ea_wantedfor").css('display', 'none');
    $("#ea_ohfor").css('display', 'none');
});
$("#ea_rent").live('click', function() {
    $("#ea_wantedfor").css('display', 'none');
    $("#ea_ohfor").css('display', 'none');
});

$(document).ready(function() {

    if ($("#ea_open").is(":checked")) {
        $("#ea_ohfor").css('display', 'block');
    } else if ($("#ea_wanted").is(":checked")) {
        $("#ea_wantedfor").css('display', 'block');
    }
});

function add_alert_form_submit(id, type) {
    if (type != '') {
        var ea_cat = $("#cat_id").val();
        var ea_freq_val = $("#alert_frequency").val();
        $("#ea_cat_id_h").attr('value', ea_cat);
        $("#ea_alert_frequency_h").attr('value', ea_freq_val);
    }
    $("#alert_submit").hide();
    $("#wait_image").show();
    $('#' + id).ajaxSubmit(function(str) {
        $("#alert_submit").show();
        $("#wait_image").hide();
        $("#ea_message").html(str);
        $("#ea_message").show();
    });
    return false;
}
$(".ea_show_advance").live('click', function() {
    $("#img_pop").css("width", "652px");
    $('.ea_content').show();
    $('.ea_basic_content').hide();
});

$(".ea_show_basic").live('click', function() {
    $("#img_pop").css("width", "512px");
    $('.ea_content').hide();
    if ($(".ea_basic_content").length == 0) {
        $('.img_load').append("<div id='ea_load_pop' style='width:415px;text-align:center;'><img src='" + paths['images_css'] + "/m_byt_loading.gif' /></div>");
        url = this_domain_ajax + "&c=email_alert&html=email_alert_basic.html";
        $.get(url, '', function(str_pop) {
            $("#ea_load_pop").remove();
            $('.img_load').append(str_pop);
        });
    } else {
        $('.ea_basic_content').show();
    }
});

$(".ea_show_basic").live('click', function() {
    $("#img_pop").css("width", "512px");
    $('.ea_basic_content').show();
    $('.ea_content').hide();
});

$(".ea_show_advance").live('click', function() {

    $("#img_pop").css("width", "652px");
    $('.ea_basic_content').hide();
    if ($("#add_alert_pop").length == 0) {
        $('.img_load').append("<div id='ea_load_pop' style='width:555px;text-align:center;'><img src='" + paths['images_css'] + "/m_byt_loading.gif' /></div>");
        url = this_domain_ajax + "&c=email_alert&t=ajax&html=email_alert_advance.html";
        $.get(url, '', function(str_pop) {
            $("#ea_load_pop").remove();
            $('.img_load').append(str_pop);
        });
    } else {
        $('.ea_content').show();
    }

});
$(".ea_holder #ea_sale").live('click', function() {
    ea_price_cb_html = $("#price_buy").html();
    $("#price_combo_sel").html(ea_price_cb_html);
});
$(".ea_holder #ea_rent").live('click', function() {
    ea_price_cb_html = $("#price_rent").html();
    $("#price_combo_sel").html(ea_price_cb_html);
});
$(".ea_holder #ea_wanted").live('click', function() {
    ea_price_cb_html = $("#price_wanted").html();
    $("#price_combo_sel").html(ea_price_cb_html);
});
$(".ea_holder #ea_open").live('click', function() {
    ea_price_cb_html = $("#price_buy").html();
    $("#price_combo_sel").html(ea_price_cb_html);
});