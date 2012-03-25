<!DOCTYPE html>
<html>
  <head>
    <title>Events</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta id="extViewportMeta" name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <!--
 <link rel="stylesheet" href="http://code.jquery.com/mobile/1.0a4.1/jquery.mobile-1.0a4.1.min.css" />
 <script type="text/javascript" src="http://code.jquery.com/jquery-1.5.2.min.js"></script>
 <script type="text/javascript" src="<?php echo base_url();?>assets/js/swipeupdown.js"></script>
 <script type="text/javascript" src="http://code.jquery.com/mobile/1.0a4.1/jquery.mobile-1.0a4.1.min.js"></script>
-->
         <link rel="stylesheet" href="<?php echo base_url();?>assets/css/jquery.mobile-1.0rc2.min.css" />
         <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-1.6.4.min.js"></script>
         <script type="text/javascript" src="<?php echo base_url();?>assets/js/swipeupdown.js"></script>
         <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.mobile-1.0rc2.min.js"></script>
 <script  type="text/javascript">
 
   function addToQueue(queue, entry) {
        while (queue.length >= 10) {
          queue.pop();
        };
        queue.unshift(entry);
    
        var ul = $('<ul/>');
        $.each($(queue), function(i, val) {
          ul.append('<li>' + val + '</li>');
        })
    
        $('#eventLog').html(ul);
      }

//$(document).bind('pageinit', function() {
   $(document).ready(function () {
 var eventQueue = new Array();
/*
 $("a[data-role='button']").live('click', function() {
   resetButton($(this));
 });

 $('#touch').bind('tap', function(event) {
   addToQueue(eventQueue, event.type);
 });

 $('#touch').bind('taphold', function(event) {
   addToQueue(eventQueue, event.type); 
 });
*/
 $('#touch').bind('swipedown', function(event) {
   //addToQueue(eventQueue, event.type); 
   $.mobile.changePage('#download', { transition: "slidedown"});
   //alert(event.type);
        //var e = event.originalEvent;
        //alert(e);
 });
/*
 $('#touch').bind('swipeleft', function(event) {
   addToQueue(eventQueue, event.type); 
 });

 $('#touch').bind('swiperight', function(event) {
   addToQueue(eventQueue, event.type); 
 });
 
 $(window).bind('orientationchange', function(event) {
   addToQueue(eventQueue, event.orientation + ' ' + orientation); 
 });
 */
   });

</script>
  </head>
  <body>
        <div data-role="page" id="master">
                <div data-role="header" id="touch">
                        <h1>Events</h1>
                </div>
                <div data-role="content" id="content">
                        <p>handles tap, taphold, swipe, swipeleft, swiperight and orientationchange events.</p>
                        <!--
                        <div id="touch" style="border-width: thin; border-color: black; border-style: solid; padding:10px; margin-bottom:10px; height: 100px">
                                touch area
                        </div>
                        -->
                        <div id='eventLog'></div>
                </div>
        </div>
          
        <div data-role="page" id="download">
                <div data-role="header">
                        <h1>Events</h1>
                </div>
                <div data-role="content" id="content">
                        test
                </div>
        </div>
  </body>
</html>