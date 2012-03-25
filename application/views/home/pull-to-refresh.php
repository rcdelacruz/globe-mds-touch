<html class="ui-mobile"><head>
                <title></title></head><body class="ui-mobile-viewport">
    
        <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="apple-mobile-web-app-capable" content="yes">

        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.0/jquery.mobile-1.0.min.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/pull-to-refresh.css" />

        <script src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
        <script src="http://code.jquery.com/mobile/1.0/jquery.mobile-1.0.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/pull-to-refresh.min.js"></script>
        <script>
            function callbackFunction() {
                // After one second (to simulate loading of external resources), append a list item, refresh the listview and hide pullToRefresh
                setTimeout("$('#list').append('<li>List Item ' + ($('#list li').length + 1) + '</li>').listview('refresh').pullToRefresh('hide');", 1000);
            }

            $(function() {
                $('#list').pullToRefresh({
                    'callback': callbackFunction,
                    'height': 50
                });
            });
        </script>
    
    
        <div data-role="page" data-url="home/test/" tabindex="0" class="ui-page ui-body-c ui-page-active" style="min-height: 120px; ">
            <div data-role="header" class="ui-header ui-bar-a" role="banner">
                <h1 class="ui-title" tabindex="0" role="heading" aria-level="1">Pull to Refresh</h1>
            </div>

            <div data-role="content" class="ui-content" role="main">
                <div id="pull-to-refresh" style="height: 15px; margin-top: -15px; "><span style="display: block; padding-top: 17px; ">Pull down to refresh...</span></div>
                <ul data-role="listview" id="list" class="ui-listview">
                    <li class="ui-li ui-li-static ui-body-c">List item 1</li>
                </ul>
            </div>
        </div>
    

<div class="ui-loader ui-body-a ui-corner-all" style="top: 316px; "><span class="ui-icon ui-icon-loading spin"></span><h1>loading</h1></div></body></html>
