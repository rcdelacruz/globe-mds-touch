<!DOCTYPE html>
<html lang="en">
<head>
        <title>m.globe Touch UI</title>         
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta id="extViewportMeta" name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black" />
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/jquery.mobile-1.0rc2.min.css" />
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/flexslider.css" type="text/css" media="screen" />
       
                <?php if($this->agent->browser() == 'Opera') : ?>
                        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/opera.css" />
                <?php else : ?> 
                        <?php  if($this->agent->mobile == 'Apple iPhone') : ?>
                                <link rel="stylesheet" media="only screen and (-webkit-min-device-pixel-ratio: 2)" type="text/css" href="<?php echo base_url();?>assets/css/iphone.css?v=30" />  
                        <?php else : ?> 				
                                <link rel="stylesheet" href="<?php echo base_url();?>assets/css/main.css?v=30" />
                                <link rel="stylesheet" media="only screen and (-webkit-min-device-pixel-ratio: 2)" type="text/css" href="<?php echo base_url();?>assets/css/iphone.css?v=30" />           
                        <?php endif ?>

                <?php endif ?>
       
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-1.6.4.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.flexslider.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/swipeupdown.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.mobile-1.0rc2.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/app-right.js"></script>
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/demo-stuff/demo.css" type="text/css" media="screen" />
        
        <script type="text/javascript">
                
          $(document).ready(function () {
                 $('#swipedown').bind('swipedown', function(event) {
                   //addToQueue(eventQueue, event.type); 
                   $.mobile.changePage('#swipedown-content', { transition: "slidedown"});
                   //alert(event.type);
                        //var e = event.originalEvent;
                        //alert(e);
                 });
         });
        </script>
    
</head>

<body> 
<!--
<div id="menuRight">
        <div id="memberDetailsRight"><h3><span>Welcome,</span><br /> <em>Dean</em></h3></div>
                <ul>
                        <li><a href="<?php echo base_url();?>home" class="contentLink" data-ajax="false">Home<img src="/assets/images/find.png" alt="find" id="righticon"/></a></li>
                        <li><a href="#sns" class="contentLink">Social Networking<img src="/assets/images/chat.png" alt="find" id="righticon"/></a></li>
                        <li><a href="#mail" class="contentLink">Mail<img src="/assets/images/gmail.png" alt="find" id="righticon"/></a></li>
                        <li><a href="#news" class="contentLink">News<img src="/assets/images/checkin.png" alt="find" id="righticon"/></a></li>
                        <li><a href="#promos" class="contentLink">Promos<img src="/assets/images/checkin.png" alt="find" id="righticon"/></a></li>
                        <li class="active"><a href="#downloads" class="contentLink">Downloads<img src="/assets/images/checkin.png" alt="find" id="righticon"/></a></li>
                </ul>
</div>
-->

<div data-role="page" class="pages" id="download" data-theme="b">
        <div data-role="header" data-theme="f">
                <div class="float-logo"></div>
                        <div id="header-up">
                                <div class="enjoy" id="swipedown"></div>
                        </div>
                <div id="header">
                        <div class="logo"><a href="#" class="showMenuRight menuBtnRight  ui-btn-right" id="test">Menu</a></div>
                </div>
        </div>

        <div  data-role="content" role="main">
               <div id="container">
                        <div class="flex-container">
                                <div class="flexslider">
                                        <ul class="slides">
                                                <li>
                                                        <img src="<?php echo base_url()?>assets/css/demo-stuff/inacup_samoa.jpg" />
                                                        <p class="flex-caption">Captions and cupcakes. Winning combination.</p>
                                                </li>
                                                <li>
                                                        <a href="#"><img src="<?php echo base_url()?>assets/css/demo-stuff/inacup_pumpkin.jpg" /></a>
                                                        <p class="flex-caption">This image is wrapped in a link!</p>
                                                </li>
                                                <li>
                                                        <img src="<?php echo base_url()?>assets/css/demo-stuff/inacup_donut.jpg" />
                                                </li>
                                                <li>
                                                        <img src="<?php echo base_url()?>assets/css/demo-stuff/inacup_vanilla.jpg" />
                                                </li>
		    </ul>
		  </div>
	 	</div>
		
	</div>
        </div>

</div>
<div data-role="page" class="pages" id="download" data-theme="b">
        <div data-role="header" data-theme="f">
                <div class="float-logo"></div>
                        <div id="header-up">
                                <div class="enjoy" id="swipedown"></div>
                        </div>
                <div id="header">
                        <div class="logo"><a href="#" class="showMenuRight menuBtnRight  ui-btn-right" id="test">Menu</a></div>
                </div>
        </div>

        <div  data-role="content" role="main">
                testsss
        </div>

</div>
</body>
</html>
