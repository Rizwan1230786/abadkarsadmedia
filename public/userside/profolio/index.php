<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-US"><head>
<title>Profolio: Property Management Software By Zameen.com</title>
<link rel="shortcut icon" href="https://profolio.zameen.com/favicon.ico">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"><script type="text/javascript">(window.NREUM||(NREUM={})).init={ajax:{deny_list:["bam.nr-data.net"]}};(window.NREUM||(NREUM={})).loader_config={licenseKey:"4d0861c972",applicationID:"1086318949"};window.NREUM||(NREUM={}),__nr_require=function(t,e,n){function r(n){if(!e[n]){var i=e[n]={exports:{}};t[n][0].call(i.exports,function(e){var i=t[n][1][e];return r(i||e)},i,i.exports)}return e[n].exports}if("function"==typeof __nr_require)return __nr_require;for(var i=0;i<n.length;i++)r(n[i]);return r}({1:[function(t,e,n){function r(){}function i(t,e,n,r){return function(){return s.recordSupportability("API/"+e+"/called"),o(t+e,[u.now()].concat(c(arguments)),n?null:this,r),n?void 0:this}}var o=t("handle"),a=t(9),c=t(10),f=t("ee").get("tracer"),u=t("loader"),s=t(4),d=NREUM;"undefined"==typeof window.newrelic&&(newrelic=d);var p=["setPageViewName","setCustomAttribute","setErrorHandler","finished","addToTrace","inlineHit","addRelease"],l="api-",v=l+"ixn-";a(p,function(t,e){d[e]=i(l,e,!0,"api")}),d.addPageAction=i(l,"addPageAction",!0),d.setCurrentRouteName=i(l,"routeName",!0),e.exports=newrelic,d.interaction=function(){return(new r).get()};var m=r.prototype={createTracer:function(t,e){var n={},r=this,i="function"==typeof e;return o(v+"tracer",[u.now(),t,n],r),function(){if(f.emit((i?"":"no-")+"fn-start",[u.now(),r,i],n),i)try{return e.apply(this,arguments)}catch(t){throw f.emit("fn-err",[arguments,this,t],n),t}finally{f.emit("fn-end",[u.now()],n)}}}};a("actionText,setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","),function(t,e){m[e]=i(v,e)}),newrelic.noticeError=function(t,e){"string"==typeof t&&(t=new Error(t)),s.recordSupportability("API/noticeError/called"),o("err",[t,u.now(),!1,e])}},{}],2:[function(t,e,n){function r(t){if(NREUM.init){for(var e=NREUM.init,n=t.split("."),r=0;r<n.length-1;r++)if(e=e[n[r]],"object"!=typeof e)return;return e=e[n[n.length-1]]}}e.exports={getConfiguration:r}},{}],3:[function(t,e,n){var r=!1;try{var i=Object.defineProperty({},"passive",{get:function(){r=!0}});window.addEventListener("testPassive",null,i),window.removeEventListener("testPassive",null,i)}catch(o){}e.exports=function(t){return r?{passive:!0,capture:!!t}:!!t}},{}],4:[function(t,e,n){function r(t,e){var n=[a,t,{name:t},e];return o("storeMetric",n,null,"api"),n}function i(t,e){var n=[c,t,{name:t},e];return o("storeEventMetrics",n,null,"api"),n}var o=t("handle"),a="sm",c="cm";e.exports={constants:{SUPPORTABILITY_METRIC:a,CUSTOM_METRIC:c},recordSupportability:r,recordCustom:i}},{}],5:[function(t,e,n){function r(){return c.exists&&performance.now?Math.round(performance.now()):(o=Math.max((new Date).getTime(),o))-a}function i(){return o}var o=(new Date).getTime(),a=o,c=t(11);e.exports=r,e.exports.offset=a,e.exports.getLastTimestamp=i},{}],6:[function(t,e,n){function r(t,e){var n=t.getEntries();n.forEach(function(t){"first-paint"===t.name?l("timing",["fp",Math.floor(t.startTime)]):"first-contentful-paint"===t.name&&l("timing",["fcp",Math.floor(t.startTime)])})}function i(t,e){var n=t.getEntries();if(n.length>0){var r=n[n.length-1];if(u&&u<r.startTime)return;var i=[r],o=a({});o&&i.push(o),l("lcp",i)}}function o(t){t.getEntries().forEach(function(t){t.hadRecentInput||l("cls",[t])})}function a(t){var e=navigator.connection||navigator.mozConnection||navigator.webkitConnection;if(e)return e.type&&(t["net-type"]=e.type),e.effectiveType&&(t["net-etype"]=e.effectiveType),e.rtt&&(t["net-rtt"]=e.rtt),e.downlink&&(t["net-dlink"]=e.downlink),t}function c(t){if(t instanceof y&&!w){var e=Math.round(t.timeStamp),n={type:t.type};a(n),e<=v.now()?n.fid=v.now()-e:e>v.offset&&e<=Date.now()?(e-=v.offset,n.fid=v.now()-e):e=v.now(),w=!0,l("timing",["fi",e,n])}}function f(t){"hidden"===t&&(u=v.now(),l("pageHide",[u]))}if(!("init"in NREUM&&"page_view_timing"in NREUM.init&&"enabled"in NREUM.init.page_view_timing&&NREUM.init.page_view_timing.enabled===!1)){var u,s,d,p,l=t("handle"),v=t("loader"),m=t(8),g=t(3),y=NREUM.o.EV;if("PerformanceObserver"in window&&"function"==typeof window.PerformanceObserver){s=new PerformanceObserver(r);try{s.observe({entryTypes:["paint"]})}catch(h){}d=new PerformanceObserver(i);try{d.observe({entryTypes:["largest-contentful-paint"]})}catch(h){}p=new PerformanceObserver(o);try{p.observe({type:"layout-shift",buffered:!0})}catch(h){}}if("addEventListener"in document){var w=!1,b=["click","keydown","mousedown","pointerdown","touchstart"];b.forEach(function(t){document.addEventListener(t,c,g(!1))})}m(f)}},{}],7:[function(t,e,n){function r(t,e){if(!i)return!1;if(t!==i)return!1;if(!e)return!0;if(!o)return!1;for(var n=o.split("."),r=e.split("."),a=0;a<r.length;a++)if(r[a]!==n[a])return!1;return!0}var i=null,o=null,a=/Version\/(\S+)\s+Safari/;if(navigator.userAgent){var c=navigator.userAgent,f=c.match(a);f&&c.indexOf("Chrome")===-1&&c.indexOf("Chromium")===-1&&(i="Safari",o=f[1])}e.exports={agent:i,version:o,match:r}},{}],8:[function(t,e,n){function r(t){function e(){t(c&&document[c]?document[c]:document[o]?"hidden":"visible")}"addEventListener"in document&&a&&document.addEventListener(a,e,i(!1))}var i=t(3);e.exports=r;var o,a,c;"undefined"!=typeof document.hidden?(o="hidden",a="visibilitychange",c="visibilityState"):"undefined"!=typeof document.msHidden?(o="msHidden",a="msvisibilitychange"):"undefined"!=typeof document.webkitHidden&&(o="webkitHidden",a="webkitvisibilitychange",c="webkitVisibilityState")},{}],9:[function(t,e,n){function r(t,e){var n=[],r="",o=0;for(r in t)i.call(t,r)&&(n[o]=e(r,t[r]),o+=1);return n}var i=Object.prototype.hasOwnProperty;e.exports=r},{}],10:[function(t,e,n){function r(t,e,n){e||(e=0),"undefined"==typeof n&&(n=t?t.length:0);for(var r=-1,i=n-e||0,o=Array(i<0?0:i);++r<i;)o[r]=t[e+r];return o}e.exports=r},{}],11:[function(t,e,n){e.exports={exists:"undefined"!=typeof window.performance&&window.performance.timing&&"undefined"!=typeof window.performance.timing.navigationStart}},{}],ee:[function(t,e,n){function r(){}function i(t){function e(t){return t&&t instanceof r?t:t?u(t,f,a):a()}function n(n,r,i,o,a){if(a!==!1&&(a=!0),!l.aborted||o){t&&a&&t(n,r,i);for(var c=e(i),f=m(n),u=f.length,s=0;s<u;s++)f[s].apply(c,r);var p=d[w[n]];return p&&p.push([b,n,r,c]),c}}function o(t,e){h[t]=m(t).concat(e)}function v(t,e){var n=h[t];if(n)for(var r=0;r<n.length;r++)n[r]===e&&n.splice(r,1)}function m(t){return h[t]||[]}function g(t){return p[t]=p[t]||i(n)}function y(t,e){l.aborted||s(t,function(t,n){e=e||"feature",w[n]=e,e in d||(d[e]=[])})}var h={},w={},b={on:o,addEventListener:o,removeEventListener:v,emit:n,get:g,listeners:m,context:e,buffer:y,abort:c,aborted:!1};return b}function o(t){return u(t,f,a)}function a(){return new r}function c(){(d.api||d.feature)&&(l.aborted=!0,d=l.backlog={})}var f="nr@context",u=t("gos"),s=t(9),d={},p={},l=e.exports=i();e.exports.getOrSetContext=o,l.backlog=d},{}],gos:[function(t,e,n){function r(t,e,n){if(i.call(t,e))return t[e];var r=n();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(t,e,{value:r,writable:!0,enumerable:!1}),r}catch(o){}return t[e]=r,r}var i=Object.prototype.hasOwnProperty;e.exports=r},{}],handle:[function(t,e,n){function r(t,e,n,r){i.buffer([t],r),i.emit(t,e,n)}var i=t("ee").get("handle");e.exports=r,r.ee=i},{}],id:[function(t,e,n){function r(t){var e=typeof t;return!t||"object"!==e&&"function"!==e?-1:t===window?0:a(t,o,function(){return i++})}var i=1,o="nr@id",a=t("gos");e.exports=r},{}],loader:[function(t,e,n){function r(){if(!M++){var t=T.info=NREUM.info,e=m.getElementsByTagName("script")[0];if(setTimeout(u.abort,3e4),!(t&&t.licenseKey&&t.applicationID&&e))return u.abort();f(x,function(e,n){t[e]||(t[e]=n)});var n=a();c("mark",["onload",n+T.offset],null,"api"),c("timing",["load",n]);var r=m.createElement("script");0===t.agent.indexOf("http://")||0===t.agent.indexOf("https://")?r.src=t.agent:r.src=l+"://"+t.agent,e.parentNode.insertBefore(r,e)}}function i(){"complete"===m.readyState&&o()}function o(){c("mark",["domContent",a()+T.offset],null,"api")}var a=t(5),c=t("handle"),f=t(9),u=t("ee"),s=t(7),d=t(2),p=t(3),l=d.getConfiguration("ssl")===!1?"http":"https",v=window,m=v.document,g="addEventListener",y="attachEvent",h=v.XMLHttpRequest,w=h&&h.prototype,b=!1;NREUM.o={ST:setTimeout,SI:v.setImmediate,CT:clearTimeout,XHR:h,REQ:v.Request,EV:v.Event,PR:v.Promise,MO:v.MutationObserver};var E=""+location,x={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-1216.min.js"},O=h&&w&&w[g]&&!/CriOS/.test(navigator.userAgent),T=e.exports={offset:a.getLastTimestamp(),now:a,origin:E,features:{},xhrWrappable:O,userAgent:s,disabled:b};if(!b){t(1),t(6),m[g]?(m[g]("DOMContentLoaded",o,p(!1)),v[g]("load",r,p(!1))):(m[y]("onreadystatechange",i),v[y]("onload",r)),c("mark",["firstbyte",a.getLastTimestamp()],null,"api");var M=0}},{}],"wrap-function":[function(t,e,n){function r(t,e){function n(e,n,r,f,u){function nrWrapper(){var o,a,s,p;try{a=this,o=d(arguments),s="function"==typeof r?r(o,a):r||{}}catch(l){i([l,"",[o,a,f],s],t)}c(n+"start",[o,a,f],s,u);try{return p=e.apply(a,o)}catch(v){throw c(n+"err",[o,a,v],s,u),v}finally{c(n+"end",[o,a,p],s,u)}}return a(e)?e:(n||(n=""),nrWrapper[p]=e,o(e,nrWrapper,t),nrWrapper)}function r(t,e,r,i,o){r||(r="");var c,f,u,s="-"===r.charAt(0);for(u=0;u<e.length;u++)f=e[u],c=t[f],a(c)||(t[f]=n(c,s?f+r:r,i,f,o))}function c(n,r,o,a){if(!v||e){var c=v;v=!0;try{t.emit(n,r,o,e,a)}catch(f){i([f,n,r,o],t)}v=c}}return t||(t=s),n.inPlace=r,n.flag=p,n}function i(t,e){e||(e=s);try{e.emit("internal-error",t)}catch(n){}}function o(t,e,n){if(Object.defineProperty&&Object.keys)try{var r=Object.keys(t);return r.forEach(function(n){Object.defineProperty(e,n,{get:function(){return t[n]},set:function(e){return t[n]=e,e}})}),e}catch(o){i([o],n)}for(var a in t)l.call(t,a)&&(e[a]=t[a]);return e}function a(t){return!(t&&t instanceof Function&&t.apply&&!t[p])}function c(t,e){var n=e(t);return n[p]=t,o(t,n,s),n}function f(t,e,n){var r=t[e];t[e]=c(r,n)}function u(){for(var t=arguments.length,e=new Array(t),n=0;n<t;++n)e[n]=arguments[n];return e}var s=t("ee"),d=t(10),p="nr@original",l=Object.prototype.hasOwnProperty,v=!1;e.exports=r,e.exports.wrapFunction=c,e.exports.wrapInPlace=f,e.exports.argsToArray=u},{}]},{},["loader"]);</script>
<link rel="stylesheet" href="https://assets.zameen.com/profolio/css/plugins1_25.css?v=5" type="text/css" />

<link rel="stylesheet" href="https://profolio.zameen.com/css/profolio4_28.css?v=12" type="text/css" />
<link rel="stylesheet" href="https://profolio.zameen.com/css/add_property_single1_14.css?v=28" type="text/css">
<link rel="stylesheet" href="https://profolio.zameen.com/css/mybayut/campaign_css.css" type="text/css">
<link rel="stylesheet" href="https://profolio.zameen.com/css/featuredcontentglider.css" type="text/css">
<script type="text/javascript" src="https://profolio.zameen.com/javascript/featuredcontentglider.js"></script>

<link rel="stylesheet" href="https://profolio.zameen.com/css/jquery-ui-1_5.css" type="text/css">
<link rel="stylesheet" href="https://profolio.zameen.com/css/datePicker.css" type="text/css" />
<link rel="stylesheet" href="https://profolio.zameen.com/lib/combo/combo1_6.css?v=1" type="text/css" />
<link rel="stylesheet" href="https://profolio.zameen.com/css/mapbox-gl.css" type="text/css">
<script type="text/javascript" src="https://profolio.zameen.com/javascript/mapbox-gl.js"></script>
    
<script language="javascript">
	var this_domain = document.domain;
	var this_domain_property = "http://"+this_domain;
	if (this_domain.indexOf("192.168.1.14") > -1) this_domain = this_domain + "/zameen";
	else if (this_domain.indexOf("192.") > -1) this_domain = this_domain + "/zameen_new";
	this_domain = "https://profolio.zameen.com";
	this_domain_property = this_domain;
	//this_domain = "http://"+this_domain + "";
	this_domain_mybayut = this_domain+"/profolio";
	var this_domain_ajax = this_domain_property + "/index.php?t=ajax";
	var paths = {};
	paths['images'] = "";
	paths['skins'] = this_domain_property + '/skins';
	paths['project'] = paths['skins'] + '/zameen';
	paths['media_cdn'] = paths['project'] + '/media_cdn';
	paths['images_css'] = paths['media_cdn'] + '/images_css';
	var this_domain_main = this_domain;
	var this_domain_fe = "https://www.zameen.com";
	var property_loading = paths['images'] + "/common/byt_loading.gif";
	var listing_map_enable = "1";
	var google_map_api_key_new = "https://maps.googleapis.com/maps/api/js?v=3&key=AIzaSyDMtaxOHki-JJfYKIrQOwqFByQtJWzhp9c"; 
	var google_map_api_key_val = "AIzaSyDMtaxOHki-JJfYKIrQOwqFByQtJWzhp9c"; 
	var hidden_listing_bk_color = "#c3c2c2";
	var qty_upper_limit = "10000";
	var qty_lower_limit = "0";
	var product_list = {"1":{"product_id":"1","0":"1","product_usage_type":"credit","1":"credit","product_title":"Refresh Listing","2":"Refresh Listing"},"2":{"product_id":"2","0":"2","product_usage_type":"quota","1":"quota","product_title":"Premium Listing","2":"Premium Listing"},"4":{"product_id":"4","0":"4","product_usage_type":"credit","1":"credit","product_title":"Hot Listing","2":"Hot Listing"},"5":{"product_id":"5","0":"5","product_usage_type":"credit","1":"credit","product_title":"Super Hot Listing","2":"Super Hot Listing"},"9":{"product_id":"9","0":"9","product_usage_type":"quota","1":"quota","product_title":"Listing","2":"Listing"},"10":{"product_id":"10","0":"10","product_usage_type":"credit","1":"credit","product_title":"Boost","2":"Boost"},"11":{"product_id":"11","0":"11","product_usage_type":"credit","1":"credit","product_title":"Feature","2":"Feature"},"12":{"product_id":"12","0":"12","product_usage_type":"credit","1":"credit","product_title":"Story Ad","2":"Story Ad"}};
	var system_products_list = {"refresh_listing":"1","premium_listing":"2","magazine_listing":"3","hot_listing":"4","shot_listing":"5","int_listing":"6","dotw_listing":"7","le_listing":"8","olx_premium_listing":"9","olx_refresh_listing":"10","olx_feature":"11","story_ad":"12"};
	var is_new_olx_system = 0;
</script>
		<script src="https://profolio.zameen.com/javascript/jquery/jquery_new3_11.js" type="text/javascript" ></script> 
<script src="https://profolio.zameen.com/javascript/jquery/jquery.cluetip.js" type="text/javascript"></script>

		<!-- jquery-ui stylesheet -->
			<link rel="stylesheet" href="https://profolio.zameen.com/css/jquery_ui_1_12_1.css" type="text/css">
		<!-- jquery-ui -->
			<link rel="stylesheet" href="https://profolio.zameen.com/css/add_property_single1_14.css?v=28" type="text/css">
			<link rel="stylesheet" href="https://profolio.zameen.com/css/intlTelInput_smp.css" type="text/css">
			<link rel="stylesheet" href="https://profolio.zameen.com/css/intlTelInput_smp_1_2.css" type="text/css">

        <script type="text/javascript" src="https://profolio.zameen.com/javascript/jquery_min.js"></script>
        <script type="text/javascript" src="https://profolio.zameen.com/javascript/jquery.mask_smp.js"></script>
        <script type="text/javascript" src="https://profolio.zameen.com/javascript/intlTelInput_lib_smp.js?v=1"></script>
        <script type="text/javascript" src="https://profolio.zameen.com/javascript/intl_phone_unification.js?v=3"></script>
        <script>
            $("#cell").live('focusin',function(){
                replace_place_holder_input($(this));
            });
            $("#cell").live('blur',function(){
                refill_place_holder($(this));
            });
            $("#cell1").live('focusin',function(){
                replace_place_holder_input($(this));
            });
            $("#cell1").live('blur',function(){
                refill_place_holder($(this));
            });
            $("#cell2").live('focusin',function(){
                replace_place_holder_input($(this));
            });
            $("#cell2").live('blur',function(){
                refill_place_holder($(this));
            });
        </script>
		<script type="text/javascript" src="https://profolio.zameen.com/javascript/autofill1_1.js"></script>
		<script type="text/javascript" src="https://profolio.zameen.com/javascript/gmap_api1_13.js?v=1"></script>
		<script type="text/javascript" src="https://profolio.zameen.com/javascript/add_property_single1_27.js?v=39"></script>
		<script type="text/javascript" src="https://profolio.zameen.com/javascript/plupload.full.min.js"></script>
		<script type="text/javascript" src="https://profolio.zameen.com/javascript/date_time_picker1_1.js"></script>
		<link rel="stylesheet" href="https://profolio.zameen.com/css/jquery-ui-1_5.css" type="text/css">
		<!-- Added by labeeb -->
		<script type="text/javascript" src="https://profolio.zameen.com/javascript/jquery-1.12.4.js"></script>
		
		<script type="text/javascript">
			var $jQuery_1_12_4 = jQuery.noConflict();
		</script>
		
		<script type="text/javascript" src="https://profolio.zameen.com/javascript/jquery-ui-1.12.1.js"></script>

		<script type="text/javascript">
			
			$jQuery_1_12_4( function() {
			 
			  $jQuery_1_12_4("#city").selectmenu({
			    appendTo: ".dropdown-ui",
			  });

			  $jQuery_1_12_4("#city").on('selectmenuchange',function(){
			  	onchange_city(this);
			  });

			} );
		</script>

		<script>
		var dataLayer = [];
		dataLayer.push({'website_section': 'profolio'});
		dataLayer.push({'user_ip': '111.119.187.1'});
		</script>
		<!-- Google Tag Manager -->
		<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-W6GGGJ"
		height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-W6GGGJ');</script>
		<!-- End Google Tag Manager -->
<!--[if IE]><script type="text/javascript" src="https://profolio.zameen.com/javascript/calendar/bgiframe.js"></script><![endif]-->
	<!-- ==================================== -->
	<script>
		(function(h,o,t,j,a,r){
		h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
		h._hjSettings={hjid:2464465,hjsv:6};
		a=o.getElementsByTagName('head')[0];
		r=o.createElement('script');r.async=1;
		r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
		a.appendChild(r);
		})(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
        /*
        * Google Ads
        * */
        var googletag = googletag || {};
        googletag.cmd = googletag.cmd || [];

        (function() {
            var gads = document.createElement('script');
            gads.async = true;
            gads.type = 'text/javascript';
            var useSSL = 'https:' == document.location.protocol;
            gads.src = (useSSL ? 'https:' : 'http:') + '//www.googletagservices.com/tag/js/gpt.js';
            var node = document.getElementsByTagName('script')[0];
            node.parentNode.insertBefore(gads, node);
        })();
    </script>
</head>
<body>
<div id="content" class="" style="font-family:Arial,Verdana,Helvetica,sans-serif;line-height:140%;">
<!-- <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="preload"> -->
<style type="text/css">
	@import url('https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap');
	.cart_row{
		margin-top:2px;line-height: 18px;overflow: hidden;padding: 2px 0;float: left;width: 100%;clear: both;		
	}

	
	.cart_row_child{
	  float:left;padding-left:5px;
	}
</style>
<div id="header">
	<div id="headerrightcorner" style="margin-right:5px;">
		<div id="header_body" >
			<ul>
				<li class="z-logo-icon-header">
					<a href="https://www.zameen.com/" rel="nofollow" id="header_home">Go to Zameen.com</a>
				</li>
				<li class="z-email-icon-header">
					rizwan.13347@gmail.com				</li>
				<li class="z-logout-icon-header">
					<a href="https://profolio.zameen.com/profolio/logout.php" id="" rel="nofollow">
						Logout					</a>
				</li>
			</ul>
		</div>
	</div>

	<a href="https://profolio.zameen.com/profolio/">
	<div id="headerleftcorner" style="background:url('https://profolio.zameen.com/images/common/logo_software.gif') 10px 0px no-repeat;"></div>
	</a>
</div>

<div id="mybayut_tabs">
<li><a href='https://profolio.zameen.com/profolio/index.php'>Dashboard</a></li><li id=current><a href='https://profolio.zameen.com/profolio/index.php?tabs=2&section=listings&status=on'>Property Management</a></li><li><a href='https://profolio.zameen.com/profolio/index.php?section=mailbox_inbox&tabs=3&type=u'>Message Center</a></li><li><a href='https://profolio.zameen.com/profolio/index.php?tabs=4&section=editUser'>My Account & Profiles</a></li><li><a href='https://profolio.zameen.com/profolio/index.php?tabs=10&section=reports'>Reports</a></li><li><a href='https://profolio.zameen.com/profolio/index.php?tabs=6&section=favourites'>Tools</a></li><li><a href='https://profolio.zameen.com/profolio/index.php?tabs=7&section=agedit_user'>Agency Staff</a></li><li><a href='https://profolio.zameen.com/profolio/index.php?tabs=8&section=inquiries&subsection=lead_summary' class='client_n_leads'>Clients & Leads</a></li><li><a href='https://profolio.zameen.com/profolio/index.php?tabs=12&section=agency_ws'>Agency Website</a></li><li><a href='https://profolio.zameen.com/profolio/index.php?tabs=13&section=advertise'>Advertise</a></li><div class="clearfix"></div>
</div>


		<div class="prop-nav left">
			<div class="left">
				<a href="#" class="checkout_cart menu_list cart_icon icon-utl transparent" onclick="return false;" >
					cart
								<span id="header_cart_count" style="
						position: absolute;right: -5px;top: -5px;min-height: 8px;min-width: 10px;text-align: center;background: red;border-radius:50%;
					    padding: 3px;color: #fff;font-size: 9px;line-height: 10px;display:none;
					    ">0 
				</span>
				</a>
				<span id="new" style="display: none;">0</span>
				<a href="https://profolio.zameen.com/profolio/index.php?tabs=13&section=billing" rel="nofollow" class="menu_list transparent billing_icon icon-utl" id="header_billing">Billing</a>
				<a href="https://profolio.zameen.com/profolio/index.php?tabs=6&section=edit_advance_alerts" class="menu_list email_alert_icon icon-utl transparent">Email Alert</a>
				<a href="https://www.zameen.com/blog/" rel="nofollow" id="header_blog" class="menu_list transparent blog_icon icon-utl">Blog</a>		
						
				<a href="https://www.zameen.com/advertise/index.html" rel="nofollow" id="header_advertise" class="menu_list transparent advertise-icon icon-utl">Advertise</a>
			</div>
			<div class="right">
				
				<a href="https://profolio.zameen.com/profolio/index.php?tabs=2&section=inventory_search" class="menu_list invent_search_icon icon-utl">Inventory Search</a>
				
				<a href="index.php?tabs=2&section=add_property" target="_self" class="menu_list post_list_icon icon-utl">Post Listing</a>
			</div>
			
		</div>
	
<div id="maincontent"  >
		
		<div id="leftcolumn">
<div id="mybayut_menu" >
	
	
	<span class="leftcolumheadings">Tools</span>
	<a href="https://profolio.zameen.com/profolio/index.php?tabs=2&section=inventory_search" class="leftcolumnlink">Inventory Search</a>
	<a href="https://profolio.zameen.com/profolio/index.php?tabs=2&section=add_property" class="leftcolumnlink">Post New Listing</a>
	<a href="https://profolio.zameen.com/profolio/index.php?tabs=2&section=zone_details" class="leftcolumnlink">Zone Details</a>
	<a href="https://profolio.zameen.com/profolio/index.php?tabs=2&section=listing_policy" class="leftcolumnlink">Listing Policy</a>
	
	<span class="leftcolumheadings"> <!--Listings-->
		<a id="a_alldiv" class="a_allclose" href="javascript: void(0);" onclick="menu_alldiv('a_alldiv')">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
		Listings 
	</span>   
	 <!--     Active listings Menu     -->
	  <a href="javascript:void(0);" class="leftcolumnlink_sub" id="a_active" onclick="menu_divtoggle('a_active','d_active');">Active <label>(1)</label></a>
	  <div class="listing_class" style="display:none;" id="d_active">
		<a href="https://profolio.zameen.com/profolio/index.php?tabs=2&section=listings&status=on" class="leftcolumnlink">All Listings</a>
		<a href="https://profolio.zameen.com/profolio/index.php?tabs=2&section=listings&subsection=Sale&status=on" class="leftcolumnlink">For Sale (1)</a>
		<a href="https://profolio.zameen.com/profolio/index.php?tabs=2&section=listings&subsection=Rent&status=on" class="leftcolumnlink">For Rent (0)</a>
<!--		<a href="--><!--/index.php?tabs=2&section=listings&subsection=Wanted&status=--><!--" class="leftcolumnlink">--><!--</a>-->
		<a href="https://profolio.zameen.com/profolio/index.php?tabs=2&section=listings&subsection=Super_Hot_Listing&status=on" class="leftcolumnlink">Super Hot Listings (0)</a>
		<a href="https://profolio.zameen.com/profolio/index.php?tabs=2&section=listings&subsection=Hot_Listing&status=on" class="leftcolumnlink">Hot Listings (0)</a>
	 </div>
	  <a href="javascript:void(0);" class="leftcolumnlink_sub" id="a_edited" onclick="menu_divtoggle('a_edited','d_edited');">Edited <label>(0)</label></a>
	  <div class="listing_class" style="display:none;" id="d_edited">
		<a href="https://profolio.zameen.com/profolio/index.php?tabs=2&section=listings&status=edited" class="leftcolumnlink">All Listings</a>
		<a href="https://profolio.zameen.com/profolio/index.php?tabs=2&section=listings&subsection=Sale&status=edited" class="leftcolumnlink">For Sale (0)</a>
		<a href="https://profolio.zameen.com/profolio/index.php?tabs=2&section=listings&subsection=Rent&status=edited" class="leftcolumnlink">For Rent (0)</a>
<!--		<a href="--><!--/index.php?tabs=2&section=listings&subsection=Wanted&status=--><!--" class="leftcolumnlink">--><!--</a>-->
	 </div>
	  <a href="javascript:void(0);" class="leftcolumnlink_sub" id="a_pending" onclick="menu_divtoggle('a_pending','d_pending');">Pending <label>(0)</label></a>
	  <div class="listing_class" style="display:none;" id="d_pending">
		<a href="https://profolio.zameen.com/profolio/index.php?tabs=2&section=listings&status=Pending" class="leftcolumnlink">All Listings</a>
		<a href="https://profolio.zameen.com/profolio/index.php?tabs=2&section=listings&subsection=Sale&status=Pending" class="leftcolumnlink">For Sale (0)</a>
		<a href="https://profolio.zameen.com/profolio/index.php?tabs=2&section=listings&subsection=Rent&status=Pending" class="leftcolumnlink">For Rent (0)</a>
<!--		<a href="--><!--/index.php?tabs=2&section=listings&subsection=Wanted&status=--><!--" class="leftcolumnlink">--><!--</a>-->
	 </div>
	  <a href="javascript:void(0);" class="leftcolumnlink_sub" id="a_expired" onclick="menu_divtoggle('a_expired','d_expired');">Expired <label>(0)</label></a>
	  <div class="listing_class" style="display:none;" id="d_expired">
		<a href="https://profolio.zameen.com/profolio/index.php?tabs=2&section=listings&status=expired" class="leftcolumnlink">All Listings</a>
		<a href="https://profolio.zameen.com/profolio/index.php?tabs=2&section=listings&subsection=Sale&status=expired" class="leftcolumnlink">For Sale (0)</a>
		<a href="https://profolio.zameen.com/profolio/index.php?tabs=2&section=listings&subsection=Rent&status=expired" class="leftcolumnlink">For Rent (0)</a>
<!--		<a href="--><!--/index.php?tabs=2&section=listings&subsection=Wanted&status=--><!--" class="leftcolumnlink">--><!--</a>-->
	 </div>
	  <a href="javascript:void(0);" class="leftcolumnlink_sub" id="a_uploaded" onclick="menu_divtoggle('a_uploaded','d_uploaded');">Uploaded <label>(0)</label></a>
	  <div class="listing_class" style="display:none;" id="d_uploaded">
		<a href="https://profolio.zameen.com/profolio/index.php?tabs=2&section=listings&status=u" class="leftcolumnlink">All Listings</a>
		<a href="https://profolio.zameen.com/profolio/index.php?tabs=2&section=listings&subsection=Sale&status=u" class="leftcolumnlink">For Sale (0)</a>
		<a href="https://profolio.zameen.com/profolio/index.php?tabs=2&section=listings&subsection=Rent&status=u" class="leftcolumnlink">For Rent (0)</a>
<!--		<a href="--><!--/index.php?tabs=2&section=listings&subsection=Wanted&status=--><!--" class="leftcolumnlink">--><!--</a>-->
	 </div>
	  <a href="javascript:void(0);" class="leftcolumnlink_sub" id="a_hidden" onclick="menu_divtoggle('a_hidden','d_hidden');">Hidden <label>(0)</label></a>
	  <div class="listing_class" style="display:none;" id="d_hidden">
		<a href="https://profolio.zameen.com/profolio/index.php?tabs=2&section=listings&status=hidden_listings" class="leftcolumnlink">All Listings</a>
		<a href="https://profolio.zameen.com/profolio/index.php?tabs=2&section=listings&subsection=Sale&status=hidden_listings" class="leftcolumnlink">For Sale (0)</a>
		<a href="https://profolio.zameen.com/profolio/index.php?tabs=2&section=listings&subsection=Rent&status=hidden_listings" class="leftcolumnlink">For Rent (0)</a>
<!--		<a href="--><!--/index.php?tabs=2&section=listings&subsection=Wanted&status=--><!--" class="leftcolumnlink">--><!--</a>-->
	 </div>
	  <a href="javascript:void(0);" class="leftcolumnlink_sub" id="a_deleted" onclick="menu_divtoggle('a_deleted','d_deleted');">Deleted <label>(0)</label></a>
	  <div class="listing_class" style="display:none;" id="d_deleted">
		<a href="https://profolio.zameen.com/profolio/index.php?tabs=2&section=listings&status=Deleted" class="leftcolumnlink">All Listings</a>
		<a href="https://profolio.zameen.com/profolio/index.php?tabs=2&section=listings&subsection=Sale&status=Deleted" class="leftcolumnlink">For Sale (0)</a>
		<a href="https://profolio.zameen.com/profolio/index.php?tabs=2&section=listings&subsection=Rent&status=Deleted" class="leftcolumnlink">For Rent (0)</a>
<!--		<a href="--><!--/index.php?tabs=2&section=listings&subsection=Wanted&status=--><!--" class="leftcolumnlink">--><!--</a>-->
	 </div>
	  <a href="javascript:void(0);" class="leftcolumnlink_sub" id="a_rejected" onclick="menu_divtoggle('a_rejected','d_rejected');">Rejected <label>(0)</label></a>
	  <div class="listing_class" style="display:none;" id="d_rejected">
		<a href="https://profolio.zameen.com/profolio/index.php?tabs=2&section=listings&status=Rejected" class="leftcolumnlink">All Listings</a>
		<a href="https://profolio.zameen.com/profolio/index.php?tabs=2&section=listings&subsection=Sale&status=Rejected" class="leftcolumnlink">For Sale (0)</a>
		<a href="https://profolio.zameen.com/profolio/index.php?tabs=2&section=listings&subsection=Rent&status=Rejected" class="leftcolumnlink">For Rent (0)</a>
<!--		<a href="--><!--/index.php?tabs=2&section=listings&subsection=Wanted&status=--><!--" class="leftcolumnlink">--><!--</a>-->
	 </div>
	  <a href="javascript:void(0);" class="leftcolumnlink_sub" id="a_downgraded" onclick="menu_divtoggle('a_downgraded','d_downgraded');">Downgraded <label>(0)</label></a>
	  <div class="listing_class" style="display:none;" id="d_downgraded">
		<a href="https://profolio.zameen.com/profolio/index.php?tabs=2&section=listings&status=downgraded" class="leftcolumnlink">All Listings</a>
		<a href="https://profolio.zameen.com/profolio/index.php?tabs=2&section=listings&subsection=Sale&status=downgraded" class="leftcolumnlink">For Sale (0)</a>
		<a href="https://profolio.zameen.com/profolio/index.php?tabs=2&section=listings&subsection=Rent&status=downgraded" class="leftcolumnlink">For Rent (0)</a>
<!--		<a href="--><!--/index.php?tabs=2&section=listings&subsection=Wanted&status=--><!--" class="leftcolumnlink">--><!--</a>-->
	 </div>
<a href="javascript:void(0);" class="leftcolumnlink_sub" id="rejected_images_head" onclick="menu_divtoggle('rejected_images_head','rejected_images_body');">
	Rejected Images<!-- <label><img style="margin-top: -10px;position: absolute;" src="https://profolio.zameen.com/images/common/new_img_small.png"></label> -->
</a>
<div class="listing_class" style="display:none;" id="rejected_images_body">
	<a href="https://profolio.zameen.com/profolio/index.php?tabs=2&section=rejected_images" class="leftcolumnlink">All Images</a>
	<a href="https://profolio.zameen.com/profolio/index.php?tabs=2&section=rejected_images&purpose=sale" class="leftcolumnlink">Sales </a>
	<a href="https://profolio.zameen.com/profolio/index.php?tabs=2&section=rejected_images&purpose=rent" class="leftcolumnlink">For Rent</a>
<!--	<a href="--><!--/index.php?tabs=2&section=rejected_images&purpose=wanted" class="leftcolumnlink">Wanted</a>-->
</div>


<a href="javascript:void(0);" class="leftcolumnlink_sub" id="rejected_videos_head" onclick="menu_divtoggle('rejected_videos_head','rejected_videos_body');">
	Rejected Videos<!-- <label><img style="margin-top: -10px;position: absolute;" src="https://profolio.zameen.com/images/common/new_img_small.png"></label> -->
</a>
<div class="listing_class" style="display:none;" id="rejected_videos_body">
	<a href="https://profolio.zameen.com/profolio/index.php?tabs=2&section=rejected_videos" class="leftcolumnlink">All Videos</a>
	<a href="https://profolio.zameen.com/profolio/index.php?tabs=2&section=rejected_videos&purpose=sale" class="leftcolumnlink">Sales </a>
	<a href="https://profolio.zameen.com/profolio/index.php?tabs=2&section=rejected_videos&purpose=rent" class="leftcolumnlink">For Rent</a>
<!--	<a href="--><!--/index.php?tabs=2&section=rejected_videos&purpose=wanted" class="leftcolumnlink">Wanted</a>-->
</div>
<span class="leftcolumheadings">Credit Expiry Log</span>
	<a href="https://profolio.zameen.com/profolio/index.php?tabs=2&section=expiry_log" class="leftcolumnlink">View Log</a>

<input type="hidden" name="active_sale_listing_count" value="1" id="active_sale_listing_count" />
<br />
<form name="frm_ref" id="frm_ref" action="?tabs=2&section=inventory_search" method="post">
	Search:&nbsp;
	<input type="text" id="txt_idref" class="auto_textbox empty" name="txt_idref" defvalue="ID or Ref" value="ID or Ref" style="width:93px" />&nbsp;<img src="https://assets.zameen.com/profolio/images/auto_utilization_go_button1_1.png" style="cursor:pointer;" align="absmiddle" onclick="document.frm_ref.submit();" />
</form>
<!-- Google Ads display -->
<div id='div-gpt-ad-sidebar' style='width:1px; height: 1px; margin-top: 20px;'>
    <script type='text/javascript'>
        googletag.cmd.push(function()
        {
            googletag.defineSlot('Profolio_Propmanagment_Side', [183, 400], 'div-gpt-ad-sidebar').addService(googletag.pubads());
            googletag.enableServices();
            googletag.display('div-gpt-ad-sidebar');
        });
    </script>
</div>
	
			
		
</div>

<input type=hidden name=client_ownerlist id=client_ownerlist value=(1001388906)>     	</div>
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

	<div id="rightcolumn" style="
width:79% " class="rightcolumn_div post_story_margin">

			<div style="height:30px;margin-bottom:10px; display: block;" id="bc_container">
					<div id="mytabs_search" style="margin-top:0px;">
					   <form id="frm_tabs_search" name="frm_tabs_search" style="padding:0px; margin:0px;">
							Edit Property:&nbsp;
							<input type="text" id="txt_tabs_search" name="txt_tabs_search" value="Enter ID" style="color:#454545; width:80px;" />&nbsp;
							<input type="image" src="https://assets.zameen.com/profolio/images/auto_utilization_go_button1_1.png" id="btn_search_go" name="btn_search_go" height="14" align="texttop" />
					   </form>
					</div>
					<span class="worddashbord" style="display:inline;"> <a href="index.php?tabs=2&section=listings">Property Management</a> &raquo; Post Listing </span>
			</div>
<link rel="stylesheet" href="https://profolio.zameen.com/css/post_listing_individual_2_1.css?v=37" type="text/css">
<script type="text/javascript">
	request_url = "https://profolio.zameen.com/profolio/includes/add_edit_property_single.php?ajax=1&id=0";
	request_url_image = "https://profolio.zameen.com/profolio/includes/add_edit_property_single_image.php?ajax=1&id=0";
	cat_combo_width = 210;
	validate_fields = ["purpose","wanted_for","type","city","last_location","name","email","title","description","price","area"];
	config_options_data = {"1":{"8":{"beds":1,"baths":1,"ow_status":1,"oc_status":1,"min_price":10000,"show_unit":1,"show_street":1,"show_floor":1,"show_plot":0,"label":"Flat #","show_finance":1},"9":{"beds":1,"baths":1,"ow_status":1,"oc_status":1,"min_price":10000,"show_unit":1,"show_street":1,"show_floor":0,"show_plot":0,"label":"House #","show_finance":1},"11":{"beds":0,"baths":0,"ow_status":1,"oc_status":1,"min_price":10000,"show_unit":0,"show_street":1,"show_floor":0,"show_plot":1,"label":"","show_finance":1},"12":{"beds":0,"baths":0,"ow_status":1,"oc_status":1,"min_price":10000,"show_unit":0,"show_street":1,"show_floor":0,"show_plot":1,"label":"","show_finance":1},"13":{"beds":1,"baths":1,"ow_status":1,"oc_status":1,"min_price":10000,"show_unit":1,"show_street":1,"show_floor":1,"show_plot":0,"label":"Office #","show_finance":1},"14":{"beds":1,"baths":1,"ow_status":1,"oc_status":1,"min_price":10000,"show_unit":1,"show_street":1,"show_floor":0,"show_plot":0,"label":"Factory #","show_finance":1},"15":{"beds":1,"baths":1,"ow_status":1,"oc_status":1,"min_price":10000,"show_unit":1,"show_street":1,"show_floor":1,"show_plot":0,"label":"Shop #","show_finance":1},"17":{"beds":1,"baths":1,"ow_status":1,"oc_status":1,"min_price":10000,"show_unit":1,"show_street":1,"show_floor":1,"show_plot":0,"label":"Warehouse #","show_finance":1},"18":{"beds":1,"baths":1,"ow_status":1,"oc_status":1,"min_price":10000,"show_unit":1,"show_street":1,"show_floor":0,"show_plot":0,"label":"Unit #","show_finance":1},"16":{"beds":1,"baths":1,"ow_status":1,"oc_status":1,"min_price":10000,"show_unit":1,"show_street":1,"show_floor":0,"show_plot":0,"label":"Building #","show_finance":1},"19":{"beds":0,"baths":0,"ow_status":1,"oc_status":1,"min_price":10000,"show_unit":0,"show_street":1,"show_floor":0,"show_plot":1,"label":"","show_finance":1},"20":{"beds":1,"baths":1,"ow_status":1,"oc_status":1,"min_price":10000,"show_unit":1,"show_street":1,"show_floor":0,"show_plot":0,"label":"House #","show_finance":1},"21":{"beds":1,"baths":1,"ow_status":1,"oc_status":1,"min_price":10000,"show_unit":1,"show_street":1,"show_floor":0,"show_plot":0,"label":"House #","show_finance":1},"22":{"beds":1,"baths":1,"ow_status":1,"oc_status":1,"min_price":10000,"show_unit":1,"show_street":1,"show_floor":0,"show_plot":0,"label":"House #","show_finance":1},"23":{"beds":0,"baths":0,"ow_status":1,"oc_status":1,"min_price":10000,"show_unit":0,"show_street":0,"show_floor":0,"show_plot":0,"label":"","show_finance":1},"24":{"beds":1,"baths":1,"ow_status":1,"oc_status":1,"min_price":10000,"show_unit":1,"show_street":1,"show_floor":0,"show_plot":0,"label":"House #","show_finance":1},"25":{"beds":1,"baths":1,"ow_status":1,"oc_status":1,"min_price":10000,"show_unit":1,"show_street":1,"show_floor":0,"show_plot":0,"label":"House #","show_finance":1},"26":{"beds":0,"baths":0,"ow_status":1,"oc_status":1,"min_price":10000,"show_unit":0,"show_street":0,"show_floor":0,"show_plot":0,"label":"","show_finance":1},"27":{"beds":0,"baths":0,"ow_status":1,"oc_status":1,"min_price":10000,"show_unit":0,"show_street":1,"show_floor":0,"show_plot":1,"label":"","show_finance":1},"":{"beds":1,"baths":1,"ow_status":1,"oc_status":1,"min_price":10000,"show_unit":1,"show_street":1,"show_floor":1,"show_plot":1,"label":"House #","show_finance":1}},"2":{"all":{"rental":1000},"8":{"beds":1,"baths":1,"oc_status":0,"min_price":10000,"show_unit":1,"show_street":1,"show_floor":1,"show_plot":0,"label":"Flat #"},"9":{"beds":1,"baths":1,"oc_status":0,"min_price":10000,"show_unit":1,"show_street":1,"show_floor":0,"show_plot":0,"label":"House #"},"11":{"beds":0,"baths":0,"oc_status":0,"min_price":10000,"show_unit":0,"show_street":1,"show_floor":0,"show_plot":1,"label":""},"12":{"beds":0,"baths":0,"oc_status":0,"min_price":10000,"show_unit":0,"show_street":1,"show_floor":0,"show_plot":1,"label":""},"13":{"beds":1,"baths":1,"oc_status":0,"min_price":10000,"show_unit":1,"show_street":1,"show_floor":1,"show_plot":0,"label":"Office #"},"14":{"beds":1,"baths":1,"oc_status":0,"min_price":10000,"show_unit":1,"show_street":1,"show_floor":0,"show_plot":0,"label":"Factory #"},"15":{"beds":1,"baths":1,"oc_status":0,"min_price":10000,"show_unit":1,"show_street":1,"show_floor":1,"show_plot":0,"label":"Shop #"},"17":{"beds":1,"baths":1,"oc_status":0,"min_price":10000,"show_unit":1,"show_street":1,"show_floor":1,"show_plot":0,"label":"Warehouse #"},"18":{"beds":1,"baths":1,"oc_status":0,"min_price":10000,"show_unit":1,"show_street":1,"show_floor":0,"show_plot":0,"label":"Unit #"},"16":{"beds":1,"baths":1,"oc_status":0,"min_price":10000,"show_unit":1,"show_street":1,"show_floor":0,"show_plot":0,"label":"Building #"},"19":{"beds":0,"baths":0,"oc_status":0,"min_price":10000,"show_unit":0,"show_street":1,"show_floor":0,"show_plot":1,"label":""},"20":{"beds":1,"baths":1,"oc_status":0,"min_price":10000,"show_unit":1,"show_street":1,"show_floor":0,"show_plot":0,"label":"House #"},"21":{"beds":1,"baths":1,"oc_status":0,"min_price":10000,"show_unit":1,"show_street":1,"show_floor":0,"show_plot":0,"label":"House #"},"22":{"beds":1,"baths":1,"oc_status":0,"min_price":10000,"show_unit":1,"show_street":1,"show_floor":0,"show_plot":0,"label":"House #"},"23":{"beds":0,"baths":0,"oc_status":0,"min_price":10000,"show_unit":0,"show_street":0,"show_floor":0,"show_plot":0,"label":""},"24":{"beds":1,"baths":1,"oc_status":0,"min_price":10000,"show_unit":1,"show_street":1,"show_floor":0,"show_plot":0,"label":"House #"},"25":{"beds":1,"baths":1,"oc_status":0,"min_price":10000,"show_unit":1,"show_street":1,"show_floor":0,"show_plot":0,"label":"House #"},"26":{"beds":0,"baths":0,"oc_status":0,"min_price":10000,"show_unit":0,"show_street":0,"show_floor":0,"show_plot":0,"label":""},"27":{"beds":0,"baths":0,"oc_status":0,"min_price":10000,"show_unit":0,"show_street":1,"show_floor":0,"show_plot":1,"label":""},"":{"beds":1,"baths":1,"oc_status":0,"min_price":10000,"show_unit":1,"show_street":1,"show_floor":1,"show_plot":1,"label":"House #"}},"3":{"8":{"beds":1,"baths":1,"min_price":10000},"9":{"beds":1,"baths":1,"min_price":10000},"11":{"beds":0,"baths":0,"min_price":10000},"12":{"beds":0,"baths":0,"min_price":10000},"13":{"beds":1,"baths":1,"min_price":10000},"14":{"beds":1,"baths":1,"min_price":10000},"15":{"beds":0,"baths":1,"min_price":10000},"17":{"beds":0,"baths":0,"min_price":10000},"18":{"beds":1,"baths":1,"min_price":10000},"16":{"beds":1,"baths":1,"min_price":10000},"19":{"beds":0,"baths":0,"min_price":10000},"20":{"beds":1,"baths":1,"min_price":10000},"21":{"beds":1,"baths":1,"min_price":10000},"22":{"beds":1,"baths":1,"min_price":10000},"23":{"beds":0,"baths":0,"min_price":10000},"24":{"beds":1,"baths":1,"min_price":10000},"25":{"beds":1,"baths":1,"min_price":10000},"26":{"beds":0,"baths":0,"min_price":10000},"27":{"beds":0,"baths":0,"min_price":10000},"":{"beds":1,"baths":1,"min_price":10000}}};
	city_area_unit = {"default":"Sq. Ft.","1":"Marla","2":"Square Yards","4":"Square Meters"};
	var agency_user_quota = {};
	agency_user_quota[1001388906] = {"name":"Muhammad Rizwan Akhtar","userid":"1001388906","unlimited_rent_listings":0,"premium_user":0,"auto_approve_listing":0,"hot_quota":0,"used_hot":0,"remaining_hot":0,"remaining_super_hot":0,"total_sale":1,"total_rent":0,"total_used":1,"quota_standard":5,"extended_basic":5,"remaining_total_qouta":4,"remaining_basic_1":0,"remaining_basic_2":4,"remaining_basic_3":9999999};
	quota_array = {"premium_user":0,"1":false,"2":true,"3":true};
	ajax_location_url = "https://profolio.zameen.com/v3/cache/js/locations";
	ajax_cache_ver = "1652932691";
	step_value = "1";
	paths.images_css = this_domain + "/images/common";
	mapbox_api = "pk.eyJ1IjoiZGV2emFtZWVuIiwiYSI6ImNrMXEzYWVzeDEwaTEzb3RpNGN3dm5xZWoifQ.8uE-PyKCVPtoyeMmNJsPWg";
	default_area_unit = "Sq. Ft.";
	var cuipplf = 0;
	var is_new_olx_system =  0;
    zone_city_id = "";
    zn_cross_city_restriction = 0;
    olx_cross_city_restriction = 0;
    zn_quota_checkbox_enabled = 1;
    olx_quota_checkbox_enabled = 1;
</script>
<input type="hidden" id="is_new_olx_system" name="is_new_olx_system" value="">
	<script type="text/javascript">
	var edit_property_page = 0;
	var posted_on_olx = 0;
	var posted_on_zameen = 0;
	</script>

<div id="add_prop_main" class="add_prop_main step_1 purpose_ AdvanceSubmision" >

<div class="add_property_page step_1 purpose_ ">
	
			<div class="clearfix"></div>
		<div class="post-listing-credit-box" style="display: none;">
			<h3>You do not have credits available on any platforms.</h3>
			<p>Call the numbers below to buy more quota for the platforms provided below.</p>
			<div class="contact-credit-info">
				<div class="zameen-details">
					<div>
						<img src="https://assets.zameen.com/profolio/images/post_listing_credit_box_zlogo1_1.svg" width="110" alt="zameen.com">
					</div>
					<div class="number">
						Buy now or call<br/><b>0800-ZAMEEN (92633)</b>
					</div>
					<a href="https://profolio.zameen.com/profolio/index.php?tabs=13&section=advertise" class="buy-more-btn">Buy More</a>
				</div>
				<div class="olx-details">
					<div>
						<img src="https://assets.zameen.com/profolio/images/post_listing_credit_box_olx_logo1_1.svg"  width="27" alt="OLX">
					</div>
					<div class="number">
						Call to buy more quota<br/><b>0800-ZAMEEN (92633)</b>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
		<form class="add_property add_property_form singleForm clr" method="post" autocomplete="off" onsubmit="return validate_form()" action="" >
		<div class="message_box" id="error_message_box" style="padding-bottom: 10px;padding-top: 13px;display:none">
			<div id='msg_box' class='error' style=''><span class='icon_error' ></span><ul class='items  single'><li></li></ul></div>		</div>
		<div>
			<input type="hidden" id="hidden_buy_credits" name="buy_credits" value="0">
			<input type="hidden" id="hidden_rent_credits" name="rent_credits" value="0">
		</div>
				<div class="subhead font_s ros subhead1">Purpose, Property Type and Location</div>
		<div class="divrow" >
			<label class="label l font_s">Purpose: <img src='https://profolio.zameen.com/images/common/asteriskred.gif' /></label>
<ul  id='purpose_push_buttons' class='l push_buttons'>
				<input type='hidden' name='purpose' id='purpose' value='1' />
				
			<li class='l pushBtnLabel checked' id='purpose_label_1' onclick='pushBtnClick(this,"purpose","1")' title='For Sale' >
				<span class='span'>For Sale</span>
			</li> 
			<li class='l pushBtnLabel ' id='purpose_label_2' onclick='pushBtnClick(this,"purpose","2")' title='Rent' >
				<span class='span'>Rent</span>
			</li> 
			</ul>		</div>
		<div class="divrow div_wantedfor" style="display:none">
			<label class="label l font_s">Wanted For: </label>
<ul  id='wanted_for_push_buttons' class='l push_buttons'>
				<input type='hidden' name='wanted_for' id='wanted_for' value='' />
				
			<li class='l pushBtnLabel ' id='wanted_for_label_Buy' onclick='pushBtnClick(this,"wanted_for","Buy")' title='Buy' >
				<span class='span'>Buy</span>
			</li> 
			<li class='l pushBtnLabel ' id='wanted_for_label_Rent' onclick='pushBtnClick(this,"wanted_for","Rent")' title='Rent' >
				<span class='span'>Rent</span>
			</li> 
			</ul>		</div>
		<div class="divrow" >
			<label class="label l font_s">Property Type: <img src='https://profolio.zameen.com/images/common/asteriskred.gif' /></label>
<ul  id='ptype_push_buttons' class='l push_buttons'>
				<input type='hidden' name='ptype' id='ptype' value='' />
				
			<li class='l pushBtnLabel ' id='ptype_label_1' onclick='pushBtnClick(this,"ptype","1")' title='Homes' >
				<span class='span'>Homes</span>
			</li> 
			<li class='l pushBtnLabel ' id='ptype_label_2' onclick='pushBtnClick(this,"ptype","2")' title='Plots' >
				<span class='span'>Plots</span>
			</li> 
			<li class='l pushBtnLabel ' id='ptype_label_3' onclick='pushBtnClick(this,"ptype","3")' title='Commercial' >
				<span class='span'>Commercial</span>
			</li> 
			</ul>		</div>
		<div class="divrow div_type" style="display:none" >
			<label class="label l font_s">&nbsp;</label>
			<div class="l" id="sub_type_box"></div>
		</div>
		
		<!-- /////////////////////CITY///////////////////////// -->
		<div class="divrow zameen-city-box">
			<label class="label l font_s">City: <img src='https://profolio.zameen.com/images/common/asteriskred.gif' /></label>
<div class=''><select  name='city' onchange='onchange_city(this)'  id='city'><option value=''   selected >Select City</option><option value='3'   >Islamabad</option><option value='2'   >Karachi</option><option value='1'   >Lahore</option><option value='41'   >Rawalpindi</option><option value='385'   >Abbottabad</option><option value='10594'   >Abdul Hakim</option><option value='12360'   >Ahmedpur East</option><option value='18624'   >Ali Masjid</option><option value='10242'   >Alipur</option><option value='9517'   >Arifwala</option><option value='1763'   >Astore</option><option value='1233'   >Attock</option><option value='1761'   >Awaran</option><option value='8857'   >Badin</option><option value='966'   >Bagh</option><option value='557'   >Bahawalnagar</option><option value='23'   >Bahawalpur</option><option value='14226'   >Balakot</option><option value='1735'   >Bannu</option><option value='13977'   >Barnala</option><option value='13808'   >Batkhela</option><option value='17727'   >Battagram</option><option value='1720'   >Bhakkar</option><option value='11142'   >Bhalwal</option><option value='1749'   >Bhimber</option><option value='11286'   >Buner</option><option value='1059'   >Burewala</option><option value='1747'   >Chaghi</option><option value='751'   >Chakwal</option><option value='11420'   >Charsadda</option><option value='8860'   >Chichawatni</option><option value='17728'   >Chilas</option><option value='1469'   >Chiniot</option><option value='17729'   >Chishtian</option><option value='10512'   >Chishtian Sharif</option><option value='1731'   >Chitral</option><option value='14284'   >Choa Saidan Shah</option><option value='1061'   >Chunian</option><option value='1727'   >Dadu</option><option value='11967'   >Daharki</option><option value='1509'   >Daska</option><option value='13599'   >Daur</option><option value='9178'   >Depalpur</option><option value='26'   >Dera Ghazi Khan</option><option value='8244'   >Dera Ismail Khan</option><option value='10645'   >Dijkot</option><option value='12718'   >Dina</option><option value='14195'   >Dobian</option><option value='8474'   >Duniya Pur</option><option value='1737'   >FATA</option><option value='16'   >Faisalabad</option><option value='1293'   >Fateh Jang</option><option value='10894'   >Gaarho</option><option value='19047'   >Gaddani</option><option value='11915'   >Gadoon</option><option value='8119'   >Galyat</option><option value='18016'   >Gambat</option><option value='13272'   >Ghakhar</option><option value='17730'   >Ghanche</option><option value='636'   >Gharo</option><option value='17768'   >Ghizar</option><option value='8810'   >Ghotki</option><option value='1753'   >Gilgit</option><option value='10281'   >Gojra</option><option value='8338'   >Gujar Khan</option><option value='327'   >Gujranwala</option><option value='20'   >Gujrat</option><option value='389'   >Gwadar</option><option value='1714'   >Hafizabad</option><option value='13607'   >Hala</option><option value='11739'   >Hangu</option><option value='11634'   >Harappa</option><option value='1048'   >Haripur</option><option value='1152'   >Haroonabad</option><option value='9687'   >Hasilpur</option><option value='399'   >Hassan Abdal</option><option value='10402'   >Haveli Lakha</option><option value='12823'   >Hazro</option><option value='9844'   >Hub Chowki</option><option value='13569'   >Hujra Shah Muqeem</option><option value='1546'   >Hunza</option><option value='30'   >Hyderabad</option><option value='3'   >Islamabad</option><option value='32'   >Jacobabad</option><option value='11126'   >Jahanian</option><option value='11026'   >Jalalpur Jattan</option><option value='10484'   >Jampur</option><option value='1178'   >Jamshoro</option><option value='17731'   >Jandola</option><option value='13706'   >Jatoi</option><option value='8511'   >Jauharabad</option><option value='1142'   >Jhang</option><option value='19'   >Jhelum</option><option value='9873'   >Kabirwala</option><option value='9202'   >Kaghan</option><option value='10279'   >Kahror Pakka</option><option value='1750'   >Kalat</option><option value='10416'   >Kamalia</option><option value='10346'   >Kamoki</option><option value='13611'   >Kandiaro</option><option value='2'   >Karachi</option><option value='9484'   >Karak</option><option value='544'   >Kasur</option><option value='8806'   >Khairpur</option><option value='1685'   >Khanewal</option><option value='10168'   >Khanpur</option><option value='17732'   >Khaplu</option><option value='1305'   >Kharian</option><option value='12390'   >Khipro</option><option value='8510'   >Khushab</option><option value='1757'   >Khuzdar</option><option value='1430'   >Kohat</option><option value='17733'   >Kohistan</option><option value='9749'   >Kot Addu</option><option value='968'   >Kotli</option><option value='8591'   >Kotri</option><option value='1'   >Lahore</option><option value='10205'   >Lakki Marwat</option><option value='9837'   >Lalamusa</option><option value='17734'   >Landi Kotal</option><option value='586'   >Larkana</option><option value='548'   >Lasbela</option><option value='1661'   >Layyah</option><option value='11406'   >Liaquatpur</option><option value='9872'   >Lodhran</option><option value='1742'   >Loralai</option><option value='10482'   >Lower Dir</option><option value='9422'   >Mailsi</option><option value='1767'   >Makran</option><option value='1384'   >Malakand</option><option value='1496'   >Mandi Bahauddin</option><option value='14350'   >Mangla</option><option value='771'   >Mansehra</option><option value='440'   >Mardan</option><option value='8606'   >Matiari</option><option value='14120'   >Matli</option><option value='9636'   >Mian Channu</option><option value='8310'   >Mianwali</option><option value='13476'   >Mingora</option><option value='17735'   >Miran Shah</option><option value='1349'   >Mirpur</option><option value='1558'   >Mirpur Khas</option><option value='10893'   >Mirpur Sakro</option><option value='13421'   >Mitha Tiwana</option><option value='13603'   >Moro</option><option value='15'   >Multan</option><option value='8116'   >Muridke</option><option value='36'   >Murree</option><option value='977'   >Muzaffarabad</option><option value='1722'   >Muzaffargarh</option><option value='1687'   >Nankana Sahib</option><option value='1258'   >Naran</option><option value='541'   >Narowal</option><option value='14962'   >Nasar Ullah Khan Town</option><option value='1752'   >Nasirabad</option><option value='8801'   >Naushahro Feroze</option><option value='1704'   >Nawabshah</option><option value='1741'   >Neelum</option><option value='1424'   >Nowshera</option><option value='470'   >Okara</option><option value='1716'   >Pakpattan</option><option value='17736'   >Pallandri</option><option value='17737'   >Parachinar</option><option value='17168'   >Pasrur</option><option value='8197'   >Pattoki</option><option value='17'   >Peshawar</option><option value='10678'   >Pind Dadan Khan</option><option value='975'   >Pindi Bhattian</option><option value='9508'   >Pir Mahal</option><option value='17711'   >Poonch</option><option value='13617'   >Qazi Ahmed</option><option value='18'   >Quetta</option><option value='40'   >Rahim Yar Khan</option><option value='17707'   >Raiwind</option><option value='14271'   >Rajana</option><option value='9645'   >Rajanpur</option><option value='17738'   >Rato Dero</option><option value='9027'   >Ratwal</option><option value='976'   >Rawalkot</option><option value='41'   >Rawalpindi</option><option value='8151'   >Renala Khurd</option><option value='1725'   >Rohri</option><option value='9538'   >Sadiqabad</option><option value='782'   >Sahiwal</option><option value='13438'   >Sakrand</option><option value='10632'   >Samundri</option><option value='8609'   >Sanghar</option><option value='8563'   >Sangla Hill</option><option value='1034'   >Sarai Alamgir</option><option value='778'   >Sargodha</option><option value='8607'   >Sehwan</option><option value='13211'   >Shabqadar</option><option value='9029'   >Shahdadpur</option><option value='8552'   >Shahkot</option><option value='13614'   >Shahpur Chakar</option><option value='12170'   >Shakargarh</option><option value='17739'   >Shangla</option><option value='13703'   >Shehr Sultan</option><option value='44'   >Sheikhupura</option><option value='13570'   >Sher Garh</option><option value='8808'   >Shikarpur</option><option value='10334'   >Shorkot</option><option value='480'   >Sialkot</option><option value='1744'   >Sibi</option><option value='1545'   >Skardu</option><option value='1745'   >Sudhnoti</option><option value='14329'   >Sujawal</option><option value='45'   >Sukkur</option><option value='3094'   >Swabi</option><option value='1506'   >Swat</option><option value='12137'   >Talagang</option><option value='9028'   >Tando Adam</option><option value='11315'   >Tando Allahyar</option><option value='11700'   >Tando Bago</option><option value='13166'   >Tando Muhammad Khan</option><option value='17740'   >Tank</option><option value='464'   >Taxila</option><option value='12439'   >Tharparkar</option><option value='1729'   >Thatta</option><option value='1658'   >Toba Tek Singh</option><option value='17741'   >Torkham</option><option value='12271'   >Turbat</option><option value='17742'   >Umarkot</option><option value='17743'   >Upper Dir</option><option value='1432'   >Vehari</option><option value='459'   >Wah</option><option value='17744'   >Wana</option><option value='1395'   >Wazirabad</option><option value='1765'   >Waziristan</option><option value='12504'   >Yazman</option><option value='1739'   >Zhob</option></select></div>            <div class="city_rest_tooltip" style="position: relative; top: -20px; left: 245px; display: none;"><img class="bgc" src="https://profolio.zameen.com/images/common/exclamation.gif" onmouseover="city_restriction_tooltip(this, 'Cross city restriction applied. You can post to specific platform only.');"></div>
		</div>
		
		<div class="divrow" >
			<label class="label l font_s">Location: <img src='https://profolio.zameen.com/images/common/asteriskred.gif' /></label>
					<div id="location_id_sel_box" class="l autofill cls_rtl sb_text_new" >
				<input type="text" id="location_id_input" class="autofilter disabled" data-value="" value="Then enter location here ..." disabled="disabled" />
			</div>
			<input type="hidden" id="location_id_data" value='{"disabled_txt":"Then enter location here ...","default_txt":"Enter location here ...","keyboard":1}' />
			
			<input type="hidden" id="last_location" name="last_location" value="" />
						<div class=" empty_city" id="loc_selector_row" >
				<label class="label l font_s">or</label>
				<input type="hidden" id="loc_selector" name="loc_selector" value="" />
				<div id="cat_selector" class="l cat_selector">
<span id='_cat_selector_0_sel_box' class='sb_combo sel_box ' style='width:210px' ><select name='_cat_selector_0'  id='_cat_selector_0' style='width:211px;'  autocomplete='off' ><option value=''   selected >Select from list</option></select><span id='_cat_selector_0_txt' class='txt'>Select from list</span>
						<span class='bgc sb_combo_arrow r'>&nbsp;</span>
					</span>					<span class="container"></span>
				</div>
			</div>
			
		</div>
		<span class="sboxarrow" style="display:none">&raquo;</span>
		<!-- ADDRESS -->
		<div class="divrow field_detailed" id="div_address" style="display:none">
			<label class="label l font_s">Address: </label>
			<span class="l span" id="sp_unit">
				<label class="l label1" id="lb_unit" >Unit #</label>
				<input type='text' name='unit_no' id='unit_no' value='' style='width:76px;'  class='rfield l '  />			</span>
			<span class="l span" id="sp_street">
				<label class="l label1">Street #</label>
				<input type='text' name='street_no' id='street_no' value='' style='width:76px;'  class='rfield l '  />			</span>
			<span class="l span" id="sp_floor">
				<label class="l label1">Floor #</label>
				<input type='text' name='floor_no' id='floor_no' value='' style='width:76px;'  class='rfield l '  />			</span>
			<span class="l span" id="sp_plot">
				<label class="l label1">Plot #</label>
				<input type='text' name='plot_no' id='plot_no' value='' style='width:76px;'  class='rfield l '  />			</span>
		</div>
		<!-- MAP -->
		<div class="divrow" id="map_div" style="display:none">
			<div class="l span_breadcrumb label1" id="span_breadcrumb"></div>
			<label class="label l font_s clr">Map Pin:</label>
			<a class="link_select_loc l" onclick="show_map_enlarged({map_field_id:'map_field'})" rel="nofollow" title="Click the map to select your location">
				<img id="small_map" />
			</a>
			<span class="l map_msg_inline" id="map_msg_inline"></span>
			<script type="text/javascript">
			$(document).ready(function(){
				google_image('#small_map',{ latitude : '', longitude : '', zoom : 17 });
			});
			</script>
			<input type="hidden" id="map_field"  value="zoom=16&call_back=map_select_default&small_map=#small_map" autocomplete="off" />
			<input type="hidden" id="default_params" value="zoom=16&call_back=map_select_default&small_map=#small_map" autocomplete="off" />
			<input type="hidden" name="mylatitude" id="mylatitude" value="" autocomplete="off" />
			<input type="hidden" name="mylongitude" id="mylongitude" value="" autocomplete="off" />
		</div>

		<div class="subhead font_s ros subhead2" id="property_box_heading">PROPERTY SPECS AND PRICE</div>
		<div class="divrow">
			<label class="label l font_s">Area Size: <img src='https://profolio.zameen.com/images/common/asteriskred.gif' /> </label>
			<input type='text' name='area' id='area' value='' style='width:135px;'  class='rfield l '  />			<label class="label_inline l font_s">Unit: </label>
<span id='unit_sel_box' class='sb_combo sel_box ' style='width:135px' ><select name='unit'  id='unit' style='width:136px;'  autocomplete='off' ><option value='Square Feet'   selected >Square Feet</option><option value='Square Meters'   >Square Meters</option><option value='Square Yards'   >Square Yards</option><option value='Marla'   >Marla</option><option value='Kanal'   >Kanal</option></select><span id='unit_txt' class='txt'>Square Feet</span>
						<span class='bgc sb_combo_arrow r'>&nbsp;</span>
					</span>			<span class='bgc infologo2' onmouseover="land_convert_txt2(this,'')" >Area Calculator</span>			<input type="hidden" id="db_area" value="" />
			<input type="hidden" id="db_unit" value="Square Feet" />
		</div>

		<div class="divrow div_beds" id="div_beds">
			<label class="label l font_s">Bedrooms:</label>
<span id='beds_sel_box' class='sb_combo sel_box ' style='width:150px' ><select name='beds'  id='beds' style='width:151px;'  autocomplete='off' ><option value=''   selected >Please Select</option><option value='-1'   >Studio</option><option value='1'   >1</option><option value='2'   >2</option><option value='3'   >3</option><option value='4'   >4</option><option value='5'   >5</option><option value='6'   >6</option><option value='7'   >7</option><option value='8'   >8</option><option value='9'   >9</option><option value='10'   >10</option><option value='11'   >10+</option></select><span id='beds_txt' class='txt'>Please Select</span>
						<span class='bgc sb_combo_arrow r'>&nbsp;</span>
					</span>		</div>
		<div class="divrow div_bathrooms" id="div_bathrooms">
			<label class="label l font_s">Bathrooms:</label>
<span id='baths_sel_box' class='sb_combo sel_box ' style='width:150px' ><select name='baths'  id='baths' style='width:151px;'  autocomplete='off' ><option value=''   selected >Please Select</option><option value='1'   >1</option><option value='2'   >2</option><option value='3'   >3</option><option value='4'   >4</option><option value='5'   >5</option><option value='6'   >6</option><option value='7'   >7</option><option value='8'   >8</option><option value='9'   >9</option><option value='10'   >10</option></select><span id='baths_txt' class='txt'>Please Select</span>
						<span class='bgc sb_combo_arrow r'>&nbsp;</span>
					</span>		</div>


		<div class="divrow div_oc_status field_detailed" id="div_oc_status">
			<label class="label l font_s">Occupancy Status:</label>
<span id='occupancy_status_sel_box' class='sb_combo sel_box ' style='width:150px' ><select name='occupancy_status'  id='occupancy_status' style='width:151px;'  autocomplete='off' ><option value=''   selected >Please Select</option><option value='vacant'   >Vacant</option><option value='rented'   >Occupied</option></select><span id='occupancy_status_txt' class='txt'>Please Select</span>
						<span class='bgc sb_combo_arrow r'>&nbsp;</span>
					</span>			<span class="ib span_rented_till" id="span_rented_till">
			<label class="label l font_s" style="width: auto; margin: 0px 6px;">Occupied Till:</label>
<span id='occupancymonth_sel_box' class='sb_combo sel_box ' style='width:102px' ><select name='occupancymonth'  id='occupancymonth' style='width:103px;'  autocomplete='off' ><option value='01'   selected >Jan</option><option value='02'   >Feb</option><option value='03'   >Mar</option><option value='04'   >Apr</option><option value='05'   >May</option><option value='06'   >Jun</option><option value='07'   >Jul</option><option value='08'   >Aug</option><option value='09'   >Sep</option><option value='10'   >Oct</option><option value='11'   >Nov</option><option value='12'   >Dec</option></select><span id='occupancymonth_txt' class='txt'>Jan</span>
						<span class='bgc sb_combo_arrow r'>&nbsp;</span>
					</span><span id='occupancyyear_sel_box' class='sb_combo sel_box ' style='width:102px' ><select name='occupancyyear'  id='occupancyyear' style='width:103px;'  autocomplete='off' ><option value='2022'   selected >2022</option><option value='2023'   >2023</option><option value='2024'   >2024</option><option value='2025'   >2025</option><option value='2026'   >2026</option><option value='2027'   >2027</option><option value='2028'   >2028</option><option value='2029'   >2029</option><option value='2030'   >2030</option><option value='2031'   >2031</option><option value='2032'   >2032</option><option value='2033'   >2033</option><option value='2034'   >2034</option><option value='2035'   >2035</option><option value='2036'   >2036</option><option value='2037'   >2037</option><option value='2038'   >2038</option><option value='2039'   >2039</option><option value='2040'   >2040</option><option value='2041'   >2041</option><option value='2042'   >2042</option></select><span id='occupancyyear_txt' class='txt'>2022</span>
						<span class='bgc sb_combo_arrow r'>&nbsp;</span>
					</span>			</span>
		</div>

		<div class="divrow price_div">
			<label class="label l font_s pheading display-block" >Total Price: <img src='https://profolio.zameen.com/images/common/asteriskred.gif' /> </label>
			<input type='text' name='price' id='price' value='' style='width:228px;'  class='rfield l '  />		</div>
		<div class="divrow price_div">
			<label class="label l font_s">&nbsp;</label>
			<span class="l price_text txtfont ltr">&nbsp;</span>
		</div>

		<div class="divrow div_instalments">
			<label class="label l font_s">Installments Available: </label>
			<ul id="instalment_status_push_buttons" class="l push_buttons">
				<input type="hidden" name="instalment_status" id="instalment_status" value="">
				<li class="l pushBtnLabel instalment_status " onclick="show_instalment_boxes(this)"  style="border-radius: 4px;">
					<span class="span">Property on Installment</span>
				</li> 
			</ul>
		</div>
		<div class="instalments-box " style="display: none;">
			<div class="divrow ">
				<label class="label l font_s pheading display-block">Advance/Initial Payment: <img src='https://profolio.zameen.com/images/common/asteriskred.gif' /> </label>
				<input type='text' name='adv_amount' id='adv_amount' value='' style='width:228px;'  class='rfield l '  />			</div>
			<div class="divrow">
				<label class="label l font_s pheading display-block" >No. of Remaining Installments: <img src='https://profolio.zameen.com/images/common/asteriskred.gif' /> </label>
				<input type='text' name='no_of_instalments' id='no_of_instalments' value='' style='width:228px;'  class='rfield l '  />			</div>
			<div class="divrow">
				<label class="label l font_s pheading display-block">Monthly Installment: <img src='https://profolio.zameen.com/images/common/asteriskred.gif' /> </label>
				<input type='text' name='monthly_instalments' id='monthly_instalments' value='' style='width:228px;'  class='rfield l '  />			</div>
		</div>	
		<div class="divrow div_possession">
			<label class="label l font_s display-block">Possession Available: </label>
			<ul id="possession_available_push_buttons" class="l push_buttons">
				<input type="hidden" name="possession_available" id="possession_available" value="">
				<li class="l pushBtnLabel possession_available " onclick="show_checkbox_icon(this)" title="Possession Available:" style="border-radius:4px;">
					<span class="span">Available</span>
				</li>
			</ul>
		</div>

				<div class="divrow field_detailed" style="display:block">
			<label class="label l font_s">Listing Expiry:</label>
<span id='expiry_days_sel_box' class='sb_combo sel_box ' style='width:150px' ><select name='expiry_days'  id='expiry_days' style='width:151px;'  autocomplete='off' ><option value='30'   selected >1 Month</option><option value='90'   >3 Months</option><option value='180'   >6 Months</option></select><span id='expiry_days_txt' class='txt'>1 Month</span>
						<span class='bgc sb_combo_arrow r'>&nbsp;</span>
					</span>		</div>

		<div class="divrow div_features" style="display:none">
			<label class="label l font_s">&nbsp;<span class="feature_label">Features:</span></label>
			<a class="l orng_smore popup_features" >Add Features</a>
		</div>

		<div class="divrow div_features" style="display:none">
			<label class="label l font_s">&nbsp;<span class="feature_label">Features:</span></label>
			<span class="l num_of_feature_text" > <span class='features_count'></span> Features Selected</span>
			<a class="l orng_smore popup_features" >Add More Features</a>
		</div>
		
		<div id="hfeatures"></div>

		<div class="divrow price-hide" id="price_notification" style="display: none;">
			<label class="label l font_s" >&nbsp;</label>
			<div class="notification_outer notification_default">
				<span class="notification_img"></span>
				<span class="notification_txt"></span>	
			</div>
		</div>

		<div id="rental_prices" style="display:none">
<div class="subhead font_s ros subhead3">Rental Price Details</div>
<div class="divrow" style="display:block">
	<label class="label l font_s">Minimum Contract Period:</label>
	<span id='txt_contract_period_sel_box' class='sb_combo sel_box ' style='width:150px' ><select name='txt_contract_period'  id='txt_contract_period' style='width:151px;'  autocomplete='off' ><option value=''   selected >Please Select</option><option value='1'   >1</option><option value='2'   >2</option><option value='3'   >3</option><option value='4'   >4</option><option value='5'   >5</option><option value='6'   >6</option><option value='7'   >7</option><option value='8'   >8</option><option value='9'   >9</option><option value='10'   >10</option><option value='11'   >11</option><option value='12'   >12</option></select><span id='txt_contract_period_txt' class='txt'>Please Select</span>
						<span class='bgc sb_combo_arrow r'>&nbsp;</span>
					</span><span id='sel_contract_period_sel_box' class='sb_combo sel_box ' style='width:150px' ><select name='sel_contract_period'  id='sel_contract_period' style='width:151px;'  autocomplete='off' ><option value=''   selected >Please Select</option><option value='year'   >Year</option><option value='month'   >Month</option></select><span id='sel_contract_period_txt' class='txt'>Please Select</span>
						<span class='bgc sb_combo_arrow r'>&nbsp;</span>
					</span></div>
<div class="divrow" style="display:block">
	<label class="label l font_s">Monthly Rent: <img src='https://profolio.zameen.com/images/common/asteriskred.gif' /></label>
	<input type='text' name='rental' id='rental' value='' style='width:136px;'  class='rfield l '  /></div>
<div class="divrow">
	<label class="label l font_s">&nbsp;</label>
	<span class="l price_text">&nbsp;</span>
</div>
<div class="divrow" style="display:block">
	<label class="label l font_s">Security Deposit:</label>

	<input type='text' name='security_deposit' id='security_deposit' value='' style='width:136px;'  onblur='rentalFieldsBlur(this);' class='rfield l '  />	<label class="label_inline l font_s">or</label>
	<input type='text' name='security_deposit_perc' id='security_deposit_perc' value='' style='width:85px;'  onblur='rentalFieldsBlur(this);' class='rfield l '  />	<label class="label_inline l font_s">number of month's rental amount </label>
</div>

<div class="divrow" style="display:block">
	<label class="label l font_s">Advance Rent:</label>
	<input type='text' name='advance_rent' id='advance_rent' value='' style='width:136px;'  onblur='rentalFieldsBlur(this);' class='rfield l '  />	<label class="label_inline l font_s">or</label>
	<input type='text' name='advance_rent_perc' id='advance_rent_perc' value='' style='width:85px;'  onblur='rentalFieldsBlur(this);' class='rfield l '  />	<label class="label_inline l font_s">number of month's rental amount </label>
</div>		</div>

		<div class="subhead font_s ros subhead2">Property Title and Description</div>
				<div class="divrow">
			<label class="label l font_s">Property Title: <img src='https://profolio.zameen.com/images/common/asteriskred.gif' /></label>
			<input type='text' name='title' id='title' value='' style='width:419px;'  class='rfield l ' placeholder = 'Enter property title here...' /><br>
			<div id="title_validation" >*Minimum of 5 characters required </div>
		</div>
		
		<div class="divrow">
			<label class="label l font_s">Description: <img src='https://profolio.zameen.com/images/common/asteriskred.gif' /></label>
			<textarea name="description" id="description" style="width:418px"  rows="5"  class="rfield l" placeholder="Enter property description here..." ></textarea><br>
			<div id="description_validation" >*Minimum of 20 characters required </div>
					</div>
		
<div id="UploadImages" class="uploaderbox uploaderbox_images UploadImages noItems" >
	<div class="subhead font_s ros subhead_img">Images</div>

	<div class="clr info_msg l drag_images_message" style="margin-bottom: 13px;">Drag & drop images to change order</div>
	<div class="clr info_msg l multipleuploader" style="margin-bottom: 13px;display:none">Please use firefox or chrome to upload multiple images at once</div>
	<ul class="list_sortable" id="images_list" data-sortable_selector = "#images_list" data-sortable_key = "img_order"></ul>

	<div class="clr" >
		<div class="filecontrol_images">
			<a id="add_more_images" class="l orng_smore mr-bt10 fileUpload">Add Images</a>
			<div class="info_msg l multiple_key_message">Press CTRL key while selecting images to upload multiple images at once</div>
			<input type="hidden" id="image_ids" name="image_ids" value="" autocomplete="off" />
            <a class="orng_smore get_image_bank clr l" onclick="get_from_bank(this,'get_image_bank')" data-title="My Image Bank" >Add image from image bank</a>
		</div>
		<div class="uploading_images" style="display:none" >
			<img class="l pleasewait" src="https://profolio.zameen.com/images/common/pleasewait.gif"  />
			<span class="l">Uploading. Please Wait...</span>
		</div>
	</div>
	<div class="clr message_box_files" style="display:none;"></div>
</div>
<script type="text/javascript">
$(document).ready( function() 
{
	path_uploader_images  = request_url_image+"&ajaxUpload=img";
	uploader_images = new plupload.Uploader({
		browse_button : 'add_more_images',
		url : path_uploader_images,
		filters : {
			mime_types: [ {title : "Image files", extensions : "jpg,gif,png,jpeg"} ]
		},
		resize: {
		  width: 800,
		  height: 800,
		  crop: false,
		  quality: 100		},
		init: {
			FilesAdded: function(up, files) {
				uploader_images.settings.url = path_uploader_images+"&edit_property="+edit_property_page;
				up.start();
			},
			StateChanged: function(up) {
				if(up.state==plupload.STARTED)
				{
					$(".filecontrol_images").hide();
					$(".uploading_images").show();
				}
				else
				{
					$(".filecontrol_images").show();
					$(".uploading_images").hide();
				}
			},
			FileUploaded: function(up,file,info){
				result = FileUploadedCallback(up, file, info, 'images');
				all_img_ids = result[4];
				if( all_img_ids )
				{
					$("#image_ids").val(all_img_ids);
				}
			},
            BeforeUpload: function (up) {
                up.settings.multipart_params = {
                    'image_ids' : $("#image_ids").val()
                };
            }
		}
	});
	uploader_images.init();
});
</script>
<script type="text/javascript">
	key = parseInt("0");
	image_upload_limit = parseInt("50");
</script><div id="Uploadvideos" class="uploaderbox Uploadvideos noItems" >
	<div class="subhead font_s ros subhead_img">Videos</div>

	    <div class="clr info_msg l drag_videos_message" style="margin-bottom: 13px;">Drag & drop videos to change order</div>
    <ul class="list_sortable" id="videos_list" data-sortable_selector = "#videos_list" data-sortable_key = "video_order">
			</ul>
	
			<li id='ListItem_' class='ListItem video_listing_zpt' style='display:none;' >
				<span class='num txtfont' >1</span>
				<div class='thumb2' >
					
				</div>
				<div class='l subdiv'>
					<div class='drow'>
						<span>Video Status:</span> <input type='text' class='rfield l video_status readonly' name='video_status[]' value='Pending' disabled/>
					</div>
					<div class='drow'>
						<span>Video Link:</span> <input type='text' class='rfield l' name='video_link[]' value='' />
						<span>Video Title:</span> <input type='text' class='rfield l' name='video_title[]' value='' />
					</div>
					<span class='l clr'>Video Host:</span> <select class='rfield l video_host_id' name='video_host[]' autocomplete='off' ><option value=''>Select</option><option  value='youtube' autocomplete='off'>Youtube</option><option  value='vimeo' autocomplete='off'>Vimeo</option><option  value='dailymotion' autocomplete='off'>Dailymotion</option><option  value='3d_view' autocomplete='off'>3D View</option></select>
					<a id='a_1' class='removeImg clr l onserver remove_video' onclick='remove_video("",this)'>Remove this Video</a>
					<input type='hidden' class='js_field'  name='video_id[]' value='' />
				</div>
			</li>	<div class="clr" >
		<div class="filecontrol">
			
			<a id="add_more_videos" onclick="check_image_count('add_more_videos')" class="l orng_smore">Add Videos</a>
		</div>
		<div class="uploading" style="display:none" >
			<img class="l pleasewait" src="https://profolio.zameen.com/images/common/pleasewait.gif"  />
			<span class="l">Uploading. Please Wait...</span>
		</div>
	</div>
	
	<input type="hidden" name="save_videos" value="1" />
</div>
<script type="text/javascript">
	key = parseInt("1");
	video_upload_limit = parseInt("10");
</script>
<div id="Uploaddocuments" class="uploaderbox uploaderbox_documents Uploaddocuments noItems" >
	<div class="subhead font_s ros subhead_img">Documents</div>

	    <div class="clr info_msg l drag_documents_message" style="margin-bottom: 13px;">Drag & drop documents to change order</div>
	<ul class="list_sortable" id="documents_list" data-sortable_selector = "#documents_list" data-sortable_key = "documents_order"></ul>

	<div class="clr message_box_files" style="display:none;"></div>
	<!-- <br /> -->
	<div class="clr" >
		<div class="filecontrol_documents">
			<a id="add_doc" class="l orng_smore">Add document</a>
			<div class="info_msg l multiple_key_message">Press CTRL key while selecting documents to upload multiple documents at once</div>
			<input type="hidden" id="document_ids" name="document_ids" value="" autocomplete="off" />
		</div>
		<div class="uploading_documents" style="display:none" >
			<img class="l pleasewait" src="https://profolio.zameen.com/images/common/pleasewait.gif"  />
			<span class="l">Uploading. Please Wait...</span>
		</div>
	</div>
	
	<input type="hidden" name="save_documents" value="1" />
</div>
<script type="text/javascript">
$(document).ready( function() 
{
	path_uploader_documents  = request_url+"&ajaxUploadDocs=1";
	uploader_documents = new plupload.Uploader({
		browse_button : 'add_doc',
		url : path_uploader_documents,
 		filters : {
			mime_types: [ {extensions : "jpg,gif,png,jpeg"} ]
		},
		init: {
			FilesAdded: function(up, files) {
				uploader_documents.settings.url = path_uploader_documents+"&edit_property="+edit_property_page;
				up.start();
			},
			StateChanged: function(up) {
				if(up.state==plupload.STARTED)
				{
					$(".filecontrol_documents").hide();
					$(".uploading_documents").show();
				}
				else
				{
					$(".filecontrol_documents").show();
					$(".uploading_documents").hide();
				}
			},
			FileUploaded: function(up,file,info){
				result = FileUploadedCallback(up, file, info, 'documents');
				all_doc_ids = result[4];
				if( all_doc_ids )
				{
					$("#document_ids").val(all_doc_ids);
				}
			},
            BeforeUpload: function (up) {
                up.settings.multipart_params = {
                    'document_ids' : $("#document_ids").val()
                };
            }
		}
	});
	uploader_documents.init();
});
</script>
<script type="text/javascript">
	key = parseInt("0");
	document_upload_limit = parseInt("50");
</script>
		<div class="subhead font_s ros subhead3">Contact Details</div>

				<div class="divrow">
					<label class="label l font_s">Listing Owner: </label>
<span id='listing_owner_sel_box' class='sb_combo sel_box ' style='width:242px' ><select name='listing_owner' onchange='listing_owner_change(this); '  id='listing_owner' style='width:243px;'  autocomplete='off' ><option value='1001388906'   selected >Myself</option></select><span id='listing_owner_txt' class='txt'>Myself</span>
						<span class='bgc sb_combo_arrow r'>&nbsp;</span>
					</span>					<a class="l add_price_breakdown" style="margin-left: 10px;" href="javascript:void(0)" onclick='show_users_list();'>Load user info</a>
				</div>

				<script type="text/javascript">
					agency_users_list = {"1001388906":{"userid":"1001388906","name":"Muhammad Rizwan Akhtar","email":"rizwan.13347@gmail.com","phone":null,"cell":null,"fax":null}};
				</script>
<div class="imz_dialog" id="users_list_dialog" style="display:none"> <!-- price_breakdown_dialog -->
	<div class="title_div">
		<span class="dialog_title">Users List</span>
		<span onclick="imz_filter.click()" class="dialog_close"></span>
	</div>
	<div class="dialog_container" id="pricedown_main">
		<div class="cluetip_div">
			<div class="rowdiv">
				<label class="pblabel">Select User</label>
				<select class='rfield l' id='users_list' name='users_list'><option value='1001388906'>Myself</option></select>			</div>

			<div class="rowdiv" style="">
				<label class="pblabel">&nbsp;</label>
				<span onclick="listing_owner_change_new($('#users_list'));" class="clr submit_button l bgdgry ros smargin">
					Load Info				</span>
			</div>
		</div>
	</div>
</div>			<div class="divrow">
				<label class="label l font_s">Contact Person: <img src='https://profolio.zameen.com/images/common/asteriskred.gif' /> </label>
				<input type='text' name='name' id='name' value='Muhammad Rizwan Akhtar' style='width:228px;'  class='rfield l '  />				<div class="bgc infologo r"><p>Please enter your first and last name respectively.</p></div>
			</div>
                <!--
                class put_cell_input_after_this added, the purpose of this class is just to put a new cell field after it through a js function, that is being called on select contact person
                dropdown
                -->
			<div class="divrow put_cell_input_after_this">
				<label class="label l font_s">Landline Phone #: </label>
				<span class="ph_input_box l">
<input type='text' name='phone0' id='phone0' value='' style='width:33px;'  maxlength='6' onfocus='overlib_info(this,"Enter your country code.&lt;br /&gt;Example: &lt;b class=red&gt;+92&lt;/b&gt;-51-1234567")' class='rfield l '  />				<label class="separator">-</label>
<input type='text' name='phone1' id='phone1' value='' style='width:33px;'  maxlength='6' onfocus='overlib_info(this,"Enter your area code.&lt;br /&gt;Example: +92-&lt;b class=red&gt;51&lt;/b&gt;-1234567")' class='rfield l '  />				<label class="separator">-</label>
<input type='text' name='phone2' id='phone2' value='' style='width:112px;'  maxlength='500' onfocus='overlib_info(this,"Enter your phone number.&lt;br /&gt;Example: +92-51-&lt;b class=red&gt;1234567&lt;/b&gt;")' class='rfield l '  />				</span>
				<div class="bgc infologo r"><p>Enter your phone (land line or fixed phone) number along with area and international dialing code.<br />Example: +92-51-12345678</p></div>
			</div>

				<div class="divrow cellinputs">
					<label class="label l font_s">Mobile #1: <img src='https://profolio.zameen.com/images/common/asteriskred.gif' /></label>
					<span class="ph_input_box l">
<input type='text' name='cell[]' id='cell1' value='' style='width:245px;'  maxlength='100' class='rfield l '  /><span id="valid-msg-cell1" class="valid-msg-cell" style="display: none"></span>
		                            <span id="error-msg-cell1" onmouseover="show_cell_message_tooltip(this)" class="error-msg-cell" style="display: none"></span>					</span>

					<div class="bgc infologo r"><p>Enter your mobile number along with international dialing code.<br />Example: +92-3001234567</p></div>
	                <a class="l add_price_breakdown add_new_cell_input_listing_form" id="add_cell_id" style="margin-left: 10px;" href="javascript:void(0)" onclick='add_new_cell_input_listing_form(this.id);'>Add Another Mobile Number</a>
                </div>


			<div class="divrow" >
				<label class="label l font_s">Email: <img src='https://profolio.zameen.com/images/common/asteriskred.gif' /></label>
				<input type='text' name='email' id='email' value='rizwan.13347@gmail.com' style='width:228px;'  class='rfield l '  />			</div>
			<input type="hidden" name="selector" value="0" id="selector" autocomplete="off" />
			<input type="hidden" name="userid" value="1001388906" id="userid" autocomplete="off" />
			<input type="hidden" name="step_value" id="step_value" value="1" autocomplete="off" />
						<input type="hidden" name="image_bank_ids" id="image_bank_ids" />
						<input type="hidden" name="main_img_id" id="main_img_id" />
			<input type="hidden" name="property_form_type" value="add" />
			<input type="submit" name="add_property" value="1" style="visibility: hidden; position: absolute;" />
		
			<div class="imz_dialog" id="popup_features" style="display:none">
				<div class="title_div">
					<span class="dialog_title">Add Features</span>
					<span onclick="imz_filter.click()" class="dialog_close"></span>
				</div>
				<div class="dialog_container"></div>
			</div>


		<div class="divrow btn-sec-bottom">
			<label class="label l font_s"> &nbsp;</label>
			<span style="display:none;" id="direct_submit" class="btn1 submit_button l bgdgry ros smargin" onclick="submit_button_click();">
				Submit Property			</span>
			<span class="btn1 submit_button l bgdgry ros smargin " onclick="check_premium_quota('direct_submit', 'add');">
				Submit Property			</span>
			
		</div>	

		</div>
	</form>
<div id='hidden_type_1' style='display:none'> <ul  id='type_push_buttons' class='l push_buttons'>
				<input type='hidden' name='type' id='type' value='' />
				
			<li class='l pushBtnLabel ' id='type_label_9' onclick='pushBtnClick(this,"type","9")' title='House' >
				<span class='span'>House</span>
			</li> 
			<li class='l pushBtnLabel ' id='type_label_8' onclick='pushBtnClick(this,"type","8")' title='Flat' >
				<span class='span'>Flat</span>
			</li> 
			<li class='l pushBtnLabel ' id='type_label_21' onclick='pushBtnClick(this,"type","21")' title='Upper Portion' >
				<span class='span'>Upper Portion</span>
			</li> 
			<li class='l pushBtnLabel ' id='type_label_22' onclick='pushBtnClick(this,"type","22")' title='Lower Portion' >
				<span class='span'>Lower Portion</span>
			</li> 
			<li class='l pushBtnLabel ' id='type_label_20' onclick='pushBtnClick(this,"type","20")' title='Farm House' >
				<span class='span'>Farm House</span>
			</li> 
			<li class='l pushBtnLabel ' id='type_label_24' onclick='pushBtnClick(this,"type","24")' title='Room' >
				<span class='span'>Room</span>
			</li> 
			<li class='l pushBtnLabel ' id='type_label_25' onclick='pushBtnClick(this,"type","25")' title='Penthouse' >
				<span class='span'>Penthouse</span>
			</li> 
			</ul></div> <div id='hidden_type_2' style='display:none'> <ul  id='type_push_buttons' class='l push_buttons'>
				<input type='hidden' name='type' id='type' value='' />
				
			<li class='l pushBtnLabel ' id='type_label_12' onclick='pushBtnClick(this,"type","12")' title='Residential Plot' >
				<span class='span'>Residential Plot</span>
			</li> 
			<li class='l pushBtnLabel ' id='type_label_11' onclick='pushBtnClick(this,"type","11")' title='Commercial Plot' >
				<span class='span'>Commercial Plot</span>
			</li> 
			<li class='l pushBtnLabel ' id='type_label_19' onclick='pushBtnClick(this,"type","19")' title='Agricultural Land' >
				<span class='span'>Agricultural Land</span>
			</li> 
			<li class='l pushBtnLabel ' id='type_label_27' onclick='pushBtnClick(this,"type","27")' title='Industrial Land' >
				<span class='span'>Industrial Land</span>
			</li> 
			<li class='l pushBtnLabel ' id='type_label_23' onclick='pushBtnClick(this,"type","23")' title='Plot File' >
				<span class='span'>Plot File</span>
			</li> 
			<li class='l pushBtnLabel ' id='type_label_26' onclick='pushBtnClick(this,"type","26")' title='Plot Form' >
				<span class='span'>Plot Form</span>
			</li> 
			</ul></div> <div id='hidden_type_3' style='display:none'> <ul  id='type_push_buttons' class='l push_buttons'>
				<input type='hidden' name='type' id='type' value='' />
				
			<li class='l pushBtnLabel ' id='type_label_13' onclick='pushBtnClick(this,"type","13")' title='Office' >
				<span class='span'>Office</span>
			</li> 
			<li class='l pushBtnLabel ' id='type_label_15' onclick='pushBtnClick(this,"type","15")' title='Shop' >
				<span class='span'>Shop</span>
			</li> 
			<li class='l pushBtnLabel ' id='type_label_17' onclick='pushBtnClick(this,"type","17")' title='Warehouse' >
				<span class='span'>Warehouse</span>
			</li> 
			<li class='l pushBtnLabel ' id='type_label_14' onclick='pushBtnClick(this,"type","14")' title='Factory' >
				<span class='span'>Factory</span>
			</li> 
			<li class='l pushBtnLabel ' id='type_label_16' onclick='pushBtnClick(this,"type","16")' title='Building' >
				<span class='span'>Building</span>
			</li> 
			<li class='l pushBtnLabel ' id='type_label_18' onclick='pushBtnClick(this,"type","18")' title='Other' >
				<span class='span'>Other</span>
			</li> 
			</ul></div> </div>
<script type="text/javascript">
	property_type = 0;
	old_purpose = '';
	$(document).ready(function(){
		property_type = $("#type").val();
		$("#price,#area,#rental").keyup();
		$("#rental").change();//COMMENT: rental fields onblur
		pushBtnClick( "purpose" );
		pushBtnClick( "ptype" );
		pushBtnClick( "type" );
	});
	error_messages={};
		error_messages["purpose"] = "Please select purpose";
				error_messages["wanted_for"] = "Please select wanted for";
				error_messages["type"] = "Please select property type";
				error_messages["city"] = "Please select city";
				error_messages["cat_id"] = "Please select location";
				error_messages["location_id"] = "Please select location";
				error_messages["phone"] = "Please specify phone";
				error_messages["phone0"] = "Please specify country code";
				error_messages["phone1"] = "Please specify area code";
				error_messages["phone2"] = "Please specify phone";
				error_messages["title"] = "Please specify title";
				error_messages["title_limit"] = "Title must be 5 characters";
				error_messages["description"] = "Please specify description";
				error_messages["description_limit"] = "Description must be 20 characters";
				error_messages["price1"] = "Please specify total price";
				error_messages["min_price"] = "Please specify valid total price";
				error_messages["min_rental"] = "Please specify valid monthly rent";
				error_messages["landarea"] = "Please specify valid area";
				error_messages["price2"] = "Please specify monthly rent";
				error_messages["price3"] = "Please specify budget";
				error_messages["area"] = "Please specify area";
				error_messages["name"] = "Please specify contact person.";
				error_messages["cell"] = "Please specify contact person cell number.";
				error_messages["cell_val_err"] = "Please specify correct contact person cell number.";
				error_messages["email"] = "Please specify email.";
				error_messages["email_format"] = "Your email address does not follow the basic format.";
				error_messages["file_name"] = "Please specify image title";
				error_messages["file"] = "Please specify image file";
				error_messages["login"] = "Please specify login";
				error_messages["password"] = "Please specify password";
				error_messages["security_code"] = "Please specify security code";
				error_messages["fullname"] = "Please specify name";
				error_messages["client_email"] = "Please specify client email";
				error_messages["client_email_format"] = "Client email address does not follow the basic format.";
				error_messages["client_name"] = "Please specify client name";
				error_messages["client_type"] = "Please specify client type";
				error_messages["olx_api_error"] = "Something went wrong, Please try again later!";
				error_messages["platform_select"] = "Please select atleast 1 platform";
				error_messages["instalment_status"] = "Please select installments available";
				error_messages["possession_available"] = "Please select possession available";
				error_messages["adv_amount"] = "Please specify advance amount";
				error_messages["monthly_instalments"] = "Please specify monthly installments";
				error_messages["no_of_instalments"] = "Please specify no. of installments";
				error_messages["adv_amount_greater"] = "Advance amount should be less than the total price";
				error_messages["monthly_instalments_greater"] = "Installment amount can not be greater than the remaining amount";
		</script>
	<span class="hot_listings_txt" style="display: none;" >Hot listings generate <b>400% more exposure</b> and response as compared to basic listings<br /><br />Displayed on <b>home page</b> as featured properties with <b>top ranks</b> and positions in their respective categories<br><br>Please contact your Account Manager or Zameen.com's Customer Service to purchase Super Hot/Hot listing credits.</span>
	<span class="olx_feature_txt" style="display: none;" >Get noticed with 'FEATURED' tag in a top position and attract more buyers.</span>
	<span class="mark_feature_pending_txt" style="display: none;" >Listing can't be make featured in pending state.</span>
	<span class="super_hot_listings_txt" style="display: none;" >Super Hot listings offer 5 times more exposure compared to Hot Listings, and 20 times more exposure than basic listings.<br><br>Every Super Hot listing comes with the option to get videos made and photos taken of your property by Zameen.com’s expert team.<br><br>Enjoy top ranks in searches, receive exponentially increased response, and sell or rent out your properties quicker than ever.<br><br>Please contact your Account Manager or Zameen.com's Customer Service to purchase Super Hot/Hot listing credits.</span>

	<div class="jeffi_task" style="display: none;" >
		<div class="message_box_popup" style="margin-bottom: 10px;margin-top: 13px;display:none"></div>
		<form id="jeffi_task_form" style="height:240px" >
			Zameen.com provides a special photography and videography service for your properties with Super Hot Listings. Please choose which of these services, or both, you would like to avail:<br><br>			<input type="checkbox" id="check_photo" name="check_photo" /><label for="check_photo"><b>Photography</b></label><br>
			<input type="checkbox" id="check_video" name="check_video" /><label for="check_video"><b>Videography</b></label><br><br>
			<div>Please choose a date and time for our Media Associate to visit your property using the panel below (this service is not available on Saturdays and Sundays):</div><br>
			<b>Appointment Date</b>
			<input type="text" class="date_added_jeffi" name="date_added_jeffi" id="date_added_jeffi" style="margin-left:15px" ><br><br>
			<center>
				<span class="bg_orng" onclick="submit_jeffi_task();">Yes</span>&nbsp;
				<span class="bg_orng" onclick="hide_popup();">No</span>
			</center>
		</form>
		<br>
	</div>
</div>
<script type="text/javascript">
	var city_combo_dropdown1 = "<option value='' selected>Select City</option><option value='3'   >Islamabad</option><option value='2'   >Karachi</option><option value='1'   >Lahore</option><option value='41'   >Rawalpindi</option><option value='385'   >Abbottabad</option><option value='10594'   >Abdul Hakim</option><option value='12360'   >Ahmedpur East</option><option value='18624'   >Ali Masjid</option><option value='10242'   >Alipur</option><option value='9517'   >Arifwala</option><option value='1763'   >Astore</option><option value='1233'   >Attock</option><option value='1761'   >Awaran</option><option value='8857'   >Badin</option><option value='966'   >Bagh</option><option value='557'   >Bahawalnagar</option><option value='23'   >Bahawalpur</option><option value='14226'   >Balakot</option><option value='1735'   >Bannu</option><option value='13977'   >Barnala</option><option value='13808'   >Batkhela</option><option value='17727'   >Battagram</option><option value='1720'   >Bhakkar</option><option value='11142'   >Bhalwal</option><option value='1749'   >Bhimber</option><option value='11286'   >Buner</option><option value='1059'   >Burewala</option><option value='1747'   >Chaghi</option><option value='751'   >Chakwal</option><option value='11420'   >Charsadda</option><option value='8860'   >Chichawatni</option><option value='17728'   >Chilas</option><option value='1469'   >Chiniot</option><option value='17729'   >Chishtian</option><option value='10512'   >Chishtian Sharif</option><option value='1731'   >Chitral</option><option value='14284'   >Choa Saidan Shah</option><option value='1061'   >Chunian</option><option value='1727'   >Dadu</option><option value='11967'   >Daharki</option><option value='1509'   >Daska</option><option value='13599'   >Daur</option><option value='9178'   >Depalpur</option><option value='26'   >Dera Ghazi Khan</option><option value='8244'   >Dera Ismail Khan</option><option value='10645'   >Dijkot</option><option value='12718'   >Dina</option><option value='14195'   >Dobian</option><option value='8474'   >Duniya Pur</option><option value='1737'   >FATA</option><option value='16'   >Faisalabad</option><option value='1293'   >Fateh Jang</option><option value='10894'   >Gaarho</option><option value='19047'   >Gaddani</option><option value='11915'   >Gadoon</option><option value='8119'   >Galyat</option><option value='18016'   >Gambat</option><option value='13272'   >Ghakhar</option><option value='17730'   >Ghanche</option><option value='636'   >Gharo</option><option value='17768'   >Ghizar</option><option value='8810'   >Ghotki</option><option value='1753'   >Gilgit</option><option value='10281'   >Gojra</option><option value='8338'   >Gujar Khan</option><option value='327'   >Gujranwala</option><option value='20'   >Gujrat</option><option value='389'   >Gwadar</option><option value='1714'   >Hafizabad</option><option value='13607'   >Hala</option><option value='11739'   >Hangu</option><option value='11634'   >Harappa</option><option value='1048'   >Haripur</option><option value='1152'   >Haroonabad</option><option value='9687'   >Hasilpur</option><option value='399'   >Hassan Abdal</option><option value='10402'   >Haveli Lakha</option><option value='12823'   >Hazro</option><option value='9844'   >Hub Chowki</option><option value='13569'   >Hujra Shah Muqeem</option><option value='1546'   >Hunza</option><option value='30'   >Hyderabad</option><option value='3'   >Islamabad</option><option value='32'   >Jacobabad</option><option value='11126'   >Jahanian</option><option value='11026'   >Jalalpur Jattan</option><option value='10484'   >Jampur</option><option value='1178'   >Jamshoro</option><option value='17731'   >Jandola</option><option value='13706'   >Jatoi</option><option value='8511'   >Jauharabad</option><option value='1142'   >Jhang</option><option value='19'   >Jhelum</option><option value='9873'   >Kabirwala</option><option value='9202'   >Kaghan</option><option value='10279'   >Kahror Pakka</option><option value='1750'   >Kalat</option><option value='10416'   >Kamalia</option><option value='10346'   >Kamoki</option><option value='13611'   >Kandiaro</option><option value='2'   >Karachi</option><option value='9484'   >Karak</option><option value='544'   >Kasur</option><option value='8806'   >Khairpur</option><option value='1685'   >Khanewal</option><option value='10168'   >Khanpur</option><option value='17732'   >Khaplu</option><option value='1305'   >Kharian</option><option value='12390'   >Khipro</option><option value='8510'   >Khushab</option><option value='1757'   >Khuzdar</option><option value='1430'   >Kohat</option><option value='17733'   >Kohistan</option><option value='9749'   >Kot Addu</option><option value='968'   >Kotli</option><option value='8591'   >Kotri</option><option value='1'   >Lahore</option><option value='10205'   >Lakki Marwat</option><option value='9837'   >Lalamusa</option><option value='17734'   >Landi Kotal</option><option value='586'   >Larkana</option><option value='548'   >Lasbela</option><option value='1661'   >Layyah</option><option value='11406'   >Liaquatpur</option><option value='9872'   >Lodhran</option><option value='1742'   >Loralai</option><option value='10482'   >Lower Dir</option><option value='9422'   >Mailsi</option><option value='1767'   >Makran</option><option value='1384'   >Malakand</option><option value='1496'   >Mandi Bahauddin</option><option value='14350'   >Mangla</option><option value='771'   >Mansehra</option><option value='440'   >Mardan</option><option value='8606'   >Matiari</option><option value='14120'   >Matli</option><option value='9636'   >Mian Channu</option><option value='8310'   >Mianwali</option><option value='13476'   >Mingora</option><option value='17735'   >Miran Shah</option><option value='1349'   >Mirpur</option><option value='1558'   >Mirpur Khas</option><option value='10893'   >Mirpur Sakro</option><option value='13421'   >Mitha Tiwana</option><option value='13603'   >Moro</option><option value='15'   >Multan</option><option value='8116'   >Muridke</option><option value='36'   >Murree</option><option value='977'   >Muzaffarabad</option><option value='1722'   >Muzaffargarh</option><option value='1687'   >Nankana Sahib</option><option value='1258'   >Naran</option><option value='541'   >Narowal</option><option value='14962'   >Nasar Ullah Khan Town</option><option value='1752'   >Nasirabad</option><option value='8801'   >Naushahro Feroze</option><option value='1704'   >Nawabshah</option><option value='1741'   >Neelum</option><option value='1424'   >Nowshera</option><option value='470'   >Okara</option><option value='1716'   >Pakpattan</option><option value='17736'   >Pallandri</option><option value='17737'   >Parachinar</option><option value='17168'   >Pasrur</option><option value='8197'   >Pattoki</option><option value='17'   >Peshawar</option><option value='10678'   >Pind Dadan Khan</option><option value='975'   >Pindi Bhattian</option><option value='9508'   >Pir Mahal</option><option value='17711'   >Poonch</option><option value='13617'   >Qazi Ahmed</option><option value='18'   >Quetta</option><option value='40'   >Rahim Yar Khan</option><option value='17707'   >Raiwind</option><option value='14271'   >Rajana</option><option value='9645'   >Rajanpur</option><option value='17738'   >Rato Dero</option><option value='9027'   >Ratwal</option><option value='976'   >Rawalkot</option><option value='41'   >Rawalpindi</option><option value='8151'   >Renala Khurd</option><option value='1725'   >Rohri</option><option value='9538'   >Sadiqabad</option><option value='782'   >Sahiwal</option><option value='13438'   >Sakrand</option><option value='10632'   >Samundri</option><option value='8609'   >Sanghar</option><option value='8563'   >Sangla Hill</option><option value='1034'   >Sarai Alamgir</option><option value='778'   >Sargodha</option><option value='8607'   >Sehwan</option><option value='13211'   >Shabqadar</option><option value='9029'   >Shahdadpur</option><option value='8552'   >Shahkot</option><option value='13614'   >Shahpur Chakar</option><option value='12170'   >Shakargarh</option><option value='17739'   >Shangla</option><option value='13703'   >Shehr Sultan</option><option value='44'   >Sheikhupura</option><option value='13570'   >Sher Garh</option><option value='8808'   >Shikarpur</option><option value='10334'   >Shorkot</option><option value='480'   >Sialkot</option><option value='1744'   >Sibi</option><option value='1545'   >Skardu</option><option value='1745'   >Sudhnoti</option><option value='14329'   >Sujawal</option><option value='45'   >Sukkur</option><option value='3094'   >Swabi</option><option value='1506'   >Swat</option><option value='12137'   >Talagang</option><option value='9028'   >Tando Adam</option><option value='11315'   >Tando Allahyar</option><option value='11700'   >Tando Bago</option><option value='13166'   >Tando Muhammad Khan</option><option value='17740'   >Tank</option><option value='464'   >Taxila</option><option value='12439'   >Tharparkar</option><option value='1729'   >Thatta</option><option value='1658'   >Toba Tek Singh</option><option value='17741'   >Torkham</option><option value='12271'   >Turbat</option><option value='17742'   >Umarkot</option><option value='17743'   >Upper Dir</option><option value='1432'   >Vehari</option><option value='459'   >Wah</option><option value='17744'   >Wana</option><option value='1395'   >Wazirabad</option><option value='1765'   >Waziristan</option><option value='12504'   >Yazman</option><option value='1739'   >Zhob</option>";
	var city_combo_dropdown2 = '';
</script>
<script type="text/javascript">
	olx_listing_posted = "";
	platform_olx = "false";
	if(edit_property_page) {
	    $('.submit_button').css('pointer-events', 'none');
	    edit_page_redirect_url = "https://profolio.zameen.com/profolio/index.php?section=add_property&tabs=2&step=5&id=0&property_user_id=1001388906";
        $(function () {
            $(document).ajaxStop(function () {
                $(this).unbind("ajaxStop"); // Prevent function from calling again
                $('.submit_button').css('pointer-events', 'auto');
                edit_page_form_str = $('.add_property_form').serialize();
            });
        });
    }
</script>		</div>
		</div>
	</div>
</div>

<div id="footer_top"></div>
<div id="footer">
	<div>
		<a rel="nofollow" href="https://www.zameen.com">Home</a> |  
		<a rel="nofollow" href="https://www.zameen.com/blog">Blog</a> |  
		<a rel="nofollow" href="https://www.zameen.com/contactus.html">Contact Us</a> | 
		<a rel="nofollow" href="https://www.zameen.com/help/index.html">Help</a> | 
		<a rel="nofollow" href="https://www.zameen.com/news.php">News</a> |
		<a rel="nofollow" href="https://www.zameen.com/advertise/index.html">Advertise</a> | 	
		<a  href="https://www.zameen.com/about/aboutus.html">About Us</a> | 

		<a rel="nofollow" href="https://www.zameen.com/privacy.html">Privacy Policy</a> | 
		<a rel="nofollow" href="https://www.zameen.com/terms.html">Terms of Use</a>
	</div>
	<div>
		&copy; 2007 - 2022 Zameen.com. All rights reserved.
	</div>
	<div>
				<a href="https://www.zameen.com/Homes/Lahore-1-1.html">Lahore Property</a> | 
		<a href="https://www.zameen.com/Homes/Karachi-2-1.html">Karachi Property</a> | 
		<a href="https://www.zameen.com/Homes/Islamabad-3-1.html">Islamabad Property</a> | 
		<a href="https://www.bayut.com">Dubai Property</a>  | 
		<a href="https://www.zameen.com/HomeFinance/Pakistan-Mortgages.php">Home Finance</a> 
	</div>   	
</div>
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-201547-7']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<div id="popup_window" class="popup_round">
	<div class="top_part"></div>
	<div class="mid_part"></div>
	<div class="bottom_part"></div>
</div>
<div id="backgroundFilter">
<!--[if lte IE 6]><iframe id="menu4iframe" src="javascript:'';" marginwidth="0" marginheight="0" align="bottom" scrolling="no" frameborder="0" style="position:absolute; left:0; top:0px; display:none; filter:alpha(opacity=0); width:100%" height="800px" width="100%" ></iframe><![endif]-->
</div>
<div id="ToolTip" style="visibility: hidden;"></div>
<div class="popup_round" id="sitewide_ad" style="display: none;">
	<div class="top_part"></div>
	<div class="mid_part"><a onclick="show_sitewide_ad('hide')" class="close_cross_big"></a>
			</div>
	<div class="bottom_part"></div>
</div>
<script type="text/javascript">
	//show_sitewide_ad();
	loadfunc();
</script>
<div class="facebox" id="stext_facebox" style="display:none; position:absolute; z-index:5000">
  <div class="facebox_popup">
	<table style="width:251px;"> 
	   <tr><td class='facebox_tl'/><td class='facebox_b'/><td class='facebox_tr'/></tr>
	   <tr><td class='facebox_b'/>
			<td class='facebox_body'>
				<div class='facebox_content'>
					<div name="stext" id="stext"> 0 </div> 				</div>
			</td>
			<td class='facebox_b'/>
		</tr>
		<tr><td class='facebox_bl'/><td class='facebox_b'/><td class='facebox_br'/></tr>
	</table>
  </div>
</div>
<div id="new_inq_res" style="display:none; border:5px solid #00FFCC;"></div>
<div id="inquiry_update_rec" style="display:none; border:5px solid #00FFCC;"></div>
<div id="new_loading_div" style="display:none;"></div>

<script type="text/javascript" src="https://profolio.zameen.com/javascript/listings_java1_23.js?v=12"></script>
<script type="text/javascript" src="https://profolio.zameen.com/javascript/mybayut/mybayut_java3_19.js?v=13"></script>

<script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"bam.nr-data.net","licenseKey":"4d0861c972","applicationID":"1086318949","transactionName":"Y1dQYRYAXxJRARBaXVodZ0cNTkETXwQLX1tbHVtbAARJT0AKFA==","queueTime":0,"applicationTime":542,"atts":"TxBTF14aTBw=","errorBeacon":"bam.nr-data.net","agent":""}</script></body>
</html>