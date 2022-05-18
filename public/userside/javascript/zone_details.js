function fetch_locs(page_no = 0, per_page = 20) {
    var per_page = $(".show_select :selected").text();

    var city_id = $("#city").val();
    var zone_id = $("#zone").val();

    var city_name = $("#city :selected").text();
    var zone_name = $("#zone :selected").text();

    if (!empty(city) && !empty(zone)) {
        $(".zone_locations").html("Processing...");

        var data = {
            ajax: 1,
            ajax_section: "common",
            ajax_action: "fetch_zone_location",
            action: 'fetch_zone_location',
            city_id: city_id,
            zone_id: zone_id,
            page_no: page_no,
            per_page: per_page
        };


        $.ajax({
            data: data,
            success: function(str) {
                // console.log(str);
                var html_locs = "<h3 style='margin-bottom: 20px; color:#00A651;letter-spacing: 0.3px;'>Areas in " + city_name + " " + " " + zone_name + " </h3>";
                html_locs = html_locs + str
                $(".zone_locations").html(html_locs);
                $("#per_page").css('display', 'block');

            }

        });
    }
}


imzee_live(".paginate span a", "click", function(event) {

    var page_no = event.target.id;

    var per_page = $(".show_select :selected").text();

    fetch_locs(page_no, per_page);

});


imzee_live(".show_select", "change", function(event) {

    var per_page = event.target.value;
    var page_no = $("div#all span.selected").text();

    fetch_locs(page_no, per_page);

});