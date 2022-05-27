<div id="maincontent">

    <div id="leftcolumn">
        <div id="mybayut_menu">
            <span class="leftcolumheadings">Tools</span>
            <a href="{{ url('user/post-listing') }}"
                class="leftcolumnlink">Post New Listing</a>
            <a href="{{ url('user/favourite-listing') }}"
                class="leftcolumnlink">Favourites</a>
            <a href="{{ url('user/email-alert') }}"
                class="leftcolumnlink">Create Email Alert</a>
            <a href="{{ url('user/mange-email-alert') }}"
                class="leftcolumnlink">Manage Email Alerts</a>


        </div>

        <input type=hidden name=client_ownerlist id=client_ownerlist value=(1001388906)>
    </div>
    <div class="imz_dialog" id="common_popup" style="display:none">
        <div class="title_div">
            <span class="dialog_title"></span>
            <span onclick="imz_filter.click()" class="dialog_close"></span>
        </div>
        <div class="dialog_container"></div>
    </div>
    <div class="imz_dialog_redefined" id="common_popup_redefined" style="display:none">
        <div class="title_div_redefined">
            <span class="dialog_title_redefined"></span>
            <span onclick="imz_filter.click()" class="dialog_close"></span>
        </div>
        <div class="dialog_container_redefined"></div>
    </div>
