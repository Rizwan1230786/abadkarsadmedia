function draw_multiple_charts(params) {
    setTimeout(function() {
        if (!($('#' + params.div).find('iframe').is('iframe') || $('#' + params.div).find('table').is('table') || $('#' + params.div).find('svg').is('svg'))) {
            $('#' + params.div).html('<center style="margin-top:80px;">Oops, your report could not be loaded successfully …<br/>Please try again, and if it still doesn\'t work then please report this issue to our support team.</center>');
        }
    }, 15000);
    google.load("visualization", "1", {
        packages: ["corechart", "table"]
    });
    google.setOnLoadCallback(multipleMap);

    function multipleMap() {
        var current = 0;
        var data = [];
        var options = [];

        var jsondata = eval(params.data_function);

        $('.' + params.buttons + '').live('click', function() {
            current = $(this).attr('id');
            drawChart();
        });


        for (i = 0; i < jsondata.length; i++) {
            data[i] = new google.visualization.DataTable(jsondata[i]);
            options[i] = $.extend(true, {
                width: 950,
                page: 'disable',
                curveType: 'function',
                vAxis: {
                    title: "Hits",
                    viewWindow: {
                        min: 0
                    }
                },
                hAxis: {
                    slantedText: false,
                    slantedTextAngle: 0,
                    textStyle: {
                        fontSize: 10
                    },
                    title: "Date"
                },
                legend: {
                    position: "top"
                },
                chartArea: {
                    width: "80%",
                    height: "60%"
                },
                animation: {
                    duration: 1000,
                    easing: 'out'
                },
                tooltip: {
                    showColorCode: true
                },
                focusTarget: 'category'
            }, params.opts[i]);


            for (var x in params.formatter) {
                if (params.formatter[x].type == 'date') {
                    var formatter_my = new google.visualization.DateFormat({
                        pattern: params.formatter[x].pattern
                    });
                }
                if (params.formatter[x].type == 'number') {
                    var formatter_my = new google.visualization.NumberFormat({
                        pattern: params.formatter[x].pattern
                    });
                }
                var col = parseInt(x);
                formatter_my.format(data[i], col);
            }

            if (params.chart_type == 'table') {
                //data[i].getValue(2, 1); --to get value of any cell
                var tot_cols = data[i].getNumberOfColumns();
                var tot_rows = data[i].getNumberOfRows();


                //Setting all zero values to -
                for (var c = 0; c < tot_cols; c++)
                    for (var r = 0; r < tot_rows; r++)
                        if (data[i].getValue(r, c) == 0)
                            data[i].setCell(r, c, undefined, "-");


                //styling labels if defined
                if (params.label_prop != "undefined") {
                    for (var x in params.label_prop) {
                        var col = parseInt(x);
                        if (col <= tot_cols)
                            data[i].setColumnLabel(col, "<span style='" + params.label_prop[x].style + "'>" + data[i].getColumnLabel(col) + "</span>");
                    }
                }

                //styling cells if defined
                if (params.col_prop != "undefined") {
                    for (var x in params.col_prop) {
                        var col = parseInt(x);
                        if (col <= tot_cols)
                            for (var j = 0; j < tot_rows; j++)
                                data[i].setCell(j, col, undefined, undefined, {
                                    style: params.col_prop[x].style
                                });
                    }
                }
            }
        }

        if (params.chart_type == 'table')
            var chart = new google.visualization.Table(document.getElementById(params.div));
        else if (params.chart_type == 'bar')
            var chart = new google.visualization.BarChart(document.getElementById(params.div));
        else if (params.chart_type == 'column')
            var chart = new google.visualization.ColumnChart(document.getElementById(params.div));
        else if (params.chart_type == 'pie')
            var chart = new google.visualization.PieChart(document.getElementById(params.div));
        else
            var chart = new google.visualization.LineChart(document.getElementById(params.div));

        function drawChart() {
            chart.draw(data[current], options[current]);
            //alert(data[current].getColumnPattern(2));
        }
        drawChart();
    }
}

$('#statistics_graph .box_heading').live("click", function() {
    $(this).siblings('.box_heading_selected').attr("class", 'box_heading');
    $(this).attr("class", 'box_heading_selected');
});

google.load("visualization", "1", {
    packages: ["corechart", "table"]
});

function imz_draw_chart(abcd, target) {
    setTimeout(function() {
        if (!($('#' + target).find('iframe').is('iframe') || $('#' + target).find('table').is('table') || $('#' + target).find('svg').is('svg'))) {
            $('#' + target).html('<center style="margin-top:80px;">Oops, your report could not be loaded successfully …<br/>Please try again, and if it still doesn\'t work then please report this issue to our support team.</center>');
        }
    }, 15000);
    google.setOnLoadCallback(abcd);
}

function imz_google_charts(params) {

    //var self = this;
    //this.params		= params;
    //this.packages	= ["corechart","table"];
    this.options = [];
    this.data = [];
    this.columns = [];
    this.chart;
    this.current = 0;
    this.targetElement = '';

    this.init = function(params) {

        this.targetElement = params['target'];

        if (params['chart_type'] == '')
            params['chart_type'] = "ColumnChart";

        this.chart = eval("new google.visualization." + params['chart_type'] + "(document.getElementById('" + this.targetElement + "'))");


        var jsondata = eval(params.data);


        for (i = 0; i < jsondata.length; i++) {

            this.data[i] = new google.visualization.DataTable(jsondata[i]);

            this.options[i] = $.extend(true, {
                width: 950,
                page: 'disable',
                curveType: 'function',
                vAxis: {
                    title: "Hits",
                    viewWindow: {
                        min: 0
                    }
                },
                hAxis: {
                    slantedText: false,
                    slantedTextAngle: 0,
                    textStyle: {
                        fontSize: 10
                    },
                    title: "Date"
                },
                legend: {
                    position: "top"
                },
                chartArea: {
                    width: "80%",
                    height: "60%"
                },
                animation: {
                    duration: 1000,
                    easing: 'out'
                },
                tooltip: {
                    showColorCode: true
                },
                focusTarget: 'category'
            }, params['options'][i]);

            /* for( var x in params.formatter)
            {
            	if(params.formatter[x].type == 'date')
            	{
            		var formatter_my = eval("new google.visualization."+params.formatter[x].type+"({pattern:params.formatter[x].pattern})");
            	}
            	
            	var col = parseInt(x);
            	formatter_my.format(data[i], col);
            } */
        }

    }

    /* this.setButtons = function(buttons) {
	
    	$('.'+buttons+'').live('click',function(){
    			current = $(this).attr('id');
    			drawChart();
    	});
    } */
    this.draw = function() {
        /* if(index == 0)
        	index = this.current; */

        //this.chart.draw(this.data[index],this.options[index]);
        this.chart.draw(this.data[this.current], this.options[this.current]);
    }

    this.init(params);

}