@extends('userside.layout')
@section('main')
<style>
    .show{
        display: block;
    }
    .hide{
        display: none;
    }
</style>
    @include('userside.layouts.tools_sidebar')
    <div id="rightcolumn" style="
        width:79% " class="rightcolumn_div post_story_margin">

        <div style="height:30px;margin-bottom:10px; display: block;" id="bc_container">
            <span class="worddashbord" style="display:inline;"> <a href="index.php?tabs=6&section=favourites">Tools</a>
                &raquo; Add New Alert </span>
        </div>
        <form id="add_alert_form" method="post" action="">

            <div class="ea_show_message" style="display:none;">

            </div>
            <div class="box_title">
                <div><b>&nbsp;Create Email Alert&nbsp;</b></div>
            </div>
            <div class="box_body ea_container">
                <div class="spacerDiv">
                    <span style="width:95%; text-align:right">&nbsp;</span>
                </div>
                <hr size="4" class="postlistingProperty_separator">
                <label class="newlistingdiv_innerheading">Basic Alert Criteria</label>
                <div class="ea_row">
                    <span class="ea_row_left">Receive alert on: </span>
                    <span class="ea_alert_combo ea_row_right">
                        <div id='ea_alert_frequency_combo' class='combo '>
                            <div onmousedown="open_combo('ea_alert_frequency')" class='combo_title' style='width:170px'>
                                <div style='width:142px' class='text click' id='ea_alert_frequency_title'>Daily</div>
                                <div class='img'></div>
                                <input name='ea_alert_frequency' id='ea_alert_frequency' ctype='single' type='hidden'
                                    value='' dcaption='Daily' />

                            </div>
                            <table id='ea_alert_frequency_combo_body' class='combo_body hide'>
                                <tr style='height: 27px;' onmousedown='combo.close()'>
                                    <td class='tl'></td>
                                    <td class='t'><label class='cap_tion' style='width:224px'>Please select</label><i></i>
                                    </td>
                                    <td class='tr'></td>
                                </tr>
                                <tr>
                                    <td class='ml'></td>
                                    <td class='combo_data' valign='top' style='width:239px;'>
                                        <ul class='options single' id='ea_alert_frequency_combo_items'
                                            style='width: 239px;'>
                                            <li val='1440'>Daily</li>
                                            <li val='10080'>Weekly</li>
                                            <li val='43200'>Monthly</li>
                                        </ul>
                                    </td>
                                    <td class='mr'></td>
                                </tr>
                                <tr>
                                    <td class='bl'></td>
                                    <td class='b'></td>
                                    <td class='br'></td>
                                </tr>
                            </table>
                        </div>
                    </span>
                </div>
                <div class="ea_row">
                    <span class="ea_row_left">Property Type: </span>
                    <span class="ea_alert_combo ea_row_right">
                        <div id='ea_ptype_combo' class='combo '>
                            <div onmousedown="open_combo('ea_ptype')" class='combo_title' style='width:170px'>
                                <div style='width:142px' class='text' id='ea_ptype_title'>Property<u>_</u>Type</div>
                                <div class='img'></div>
                                <input name='ea_ptype' id='ea_ptype' ctype='multi_check' type='hidden' value=''
                                    combo_height="355" dcaption='Property Type' />

                            </div>
                            <table id='ea_ptype_combo_body' class='combo_body' style='display: none;width: 230px;'>
                                <tr style='height: 27px;' onmousedown='combo.close()'>
                                    <td class='tl'></td>
                                    <td class='t'><label class='cap_tion' style='width:195px'>Please select</label><i></i>
                                    </td>
                                    <td class='tr'></td>
                                </tr>
                                <tr>
                                    <td class='ml'></td>
                                    <td class='combo_data' valign='top' style='width:210px;'>
                                        <ul class='options multi_check' id='ea_ptype_combo_items' style='width: 210px;'>
                                            <div class='label2'> Homes </div>
                                            <div class='toggle'>Select: <a rel='nofollow'
                                                    onclick="toggle_type('ptype_1',1)">All</a> / <a rel='nofollow'
                                                    onclick="toggle_type('ptype_1',0)">None</a></div>
                                            <li val='9'><input type='checkbox' class='ptype_1' />Houses</li>
                                            <li val='8'><input type='checkbox' class='ptype_1' />Flats</li>
                                            <li val='21'><input type='checkbox' class='ptype_1' />Upper Portions</li>
                                            <li val='22'><input type='checkbox' class='ptype_1' />Lower Portions</li>
                                            <li val='20'><input type='checkbox' class='ptype_1' />Farm Houses</li>
                                            <li val='24'><input type='checkbox' class='ptype_1' />Rooms</li>
                                            <li val='25'><input type='checkbox' class='ptype_1' />Penthouse</li>
                                            <div class='label2'> Plots </div>
                                            <div class='toggle'>Select: <a rel='nofollow'
                                                    onclick="toggle_type('ptype_2',1)">All</a> / <a rel='nofollow'
                                                    onclick="toggle_type('ptype_2',0)">None</a></div>
                                            <li val='12'><input type='checkbox' class='ptype_2' />Residential</li>
                                            <li val='11'><input type='checkbox' class='ptype_2' />Commercial</li>
                                            <li val='19'><input type='checkbox' class='ptype_2' />Agricultural Land</li>
                                            <li val='27'><input type='checkbox' class='ptype_2' />Industrial Land</li>
                                            <li val='23'><input type='checkbox' class='ptype_2' />Plot Files</li>
                                            <li val='26'><input type='checkbox' class='ptype_2' />Plot Forms</li>
                                            <div class='label2'> Commercial </div>
                                            <div class='toggle'>Select: <a rel='nofollow'
                                                    onclick="toggle_type('ptype_3',1)">All</a> / <a rel='nofollow'
                                                    onclick="toggle_type('ptype_3',0)">None</a></div>
                                            <li val='13'><input type='checkbox' class='ptype_3' />Offices</li>
                                            <li val='15'><input type='checkbox' class='ptype_3' />Shops</li>
                                            <li val='17'><input type='checkbox' class='ptype_3' />Warehouses</li>
                                            <li val='14'><input type='checkbox' class='ptype_3' />Factories</li>
                                            <li val='16'><input type='checkbox' class='ptype_3' />Buildings</li>
                                            <li val='18'><input type='checkbox' class='ptype_3' />Other</li>
                                        </ul>
                                        <div class='input_box'>
                                            <div class='ok_button' style='float: right; margin-top: 6px;'
                                                onclick='combo.close()'></div>
                                            <input type='hidden' id='ea_ptype_inputdata'
                                                value="default_caption:'Property Type',selected_caption:'@count@ Type(s) Selected',single_caption:1" />
                                        </div>
                                    </td>
                                    <td class='mr'></td>
                                </tr>
                                <tr>
                                    <td class='bl'></td>
                                    <td class='b'></td>
                                    <td class='br'></td>
                                </tr>
                            </table>
                        </div>
                    </span>
                </div>
                <div class="ea_row">
                    <span class="ea_row_left">Purpose: </span>
                    <span class="ea_purpose">
                        <span class="ea_holder"><input id="ea_sale" name="ea_purpose" type="radio" value="1"
                                checked='checked'"><label for=" ea_sale">For Sale</label></input></span>
                        <span class="ea_holder ea_spacer"><input id="ea_rent" name="ea_purpose" type="radio"
                                value="2"><label for="ea_rent">For Rent</label></input></span>
                    </span>
                </div>
                <div class="ea_row">
                    <span class="ea_row_left">Price: </span>
                    <span id="price_combo_sel" class="ea_alert_combo ea_row_right">
                        <div id='ea_price_combo' class='combo '>
                            <div onmousedown="open_combo('ea_price')" class='combo_title' style='width:170px'>
                                <div style='width:142px' class='text' id='ea_price_title'>Price</div>
                                <div class='img'></div>
                                <input name='ea_price' id='ea_price' ctype='custom' type='hidden' value=''
                                    dcaption='Price' />

                            </div>
                            <table id='ea_price_combo_body' class='combo_body' style='display: none;width: 259px;'>
                                <tr style='height: 27px;' onmousedown='combo.close()'>
                                    <td class='tl'></td>
                                    <td class='t'><label class='cap_tion' style='width:224px'>Please select</label><i></i>
                                    </td>
                                    <td class='tr'></td>
                                </tr>
                                <tr>
                                    <td class='ml'></td>
                                    <td class='combo_data' valign='top' style='width:239px;'>
                                        <ul class='options custom' id='ea_price_combo_items' style='width: 239px;'>
                                            <li val='0'>Any Price</li>
                                            <li val='200000'>Under 200,000</li>
                                            <li val='200000_500000'>200,000 to 500,000</li>
                                            <li val='500000_750000'>500,000 to 750,000</li>
                                            <li val='750000_1000000'>750,000 to 1,000,000</li>
                                            <li val='1000000_2000000'>1,000,000 to 2,000,000</li>
                                            <li val='2000000_5000000'>2,000,000 to 5,000,000</li>
                                            <li val='5000000'>over 5,000,000</li>
                                        </ul>
                                        <div class='input_box'>
                                            <div class='round_text2' style='width: 30%;'>
                                                <div><input onfocus="price_combo_inputEvent('focus',this,event)"
                                                        onblur="price_combo_inputEvent('blur',this,event)"
                                                        onkeyup="price_combo_inputEvent('keyup',this,event)"
                                                        id='ea_price_input1' autocomplete='off' value='' /></div>
                                            </div>
                                            <label class='to_label'></label>
                                            <div class='round_text2' style='width: 30%;'>
                                                <div><input onfocus="price_combo_inputEvent('focus',this,event)"
                                                        onblur="price_combo_inputEvent('blur',this,event)"
                                                        onkeyup="price_combo_inputEvent('keyup',this,event)"
                                                        id='ea_price_input2' autocomplete='off' value='' /></div>
                                            </div>
                                            <div id='ea_price_okbutton' class='ok_button' onclick="add_option()"></div>
                                            <input type='hidden' id='ea_price_inputdata'
                                                value="range : '1000_1000000000000_Price should be in Thousands'" />
                                        </div>
                                    </td>
                                    <td class='mr'></td>
                                </tr>
                                <tr>
                                    <td class='bl'></td>
                                    <td class='b'></td>
                                    <td class='br'></td>
                                </tr>
                            </table>
                        </div>
                    </span>
                </div>
                <div class="ea_row">
                    <span class="ea_row_left">Beds: </span>
                    <span class="ea_alert_combo ea_row_right">
                        <div id='ea_beds_combo' class='combo '>
                            <div onmousedown="open_combo('ea_beds')" class='combo_title' style='width:170px'>
                                <div style='width:142px' class='text' id='ea_beds_title'>Beds</div>
                                <div class='img'></div>
                                <input name='ea_beds' id='ea_beds' ctype='custom' type='hidden' value='' dcaption='Beds' />

                            </div>
                            <table id='ea_beds_combo_body' class='combo_body' style='display: none;width: 259px;'>
                                <tr style='height: 27px;' onmousedown='combo.close()'>
                                    <td class='tl'></td>
                                    <td class='t'><label class='cap_tion' style='width:224px'>Please select</label><i></i>
                                    </td>
                                    <td class='tr'></td>
                                </tr>
                                <tr>
                                    <td class='ml'></td>
                                    <td class='combo_data' valign='top' style='width:239px;'>
                                        <ul class='options custom' id='ea_beds_combo_items' style='width: 239px;'>
                                            <li val='0'>Any Beds</li>
                                            <li val='-1'>Studio</li>
                                            <li val='1'>1</li>
                                            <li val='2'>2</li>
                                            <li val='3'>3</li>
                                            <li val='4'>4</li>
                                        </ul>
                                        <div class='input_box'>
                                            <div class='round_text2' style='width: 30%;'>
                                                <div><input onfocus="combo.inpEvent('focus',this,event)"
                                                        onblur="combo.inpEvent('blur',this,event)"
                                                        onkeyup="combo.inpEvent('keyup',this,event)" id='ea_beds_input1'
                                                        autocomplete='off' value='' /></div>
                                            </div>
                                            <label class='to_label'></label>
                                            <div class='round_text2' style='width: 30%;'>
                                                <div><input onfocus="combo.inpEvent('focus',this,event)"
                                                        onblur="combo.inpEvent('blur',this,event)"
                                                        onkeyup="combo.inpEvent('keyup',this,event)" id='ea_beds_input2'
                                                        autocomplete='off' value='' /></div>
                                            </div>
                                            <div id='ea_beds_okbutton' class='ok_button' onclick="add_option()"></div>
                                            <input type='hidden' id='ea_beds_inputdata'
                                                value="range : '1_99_Please Enter Correct Beds range'" />
                                        </div>
                                    </td>
                                    <td class='mr'></td>
                                </tr>
                                <tr>
                                    <td class='bl'></td>
                                    <td class='b'></td>
                                    <td class='br'></td>
                                </tr>
                            </table>
                        </div>
                    </span>
                </div>
                <hr size="4" class="postlistingProperty_separator" style="margin-top: 25px;">
                <label class="newlistingdiv_innerheading">Location Preferences: </label>
                <div class="ea_row">

                    <span class="ea_row_left">Location: </span>
                    <span class="ea_alert_combo ea_row_right">
                        <span id="ea_loc_selection" class="search_catItem" style="display:none;"></span>
                        <div class='loc_box round' style='float:left;width:170px' id='ea_cat_id_box'
                            onclick='focus_category_box(this)'>
                            <div class='t'>
                                <div></div>
                            </div>
                            <div class='m single' style=''>
                                <input container_id='ea_loc_selection' value='Enter Location Here' id='ea_cat_id_input'
                                    class='categoryfilter' style='display:block' ajax_get='get_ajax_suggs'
                                    call_back='select_cat_item' dvalue='Enter Location Here,Enter more locations here'
                                    multi='1' divtitle='Please select a location below' />
                            </div>
                            <div class='b'>
                                <div></div>
                            </div>
                            <input type='hidden' name='ea_cat_id' id='ea_cat_id' value='' />
                        </div> <span id="loading_sign" style="display:none;">
                            <image src="https://profolio.zameen.com/images/common/loading.gif" />
                        </span>
                    </span>


                </div>
                <hr size="4" class="postlistingProperty_separator" style="margin-top: 25px;">
                <label class="newlistingdiv_innerheading">Other Specifications: </label>
                <div class="ea_row">
                    <span class="ea_row_left">Keyword: </span>
                    <span class="ea_alert_combo ea_row_right">
                        <div class='round_text2'>
                            <div>
                                <input type='text' name='ea_keyword' id='ea_keyword' value='' style='width:159px;' />
                            </div>
                        </div>
                    </span>
                </div>


                <div class="ea_row">
                    <span class="ea_row_left">Covered Area: </span>
                    <span class="ea_alert_combo ea_row_right">
                        <div id='ea_area_combo' class='combo '>
                            <div onmousedown="open_combo('ea_area')" class='combo_title' style='width:170px'>
                                <div style='width:142px' class='text' id='ea_area_title'>Area</div>
                                <div class='img'></div>
                                <input name='ea_area' id='ea_area' ctype='adv_area' type='hidden' value=''
                                    dcaption='Area' />

                            </div>
                            <table id='ea_area_combo_body' class='combo_body' style='display: none;width: 330px;'>
                                <tr style='height: 27px;' onmousedown='combo.close()'>
                                    <td class='tl'></td>
                                    <td class='t'><label class='cap_tion' style='width:295px'>Please select</label><i></i>
                                    </td>
                                    <td class='tr'></td>
                                </tr>
                                <tr>
                                    <td class='ml'></td>
                                    <td class='combo_data' valign='top' style='width:310px;'>
                                        <ul class='options adv_area' id='ea_area_combo_items' style='width: 310px;'>
                                            <li val='0'>Any Covered Area</li>
                                            <li val='1'>Any Covered Area</li>
                                            <li val='2'>Below 1 Marla</li>
                                            <li val='225_1125'>1 to 5 Marla</li>
                                            <li val='1125_2250'>5 to 10 Marla</li>
                                            <li val='2250_3375'>10 to 15 Marla</li>
                                            <li val='3375_4500'>15 to 20 Marla</li>
                                            <li val='4500_9000'>1 to 2 Kanal</li>
                                            <li val='9000_13500'>2 to 3 Kanal</li>
                                            <li val='13500_18000'>3 to 4 Kanal</li>
                                            <li val='18000_22500'>4 to 5 Kanal</li>
                                            <li val='3'>over 5 Kanal</li>
                                        </ul>
                                        <div class='input_box'>
                                            <div class='round_text2' style='width: 20%;'>
                                                <div><input onfocus="combo.inpEvent('focus',this,event)"
                                                        onblur="combo.inpEvent('blur',this,event)"
                                                        onkeyup="combo.inpEvent('keyup',this,event)" id='ea_area_input1'
                                                        name='ea_area_input1' autocomplete='off' value='' /></div>
                                            </div>
                                            <label class='to_label'></label>
                                            <div class='round_text2' style='width: 20%;'>
                                                <div><input onfocus="combo.inpEvent('focus',this,event)"
                                                        onblur="combo.inpEvent('blur',this,event)"
                                                        onkeyup="combo.inpEvent('keyup',this,event)" id='ea_area_input2'
                                                        name='ea_area_input2' autocomplete='off' value='' /></div>
                                            </div>
                                            <div class='adv_unit_combo1'>
                                                <div id='ea_area_unit_combo' class='combo '>
                                                    <div onmousedown="open_combo('ea_area_unit')" class='combo_title'
                                                        style='width:70px'>
                                                        <div style='width:42px' class='text' id='ea_area_unit_title'>Marla
                                                        </div>
                                                        <div class='img'></div>
                                                        <input name='ea_area_unit' id='ea_area_unit' ctype='single'
                                                            type='hidden' value='Marla' parent="ea_area"
                                                            class="nochange" dcaption='' />

                                                    </div>
                                                    <table id='ea_area_unit_combo_body' class='combo_body'
                                                        style='display: none;width: 140px;'>
                                                        <tr style='height: 27px;' onmousedown='combo.close()'>
                                                            <td class='tl'></td>
                                                            <td class='t'><label class='cap_tion' style='width:105px'>Please
                                                                    select</label><i></i></td>
                                                            <td class='tr'></td>
                                                        </tr>
                                                        <tr>
                                                            <td class='ml'></td>
                                                            <td class='combo_data' valign='top' style='width:120px;'>
                                                                <ul class='options single' id='ea_area_unit_combo_items'
                                                                    style='width: 120px;'>
                                                                    <li val='Marla'>Marla</li>
                                                                    <li val='Kanal'>Kanal</li>
                                                                </ul>
                                                            </td>
                                                            <td class='mr'></td>
                                                        </tr>
                                                        <tr>
                                                            <td class='bl'></td>
                                                            <td class='b'></td>
                                                            <td class='br'></td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                            <div id='ea_area_okbutton' class='ok_button' onclick="add_option()"></div>
                                            <input type='hidden' id='ea_area_inputdata'
                                                value="range : '1_999000_Please Enter Correct Area range'" />
                                            <input type='hidden' id='ea_area_custom' name='ea_area_custom' value='' />
                                        </div>
                                        <div style='padding:5px 3px;overflow: hidden;'>
                                            <div class='change_unit_label'></div>
                                            <div id='ea_area_conv_unit_combo' class='combo '>
                                                <div onmousedown="open_combo('ea_area_conv_unit')" class='combo_title'
                                                    style='width:110px'>
                                                    <div style='width:82px' class='text' id='ea_area_conv_unit_title'>Marla
                                                    </div>
                                                    <div class='img'></div>
                                                    <input name='ea_area_conv_unit' id='ea_area_conv_unit' ctype='single'
                                                        type='hidden' value='3' parent="ea_area"
                                                        class="advance_area_unit nochange" dcaption='' />

                                                </div>
                                                <table id='ea_area_conv_unit_combo_body' class='combo_body'
                                                    style='display: none;width: 140px;'>
                                                    <tr style='height: 27px;' onmousedown='combo.close()'>
                                                        <td class='tl'></td>
                                                        <td class='t'><label class='cap_tion' style='width:105px'>Please
                                                                select</label><i></i></td>
                                                        <td class='tr'></td>
                                                    </tr>
                                                    <tr>
                                                        <td class='ml'></td>
                                                        <td class='combo_data' valign='top' style='width:120px;'>
                                                            <ul class='options single' id='ea_area_conv_unit_combo_items'
                                                                style='width: 120px;'>
                                                                <li val='0'>Any</li>
                                                                <li val='0'>Square Feet</li>
                                                                <li val='1'>Square Yards</li>
                                                                <li val='2'>Square Meters</li>
                                                                <li val='3'>Marla</li>
                                                            </ul>
                                                        </td>
                                                        <td class='mr'></td>
                                                    </tr>
                                                    <tr>
                                                        <td class='bl'></td>
                                                        <td class='b'></td>
                                                        <td class='br'></td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <div id='hidden_options_0' style='display:none'>
                                                <li val='0'>Any Covered Area</li>
                                                <li val='225'>Below 225 Sq Ft</li>
                                                <li val='225_1125'>225 to 1125 Sq Ft</li>
                                                <li val='1125_2250'>1125 to 2250 Sq Ft</li>
                                                <li val='2250_3375'>2250 to 3375 Sq Ft</li>
                                                <li val='3375_4500'>3375 to 4500 Sq Ft</li>
                                                <li val='4500_9000'>4500 to 9000 Sq Ft</li>
                                                <li val='9000_13500'>9000 to 13500 Sq Ft</li>
                                                <li val='13500_18000'>13500 to 18000 Sq Ft</li>
                                                <li val='18000_22500'>18000 to 22500 Sq Ft</li>
                                                <li val='22500'>over 22500 Sq Ft</li>
                                            </div>
                                            <div id='hidden_options_1' style='display:none'>
                                                <li val='0'>Any Covered Area</li>
                                                <li val='225'>Below 25 Sq Yd</li>
                                                <li val='225_1125'>25 to 125 Sq Yd</li>
                                                <li val='1125_2250'>125 to 250 Sq Yd</li>
                                                <li val='2250_3375'>250 to 375 Sq Yd</li>
                                                <li val='3375_4500'>375 to 500 Sq Yd</li>
                                                <li val='4500_9000'>500 to 1000 Sq Yd</li>
                                                <li val='9000_13500'>1000 to 1500 Sq Yd</li>
                                                <li val='13500_18000'>1500 to 2000 Sq Yd</li>
                                                <li val='18000_22500'>2000 to 2500 Sq Yd</li>
                                                <li val='22500'>over 2500 Sq Yd</li>
                                            </div>
                                            <div id='hidden_options_2' style='display:none'>
                                                <li val='0'>Any Covered Area</li>
                                                <li val='225'>Below 21 Sq M</li>
                                                <li val='225_1125'>21 to 105 Sq M</li>
                                                <li val='1125_2250'>105 to 209 Sq M</li>
                                                <li val='2250_3375'>209 to 314 Sq M</li>
                                                <li val='3375_4500'>314 to 418 Sq M</li>
                                                <li val='4500_9000'>418 to 836 Sq M</li>
                                                <li val='9000_13500'>836 to 1254 Sq M</li>
                                                <li val='13500_18000'>1254 to 1672 Sq M</li>
                                                <li val='18000_22500'>1672 to 2090 Sq M</li>
                                                <li val='22500'>over 2090 Sq M</li>
                                            </div>
                                            <div id='hidden_options_3' style='display:none'>
                                                <li val='0'>Any Covered Area</li>
                                                <li val='225'>Below 1 Marla</li>
                                                <li val='225_1125'>1 to 5 Marla</li>
                                                <li val='1125_2250'>5 to 10 Marla</li>
                                                <li val='2250_3375'>10 to 15 Marla</li>
                                                <li val='3375_4500'>15 to 20 Marla</li>
                                                <li val='4500_9000'>1 to 2 Kanal</li>
                                                <li val='9000_13500'>2 to 3 Kanal</li>
                                                <li val='13500_18000'>3 to 4 Kanal</li>
                                                <li val='18000_22500'>4 to 5 Kanal</li>
                                                <li val='22500'>over 5 Kanal</li>
                                            </div>
                                        </div>
                                    </td>
                                    <td class='mr'></td>
                                </tr>
                                <tr>
                                    <td class='bl'></td>
                                    <td class='b'></td>
                                    <td class='br'></td>
                                </tr>
                            </table>
                        </div>
                    </span>
                </div>
                <div class="ea_row">
                    <span class="ea_row_left">Baths: </span>
                    <span class="ea_alert_combo ea_row_right">
                        <div id='ea_baths_combo' class='combo '>
                            <div onmousedown="open_combo('ea_baths')" class='combo_title' style='width:170px'>
                                <div style='width:142px' class='text' id='ea_baths_title'>Any<u>_</u>Baths</div>
                                <div class='img'></div>
                                <input name='ea_baths' id='ea_baths' ctype='custom' type='hidden' value='0'
                                    dcaption='Baths' />

                            </div>
                            <table id='ea_baths_combo_body' class='combo_body' style='display: none;width: 259px;'>
                                <tr style='height: 27px;' onmousedown='combo.close()'>
                                    <td class='tl'></td>
                                    <td class='t'><label class='cap_tion' style='width:224px'>Please select</label><i></i>
                                    </td>
                                    <td class='tr'></td>
                                </tr>
                                <tr>
                                    <td class='ml'></td>
                                    <td class='combo_data' valign='top' style='width:239px;'>
                                        <ul class='options custom' id='ea_baths_combo_items' style='width: 239px;'>
                                            <li val='0'>Any Baths</li>
                                            <li val='1'>1</li>
                                            <li val='2'>2</li>
                                            <li val='3'>3</li>
                                            <li val='4'>4</li>
                                        </ul>
                                        <div class='input_box'>
                                            <div class='round_text2' style='width: 30%;'>
                                                <div><input onfocus="combo.inpEvent('focus',this,event)"
                                                        onblur="combo.inpEvent('blur',this,event)"
                                                        onkeyup="combo.inpEvent('keyup',this,event)" id='ea_baths_input1'
                                                        autocomplete='off' value='' /></div>
                                            </div>
                                            <label class='to_label'></label>
                                            <div class='round_text2' style='width: 30%;'>
                                                <div><input onfocus="combo.inpEvent('focus',this,event)"
                                                        onblur="combo.inpEvent('blur',this,event)"
                                                        onkeyup="combo.inpEvent('keyup',this,event)" id='ea_baths_input2'
                                                        autocomplete='off' value='' /></div>
                                            </div>
                                            <div id='ea_baths_okbutton' class='ok_button' onclick="add_option()"></div>
                                            <input type='hidden' id='ea_baths_inputdata'
                                                value="range : '1_99_Please Enter Correct Baths range'" />
                                        </div>
                                    </td>
                                    <td class='mr'></td>
                                </tr>
                                <tr>
                                    <td class='bl'></td>
                                    <td class='b'></td>
                                    <td class='br'></td>
                                </tr>
                            </table>
                        </div>
                    </span>
                </div>
                <div class="ea_row">
                    <span class="ea_row_left">Estate Agent: </span>
                    <span class="ea_alert_combo ea_row_right">
                        <span id="ea_agent_selection" class="search_catItem" style="display:none;"></span>
                        <div class='loc_box round' style='float:left;width:170px' id='ea_agentid_box'
                            onclick='focus_category_box(this)'>
                            <div class='t'>
                                <div></div>
                            </div>
                            <div class='m single' style=''>
                                <input container_id='ea_agent_selection' value='Enter Agents Here' id='ea_agentid_input'
                                    class='categoryfilter' style='display:block' ajax_get='get_ajax_agent_suggs'
                                    call_back='select_cat_item' dvalue='Enter Agents Here,Enter More Agents Here' multi='1'
                                    divtitle='Select Agent Below' />
                            </div>
                            <div class='b'>
                                <div></div>
                            </div>
                            <input type='hidden' name='ea_agentid' id='ea_agentid' value='' />
                        </div>
                    </span>
                </div>
                <div class="ea_row">
                    <span class="ea_row_left">Finance Available: </span>
                    <span class="ea_alert_combo ea_row_right">
                        <div id='ea_finance_combo' class='combo '>
                            <div onmousedown="open_combo('ea_finance')" class='combo_title' style='width:170px'>
                                <div style='width:142px' class='text' id='ea_finance_title'>Finance<u>_</u>Available</div>
                                <div class='img'></div>
                                <input name='ea_finance' id='ea_finance' ctype='single' type='hidden' value=''
                                    dcaption='Finance Available' />

                            </div>
                            <table id='ea_finance_combo_body' class='combo_body' style='display: none;width: 250px;'>
                                <tr style='height: 27px;' onmousedown='combo.close()'>
                                    <td class='tl'></td>
                                    <td class='t'><label class='cap_tion' style='width:215px'>Please select</label><i></i>
                                    </td>
                                    <td class='tr'></td>
                                </tr>
                                <tr>
                                    <td class='ml'></td>
                                    <td class='combo_data' valign='top' style='width:230px;'>
                                        <ul class='options single' id='ea_finance_combo_items' style='width: 230px;'>
                                            <li val='0'>Any</li>
                                            <li val='yes'>Yes</li>
                                            <li val='no'>No</li>
                                            <li val='Not Specified'>Not Specified</li>
                                        </ul>
                                    </td>
                                    <td class='mr'></td>
                                </tr>
                                <tr>
                                    <td class='bl'></td>
                                    <td class='b'></td>
                                    <td class='br'></td>
                                </tr>
                            </table>
                        </div>
                    </span>
                </div>
                <div class="ea_row">
                    <span class="ea_row_left">Occupancy Status: </span>
                    <span class="ea_alert_combo ea_row_right">
                        <div id='ea_occupancy_combo' class='combo '>
                            <div onmousedown="open_combo('ea_occupancy')" class='combo_title' style='width:170px'>
                                <div style='width:142px' class='text' id='ea_occupancy_title'>Occupancy<u>_</u>Status</div>
                                <div class='img'></div>
                                <input name='ea_occupancy' id='ea_occupancy' ctype='single' type='hidden' value=''
                                    dcaption='Occupancy Status' />

                            </div>
                            <table id='ea_occupancy_combo_body' class='combo_body' style='display: none;width: 259px;'>
                                <tr style='height: 27px;' onmousedown='combo.close()'>
                                    <td class='tl'></td>
                                    <td class='t'><label class='cap_tion' style='width:224px'>Please select</label><i></i>
                                    </td>
                                    <td class='tr'></td>
                                </tr>
                                <tr>
                                    <td class='ml'></td>
                                    <td class='combo_data' valign='top' style='width:239px;'>
                                        <ul class='options single' id='ea_occupancy_combo_items' style='width: 239px;'>
                                            <li val='0'>Any</li>
                                            <li val='/'>Occupied</li>
                                            <li val='vacant'>Vacant</li>
                                            <li val='Not Specified'>Not Specified</li>
                                        </ul>
                                    </td>
                                    <td class='mr'></td>
                                </tr>
                                <tr>
                                    <td class='bl'></td>
                                    <td class='b'></td>
                                    <td class='br'></td>
                                </tr>
                            </table>
                        </div>
                    </span>
                </div>
                <div class="ea_row">
                    <span class="ea_row_left">Ownership Status: </span>
                    <span class="ea_alert_combo ea_row_right">
                        <div id='ea_owner_combo' class='combo '>
                            <div onmousedown="open_combo('ea_owner')" class='combo_title' style='width:170px'>
                                <div style='width:142px' class='text' id='ea_owner_title'>Ownership<u>_</u>Status</div>
                                <div class='img'></div>
                                <input name='ea_owner' id='ea_owner' ctype='single' type='hidden' value=''
                                    dcaption='Ownership Status' />

                            </div>
                            <table id='ea_owner_combo_body' class='combo_body' style='display: none;width: 250px;'>
                                <tr style='height: 27px;' onmousedown='combo.close()'>
                                    <td class='tl'></td>
                                    <td class='t'><label class='cap_tion' style='width:215px'>Please select</label><i></i>
                                    </td>
                                    <td class='tr'></td>
                                </tr>
                                <tr>
                                    <td class='ml'></td>
                                    <td class='combo_data' valign='top' style='width:230px;'>
                                        <ul class='options single' id='ea_owner_combo_items' style='width: 230px;'>
                                            <li val='0'>Any</li>
                                            <li val='Freehold'>Freehold</li>
                                            <li val='Leasehold'>Leasehold</li>
                                            <li val='Not Specified'>Not Specified</li>
                                        </ul>
                                    </td>
                                    <td class='mr'></td>
                                </tr>
                                <tr>
                                    <td class='bl'></td>
                                    <td class='b'></td>
                                    <td class='br'></td>
                                </tr>
                            </table>
                        </div>
                    </span>
                </div>
                <div class="ea_row" style="text-align:center;margin-top: 20px;">
                    <input type="submit" value="" class="ea_add_btn" name="subscribe_alert">
                </div>
            </div>
            <input type="hidden" value="Profolio - Add Alert" name="ea_source" />
        </form>

        <span id="price_buy" class="ea_alert_combo ea_row_right" style="display:none;">
            <div id='ea_price_combo' class='combo '>
                <div onmousedown="open_combo('ea_price')" class='combo_title' style='width:170px'>
                    <div style='width:142px' class='text' id='ea_price_title'>Price</div>
                    <div class='img'></div>
                    <input name='ea_price' id='ea_price' ctype='custom' type='hidden' value='' dcaption='Price' />

                </div>
                <table id='ea_price_combo_body' class='combo_body' style='display: none;width: 259px;'>
                    <tr style='height: 27px;' onmousedown='combo.close()'>
                        <td class='tl'></td>
                        <td class='t'><label class='cap_tion' style='width:224px'>Please select</label><i></i></td>
                        <td class='tr'></td>
                    </tr>
                    <tr>
                        <td class='ml'></td>
                        <td class='combo_data' valign='top' style='width:239px;'>
                            <ul class='options custom' id='ea_price_combo_items' style='width: 239px;'>
                                <li val='0'>Any Price</li>
                                <li val='200000'>Under 200,000</li>
                                <li val='200000_500000'>200,000 to 500,000</li>
                                <li val='500000_750000'>500,000 to 750,000</li>
                                <li val='750000_1000000'>750,000 to 1,000,000</li>
                                <li val='1000000_2000000'>1,000,000 to 2,000,000</li>
                                <li val='2000000_5000000'>2,000,000 to 5,000,000</li>
                                <li val='5000000'>over 5,000,000</li>
                            </ul>
                            <div class='input_box'>
                                <div class='round_text2' style='width: 30%;'>
                                    <div><input onfocus="price_combo_inputEvent('focus',this,event)"
                                            onblur="price_combo_inputEvent('blur',this,event)"
                                            onkeyup="price_combo_inputEvent('keyup',this,event)" id='ea_price_input1'
                                            autocomplete='off' value='' /></div>
                                </div>
                                <label class='to_label'></label>
                                <div class='round_text2' style='width: 30%;'>
                                    <div><input onfocus="price_combo_inputEvent('focus',this,event)"
                                            onblur="price_combo_inputEvent('blur',this,event)"
                                            onkeyup="price_combo_inputEvent('keyup',this,event)" id='ea_price_input2'
                                            autocomplete='off' value='' /></div>
                                </div>
                                <div id='ea_price_okbutton' class='ok_button' onclick="add_option()"></div>
                                <input type='hidden' id='ea_price_inputdata'
                                    value="range : '1000_1000000000000_Price should be in Thousands'" />
                            </div>
                        </td>
                        <td class='mr'></td>
                    </tr>
                    <tr>
                        <td class='bl'></td>
                        <td class='b'></td>
                        <td class='br'></td>
                    </tr>
                </table>
            </div>
        </span>
        <span id="price_rent" class="ea_alert_combo ea_row_right" style="display:none;">
            <div id='ea_price_combo' class='combo '>
                <div onmousedown="open_combo('ea_price')" class='combo_title' style='width:170px'>
                    <div style='width:142px' class='text' id='ea_price_title'>Price</div>
                    <div class='img'></div>
                    <input name='ea_price' id='ea_price' ctype='custom' type='hidden' value='' dcaption='Price' />

                </div>
                <table id='ea_price_combo_body' class='combo_body' style='display: none;width: 259px;'>
                    <tr style='height: 27px;' onmousedown='combo.close()'>
                        <td class='tl'></td>
                        <td class='t'><label class='cap_tion' style='width:224px'>Please select</label><i></i></td>
                        <td class='tr'></td>
                    </tr>
                    <tr>
                        <td class='ml'></td>
                        <td class='combo_data' valign='top' style='width:239px;'>
                            <ul class='options custom' id='ea_price_combo_items' style='width: 239px;'>
                                <li val='0'>Any Price</li>
                                <li val='50000'>Under 50,000</li>
                                <li val='50000_100000'>50,000 to 100,000</li>
                                <li val='100000_150000'>100,000 to 150,000</li>
                                <li val='150000_200000'>150,000 to 200,000</li>
                                <li val='200000_300000'>200,000 to 300,000</li>
                                <li val='300000_500000'>300,000 to 500,000</li>
                                <li val='500000'>Over 500,000</li>
                            </ul>
                            <div class='input_box'>
                                <div class='round_text2' style='width: 30%;'>
                                    <div><input onfocus="price_combo_inputEvent('focus',this,event)"
                                            onblur="price_combo_inputEvent('blur',this,event)"
                                            onkeyup="price_combo_inputEvent('keyup',this,event)" id='ea_price_input1'
                                            autocomplete='off' value='' /></div>
                                </div>
                                <label class='to_label'></label>
                                <div class='round_text2' style='width: 30%;'>
                                    <div><input onfocus="price_combo_inputEvent('focus',this,event)"
                                            onblur="price_combo_inputEvent('blur',this,event)"
                                            onkeyup="price_combo_inputEvent('keyup',this,event)" id='ea_price_input2'
                                            autocomplete='off' value='' /></div>
                                </div>
                                <div id='ea_price_okbutton' class='ok_button' onclick="add_option()"></div>
                                <input type='hidden' id='ea_price_inputdata'
                                    value="range : '1000_1000000000000_Price should be in Thousands'" />
                            </div>
                        </td>
                        <td class='mr'></td>
                    </tr>
                    <tr>
                        <td class='bl'></td>
                        <td class='b'></td>
                        <td class='br'></td>
                    </tr>
                </table>
            </div>
        </span>
        <span id="price_wanted" class="ea_alert_combo ea_row_right" style="display:none;">
            <div id='ea_price_combo' class='combo '>
                <div onmousedown="open_combo('ea_price')" class='combo_title' style='width:170px'>
                    <div style='width:142px' class='text' id='ea_price_title'>Price</div>
                    <div class='img'></div>
                    <input name='ea_price' id='ea_price' ctype='custom' type='hidden' value='' dcaption='Price' />

                </div>
                <table id='ea_price_combo_body' class='combo_body' style='display: none;width: 259px;'>
                    <tr style='height: 27px;' onmousedown='combo.close()'>
                        <td class='tl'></td>
                        <td class='t'><label class='cap_tion' style='width:224px'>Please select</label><i></i></td>
                        <td class='tr'></td>
                    </tr>
                    <tr>
                        <td class='ml'></td>
                        <td class='combo_data' valign='top' style='width:239px;'>
                            <ul class='options custom' id='ea_price_combo_items' style='width: 239px;'>
                                <li val='0'>Any Price</li>
                                <li val='200000'>Under 200,000</li>
                                <li val='200000_500000'>200,000 to 500,000</li>
                                <li val='500000_750000'>500,000 to 750,000</li>
                                <li val='750000_1000000'>750,000 to 1,000,000</li>
                                <li val='1000000_2000000'>1,000,000 to 2,000,000</li>
                                <li val='2000000_5000000'>2,000,000 to 5,000,000</li>
                                <li val='5000000'>over 5,000,000</li>
                            </ul>
                            <div class='input_box'>
                                <div class='round_text2' style='width: 30%;'>
                                    <div><input onfocus="price_combo_inputEvent('focus',this,event)"
                                            onblur="price_combo_inputEvent('blur',this,event)"
                                            onkeyup="price_combo_inputEvent('keyup',this,event)" id='ea_price_input1'
                                            autocomplete='off' value='' /></div>
                                </div>
                                <label class='to_label'></label>
                                <div class='round_text2' style='width: 30%;'>
                                    <div><input onfocus="price_combo_inputEvent('focus',this,event)"
                                            onblur="price_combo_inputEvent('blur',this,event)"
                                            onkeyup="price_combo_inputEvent('keyup',this,event)" id='ea_price_input2'
                                            autocomplete='off' value='' /></div>
                                </div>
                                <div id='ea_price_okbutton' class='ok_button' onclick="add_option()"></div>
                                <input type='hidden' id='ea_price_inputdata'
                                    value="range : '1000_1000000000000_Price should be in Thousands'" />
                            </div>
                        </td>
                        <td class='mr'></td>
                    </tr>
                    <tr>
                        <td class='bl'></td>
                        <td class='b'></td>
                        <td class='br'></td>
                    </tr>
                </table>
            </div>
        </span>


    </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function() {
                $(".click").click(function() {
                    $(".combo_body").RemoveClass('hide').addClass('show');
                    $(".combo_body").toggle();
                });
            });
    </script>
@endsection
