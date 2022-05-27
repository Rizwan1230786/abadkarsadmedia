<div id="maincontent">

    <div id="leftcolumn">
        <div id="mybayut_menu">
            <span class="leftcolumheadings">Agency Staff</span>
            <a href="{{ url('user/mange-user') }}"
                class="leftcolumnlink">Manage Users</a>
            <a href="{{ url('user/add-new-user') }}" class="leftcolumnlink">Add
                New User</a>
            <a href="{{ url('user/invite-user') }}"
                class="leftcolumnlink">Invite Users</a>

            <a href="https://profolio.zameen.com/profolio/index.php?tabs=7&section=manage_quota"
                class="leftcolumnlink">Manage Listing Quota</a>

            <a href="{{ url('user/mange-team') }}"
                class="leftcolumnlink">Manage Teams</a>

        </div>

        <input type=hidden name=client_ownerlist id=client_ownerlist value=(1001388906,1001415959)>
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
