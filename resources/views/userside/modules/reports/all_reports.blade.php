@extends('userside.layout')
@section('main')
@include('userside.layouts.reportsidebar')
    <div id="rightcolumn" style="width:79% " class="rightcolumn_div post_story_margin">

        <div style="height:30px;margin-bottom:10px; display: block;" id="bc_container">
            <script>
                $("#rightcolumn").attr("style", "");
            </script>
            <form method="post" style="float:right;" id="dr_form">
                <div class="rpt_date_range_box">
                    <div style="" class="dr_text">Date Range:</div>
                    <div style="width: 100px;float:left;" class="cm_combo">
                        <div style="width:73px;" class="cm_combo_txt" id="select_msg_combo_text">
                            <input name="date_start" style="width:70px;" id="dateStart" class="date_pick date_f"
                                value="" />
                        </div>
                        <div class="cm_combo_img"></div>
                    </div>
                    <div style="" class="dr_dash">-</div>
                    <div style="width: 100px;float:left;" class="cm_combo">
                        <div style="width:73px;" class="cm_combo_txt" id="select_msg_combo_text">
                            <input name="date_end" style="width:70px;" id="dateEnd" class="date_pick date_f"
                                value="" />
                        </div>
                        <div class="cm_combo_img"></div>
                    </div>
                    <div class="dr_goto">&nbsp;</div>
                    <input type="submit" id="GoButton" value="Go" class="dr_goto" style="display:none;" />
                    <input type="hidden" name="sl_aguser" value="">
                </div>
            </form>
            <span class="worddashbord" style="display:inline;"> <a href="index.php?tabs=10&section=reports">Reports</a>
                &raquo; All Reports </span>
        </div>


        <style>
            #statistics_graph {
                margin-top: 10px;
            }

        </style>

        <div class="rpt_page">

            <h3 id="report_head">
                Your performance in last 31 days
            </h3>


            <div class="sub_head">Current Number of Listings</div>
            <div class="traffic_summary">
                <div class="stat_row"><span>1</span>For Sale:</div>
                <div class="stat_row"><span>0</span>To Rent:</div>
                <div class="stat_row"><span>1</span>Total:</div>
                <div class="stat_row">&nbsp;</div>
            </div>


            <b>Number of Listings by Location</b>
            <div id="statistics_graph" style='clear:none !important;'>
                <div id="statdiv_heading" style="height:180px;overflow:hidden;">
                    <div align="center">
                        <div id="chart_5">

                        </div>
                    </div>
                </div>
            </div>
            <div class="stat_row" style="clear:both;">&nbsp;</div>
        </div>


        <div class="rpt_page">
            <div class="sub_head">Traffic Report <span class="sb_head_days">(Last 31 Days)</span></div>
            <div class="traffic_summary">
                <div class="stat_row"><span>86</span>Property Views:</div>
                <div class="stat_row"><span>6</span>Property Visits:</div>
                <div class="stat_row"><span>6.98%</span>CTR:</div>
                <div class="stat_row">&nbsp;</div>
            </div>


            <b>Trafic by Location</b>
            <div id="statistics_graph" style='clear:none !important;'>
                <div id="statdiv_heading" style="height:180px;overflow:hidden;">
                    <div align="center">
                        <div id="chart_trafic">

                        </div>
                    </div>
                </div>
            </div>
            <div class="stat_row">&nbsp;</div>
        </div>


        <div class="rpt_page">
            <div class="sub_head">Leads Report <span class="sb_head_days">(Last 31 Days)<span></div>
            <div class="traffic_summary">
                <div class="stat_row"><span>2</span>Phone Views:</div>
                <div class="stat_row"><span>0</span>Email Leads:</div>
                <div class="stat_row"><span>1</span>SMS Clicks:</div>
                <div class="stat_row"><span>3</span>Total Leads:</div>
                <div class="stat_row">&nbsp;</div>
            </div>

            <b>Leads by Location</b>
            <div id="statistics_graph" style='clear:none !important;'>
                <div id="statdiv_heading" style="height:180px;overflow:hidden;">
                    <div align="center">
                        <div id="chart_leads">

                        </div>
                    </div>
                </div>
            </div>
            <div class="stat_row">&nbsp;</div>


        </div>

        <div class="rpt_page">
            <div class="sub_head" style="display:none;">Leads Report <span class="sb_head_days">(Last 31 Days)<span>
            </div>
            <div class="stat_box stat_left" style="height:250px">
                <span class="sub_title">Phone Views by Country</span>
                <div id="chart_1">

                </div>
            </div>
            <div class="stat_box stat_right" style="height:250px">
                <span class="sub_title">Email Leads by Country</span>
                <div id="chart_2">
                    <div style="text-align:center;margin-top:100px;">Sorry, no leads received within your selected date
                        range.</div>
                </div>
            </div>
            <div class="stat_box stat_left" style="height:250px">
                <span class="sub_title">SMS Clicks by Country</span>
                <div id="chart_4">

                </div>
            </div>
            <div style="clear:both"></div>
        </div>

    </div>
    </div>
@endsection
