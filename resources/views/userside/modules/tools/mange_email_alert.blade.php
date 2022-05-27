@extends('userside.layout')
@section('main')
@include('userside.layouts.tools_sidebar')
<div id="rightcolumn" style="
width:79% " class="rightcolumn_div post_story_margin">

    <div style="height:30px;margin-bottom:10px; display: block;" id="bc_container">
        <span class="worddashbord" style="display:inline;"> <a href="index.php?tabs=6&section=favourites">Tools</a>
            &raquo; Manage Alerts </span>
    </div>
    <div class="box_title">
        <div><b>&nbsp;Manage Alerts&nbsp;</b></div>
    </div>
    <div class="box_body">
        <form action="http://192.168.1.13/bayut_new/index.php?body=results" method="post" name="alertForm">
            <div style="padding-bottom:8px;font-weight:bold;">
                Total Alerts : 1
            </div>
            <div class="titlebar ea_title">
                <span class="ea_desc" style="padding:2px 0;display:inline-block;width:89%;">Alerts
                    Description</span>
                <span style="padding:2px 0;display:inline-block;">Controls</span>
            </div>
            <div class="row ea_manage">
                <div class="ea_desc">Properties For Sale in 2 Locations <a class="ea_bg ea_delete"
                        href="Javacsript:void();" id="1986583" onmouseout="return nd();"
                        onmouseover="return overlib('Click to delete this alert.',CELLPAD, 5, 5,CAPTION,'Delete Alert');"
                        onclick="return overlib('<form name=frmDel method=post action=https://profolio.zameen.com/profolio/index.php?tabs=6&section=advance_email_alert&ea_id=1986583&del=1>Are you sure you want to delete this alert?<br/><br/><input type=submit name=subDel value=Delete class=button_class />   <input type=button name=btncancel value=Cancel class=button_class onclick=cClick(); /><br /><br /></form>', EXCLUSIVE,STICKY, CAPTION, 'Delete Alert', CLOSECLICK, WIDTH, 250,HEIGHT, 50, CLOSECOLOR, 'white', RIGHT, OFFSETY, -70);">&nbsp;</a>
                    <a class="ea_bg ea_disable"
                        href="https://profolio.zameen.com/profolio/index.php?tabs=6&section=advance_email_alert&ea_id=1986583&pause=1"
                        id="1986583" onmouseout="return nd();"
                        onmouseover="return overlib('Click to pause this alert.',CELLPAD, 5, 5,CAPTION,'Pause Alert');">&nbsp;</a>

                    <a class="ea_bg ea_edit"
                        href="https://profolio.zameen.com/profolio/index.php?tabs=6&section=advance_email_alert&subsection=edit_advance_alerts&ea_id=1986583"
                        id="1986583" onmouseout="return nd();"
                        onmouseover="return overlib('Click to edit this alert.',CELLPAD, 5, 5,CAPTION,'Edit Alert');">&nbsp;</a>
                </div>
                <div class="ea_price">Price: PKR 500000 to 750000; Area: 225 to 1125 Sq ft;Beds: 3; Baths: 3;
                    Finance Available: yes; Occupancy Status: vacant; Ownership Status: Freehold</div>
            </div>
    </div>

</div>
</div>
@endsection
