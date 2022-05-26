<meta name="description" content="{{ $meta->meta_description }}">
<meta name="meta_keywords" content="{{ $meta->meta_keywords }}">
<title>{{ $meta->meta_title }}</title>
<link rel="shortcut icon" href="{{ asset('userside') }}/favicon.ico">
<link rel="stylesheet" href="{{ asset('userside') }}/profolio/css/plugins1_25.css?v=5" type="text/css" />
{{-- jqueryy files --}}
@yield('css')

<script type="text/javascript" src="{{ asset('userside') }}/javascript/jquery-1.12.4.js"></script>
<script type='text/javascript' src='{{ asset('userside') }}/javascript/m_jquery-ui-1_2.js'></script>
<script src="{{ asset('userside') }}/javascript/jquery/jquery_new3_11.js" type="text/javascript"></script>
<script src="{{ asset('userside') }}/javascript/jquery/jquery.cluetip.js" type="text/javascript"></script>
{{-- end --}}
<link rel="stylesheet" href="{{ asset('userside') }}/css/profolio4_28.css?v=12" type="text/css" />
<link rel="stylesheet" href="{{ asset('userside') }}/css/add_property_single1_14.css?v=28" type="text/css">
<link rel="stylesheet" href="{{ asset('userside') }}/css/mybayut/campaign_css.css" type="text/css">
<link rel="stylesheet" href="{{ asset('userside') }}/css/featuredcontentglider.css" type="text/css">
<script type="text/javascript" src="{{ asset('userside') }}/javascript/featuredcontentglider.js"></script>
<link rel="stylesheet" href="{{ asset('userside') }}/css/jquery_ui_1_12_1.css" type="text/css">
<link rel="stylesheet" href="{{ asset('userside') }}/css/jquery-ui-1_5.css" type="text/css">
<link rel="stylesheet" href="{{ asset('userside') }}/css/datePicker.css" type="text/css" />
<link rel="stylesheet" href="{{ asset('userside') }}/lib/combo/combo1_6.css?v=1" type="text/css" />
<link rel="stylesheet" href="{{ asset('userside') }}/css/mapbox-gl.css" type="text/css">
<link rel="stylesheet" href="{{ asset('userside') }}/css/mybayut/inventory_css1_3.css">
<script src="{{ URL::asset('assets/js/jquery-3.5.1.min.js') }}"></script>
<link rel="stylesheet" href="//cdn.datatables.net/1.12.0/css/jquery.dataTables.min.css">

<!-- jquery-ui -->
<link rel="stylesheet" href="{{ asset('userside') }}/css/add_property_single1_14.css?v=28" type="text/css">
<link rel="stylesheet" href="{{ asset('userside') }}/css/intlTelInput_smp.css" type="text/css">
<link rel="stylesheet" href="{{ asset('userside') }}/css/intlTelInput_smp_1_2.css" type="text/css">

<link rel="stylesheet" href="{{ asset('userside') }}/css/listing_css1_11.css" type="text/css">
<link rel="stylesheet" href="{{ asset('userside') }}/css/profolio_v2.css?v=38" type="text/css">
<link rel="stylesheet" type="text/css" href="{{ asset('userside') }}/css/jtool_datepicker_css1_1.css" />
<link href="{{ URL::asset('assets/css/toastr.min.css') }}" rel="stylesheet" />
<!-- Jquery js-->
<script src="{{ URL::asset('assets/js/toastr.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('userside') }}/javascript/combo1_19.js"></script>
<script type="text/javascript" src="{{ asset('userside') }}/lib/combo/combo_tm1_19.js"></script>
<link rel="stylesheet" href="{{ asset('userside') }}/css/mybayut/mylisting_css.css" type="text/css">
<link rel="stylesheet" href="{{ asset('userside') }}/css/mybayut/newlisting_css1_3.css" type="text/css">
<link href="{{ URL::asset('assets/css/icons.css') }}" rel="stylesheet" />
<link rel="stylesheet" href="{{ asset('userside') }}/profolio/css/profolio_reports_css1_8.css?v=2" type="text/css">
<style>
    .textcolor {
        font-size: 11px;
        background: blue;
        padding: 2px;
        color: white;
        border-radius: 5px;
        border: 1px solid blue;
    }
    .textcoloractive{
        color: white;
        background-color: #15b712;
        border-radius: 5px;
        padding: 2px;
        font-size: 11px;
        border: 1px solid #15b712;
    }
    .dataTables_length {
        padding: 8px 0 8px 15px !important;
    }

    #content {
        font-size: 11px;
        color: #333333;
    }

    .dataTables_filter {
        padding: 8px 0 8px 15px !important;
    }

    .dataTables_filter input {
        border: 1px solid #aaa;
        border-radius: 3px;
        background-color: transparent;
        margin-left: 3px;
        margin-right: 3px;
    }

    .dataTables_wrapper .dataTables_info {
        clear: both;
        float: left;
        padding-top: 0.6em;
        margin-left: 5px;
    }

    .listing_table.list-table-left tr>td {
        padding: 0px;
        height: 55px;
        border-top: 0px;
        vertical-align: middle;
    }

    .dataTables_paginate.paging_simple_numbers {
        padding-bottom: 0.25em;
    }

    .dataTables_wrapper .dataTables_paginate .paginate_button {
        box-sizing: border-box;
        display: inline-block;
        min-width: 1.5em;
        padding: 0.1em 0.6em;
        margin-left: 2px;
        text-align: center;
        text-decoration: none !important;
        cursor: pointer;
        color: #333 !important;
        border: 1px solid transparent;
        border-radius: 2px;
        border-radius: 20px;
    }
    .a_pending_show{
        display: none;
    }
    .active{
        display: block;
    }
    .error{
    color: red
    }
    #editusertext div {
    float: left;
    width: 100%;
    margin-top: 6px;
}
</style>
