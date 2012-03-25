<!-- First Content -->
<div data-role="page" id="front-page">
	<div data-role="header" data-theme="f" class="front-page-down">
		<div class="float-logo"></div>
			<div id="header-up">
				<div></div><!--  class="enjoy" -->
			</div>
			<div id="header">
				<div class="logo">
					<a href="<?php echo base_url();?>home/menu" class="menuBtnRight  ui-btn-right">Menu</a>
				</div>
			</div>
	</div>

	<div data-role="content" class="front-content">

		<div id="container">
			<div class="flex-container">
				<div class="flexslider">				 
					<ul class="slides">
					<?php foreach($data->rss as $value): ?>
						<li>
							<img src="<?php echo $value->image ?>" />
							<p class="flex-caption"><?php echo $value->title ?></p>
						</li>
						
					<?php endforeach ?>
					</ul>
				</div>
			</div>
		</div>
		<div style="clear:both"></div>
		
		<div class="menu-wrapper">
				<ul>
					<li>
						<a href="<?php echo base_url()?>home/login" class="menu-portal"></a>
					</li>
					<li>
						<div id="red-dot"></div>
						<a href="#" class="menu-tags"></a>
					</li>
					<li>
						<div id="red-dot"></div>
						<a href="#" class="menu-requests"></a>
					</li>
					<li>
						<a href="#" class="menu-videos"></a>
					</li>
				</ul>
		</div>
		
	</div>
	
	<div data-role="footer" data-theme="a" id="footer">
		<div id ="footer-icon">
			<a href="#" class="new-icon"></a>
		</div>
	</div>
</div>
<!-- 2nd Content -->
<div data-role="page" id="notification" data-theme="a">
	<div data-role="content" role="main" id="main">
		<div class="title">Your Notification</div>
		<div class="notification-container">
			<div id="name-tag"></div>
			<div id="label">Keeshia Marcial and Teresa 'Cuchie' Alcuaz commented on a post you were tagged in.</div>
		</div>
		<div class="notification-container">
			<div id="name-tag"></div>
			<div id="label">Keeshia Marcial and Teresa 'Cuchie' Alcuaz commented on a post you were tagged in.</div>
		</div>
		<div class="notification-container">
			<div id="camera-tag"></div>
			<div id="label">Aldrin Salubayba Tagged you in a photo.</div>
		</div>
		<div class="notification-container">
			<div id="camera-tag"></div>
			<div id="label">Aldrin Salubayba Tagged you in a photo.</div>
		</div>
		<div class="notification-container">
			<div id="camera-tag"></div>
			<div id="label">Aldrin Salubayba Tagged you in a photo.</div>
		</div>
		<div class="notification-container">
			<div id="camera-tag"></div>
			<div id="label">Aldrin Salubayba Tagged you in a photo.</div>
		</div>
		<div class="android-margin"></div>
		
	</div>
	
	<div data-role="myfooter" data-position="fixed" data-theme="a" class="swipeup">
		<div class="float-logo"></div>
			<div id="header-up">
				<div class="enjoy"></div>
			</div>
			<div id="header">
				<div class="logo">
					<a href="<?php echo base_url();?>home/menu" class="footer-menuBtnRight"></a>
				</div>
			</div>
	</div>
</div>
  
