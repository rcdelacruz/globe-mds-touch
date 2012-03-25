<!DOCTYPE html>
<html lang="en">
<head>
        <title>m.globe-Touch</title>         
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta id="extViewportMeta" name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black" />
        <!--<link rel="stylesheet" href="<?php echo base_url();?>assets/css/jquery.mobile-1.1.0-rc.1.min.css" />-->
        
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/jquery.mobile.css" />
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/flexslider.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/demo-stuff/demo.css" type="text/css" media="screen" />
                
			<?php  if($this->agent->mobile == 'Apple iPhone') : ?>
				<link rel="stylesheet" media="only screen and (-webkit-min-device-pixel-ratio: 2)" type="text/css" href="<?php echo base_url();?>assets/css/iphone.css" />
			<?php else : ?> 				
				<link rel="stylesheet" href="<?php echo base_url();?>assets/css/main.css" />
			<?php endif ?>
       
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-1.7.1.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.flexslider.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/swipeupdown.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/pull-to-refresh.min.js"></script>
        <!--<script type="text/javascript" src="<?php echo base_url();?>assets/js/log-page-events.js"></script>-->
        <script type="text/javascript">
			$( document ).bind( "mobileinit", function(){
				$.mobile.fixedtoolbar.prototype.options.initSelector = "#myfooter";
			});
			
			$(document).bind("pageinit", function(){
				$('[data-role=myfooter]').fixedtoolbar({ tapToggle:false }); //solution for fixed footer is to disable tap
				
				if (navigator.userAgent.match(/Android/i)) {
					
					window.scrollTo(0,0); // reset in case prev not scrolled  
					var nPageH = $(document).height();
					var nViewH = window.outerHeight;
						if (nViewH > nPageH) {
							nViewH = nViewH / window.devicePixelRatio;
							$('BODY').css('height',nViewH + 'px');
						}
					window.scrollTo(0,1);
					
					$('.android-margin').css({'display':'block', 'margin-bottom':'90px'});
				}
				
			});
			
        </script>
        <!--<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.mobile-1.1.0-rc.1.min.js"></script>-->
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.mobile.min.js"></script>
        <script type="text/javascript">
			$(document).delegate('#front-page','pageinit', function (event) {
				$('.flexslider').flexslider();
			});
			
			$(document).delegate('#sns-page','pageinit', function (event) {
				$('#list').pullToRefresh({
					'callback': callbackFunction,
					'height': 50
				});
				
				function callbackFunction() {
					// After one second (to simulate loading of external resources), append a list item, refresh the listview and hide pullToRefresh
					setTimeout("$('#list').append('<li>List Item ' + ($('#list li').length + 1) + '</li>').listview('refresh').pullToRefresh('hide');", 1000);
				}
			});
			
			$(document).on('pageinit', 'div:jqmData(role="page"), div:jqmData(role="dialog")', function(event){
				$(this).find('.front-page-down').bind('swipedown', function(event) {
					$.mobile.changePage('#notification', { transition: "slidedown"});
				});
					
				$(this).find('.swipeup').bind('swipeup', function(event) {
					$.mobile.changePage('#front-page', { transition: "slideup"});
				});
				
				$(this).find('.sns-down').bind('swipedown', function(event) {
					$.mobile.changePage('featured', { transition: "slidedown"});
				});
				
				$(this).find('.featured-up').bind('swipeup', function(event) {
					$.mobile.changePage('sns', { transition: "slideup"});
				});
				
				$(this).find('.promos-down').bind('swipedown', function(event) {
					$.mobile.changePage('friend_request', { transition: "slidedown"});
				});
				
				$(this).find('.friend-request-up').bind('swipeup', function(event) {
					$.mobile.changePage('promos', { transition: "slideup"});
				});
				
			});
        </script>
        
    
</head>

<body> 
                <?php echo $this->template->message(); ?>
    
                <?php echo $this->template->yield(); ?>
</body>
</html>

