<div id="maincontent">

    <div id="leftcolumn">
        <div id="mybayut_menu">


            <a href="{{ url('user/advertise') }}" class="leftcolumnlink"
                style="border-top: 1px solid #DADBDA !important;">Advertise</a>


            <a href="{{ url('/user/refresh-advertise') }}"
                class="leftcolumnlink"> Refresh Listing</a>


            <a href="{{ url('user/premium-advertise') }}"
                class="leftcolumnlink"> Premium Listing</a>


            <a href="{{ url('user/hot-advertise') }}"
                class="leftcolumnlink"> Hot Listing</a>


            <a href="{{ url('user/superhot-advertise') }}"
                class="leftcolumnlink"> Super Hot Listing</a>
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
