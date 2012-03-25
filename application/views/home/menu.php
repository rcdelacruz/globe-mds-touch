<div data-role="page" data-theme="a">
	<div data-role="header" data-theme="f">
		<div class="float-logo"></div>
			<div id="header-up">
				<div></div><!--  class="enjoy" -->
			</div>
			<div id="header">
				<div class="logo">
					<a href="<?php echo base_url();?>home/" class="menuBtnRight  ui-btn-right">Menu</a>
				</div>
			</div>
	</div>

	<div data-role="content" class="sns-content">
		<div class="search">
			<input type="search" name="search" id="searc-basic" value="" placeholder="Search" data-theme="c"/>
		</div>
		<div id = "nav-wrapper">
			<ul class="nav-row1">
				<li>
					<a href="<?php echo base_url()?>home" class="nav-home"></a>
				</li>
				<li>
					<a href="<?php echo base_url()?>home/sns" class="nav-sns"></a>
				</li>
				<li>
					<a href="<?php echo base_url()?>home/email" class="nav-mail"></a>
				</li>
			</ul>
			<ul class="nav-row2">
				<li>
					<a href="<?php echo base_url()?>home/news" class="nav-news"></a>
				</li>
				<li>
					<a href="<?php echo base_url()?>home/promos/call" class="nav-promos"></a>
				</li>
				<li>
					<a href="<?php echo base_url()?>home/downloads" class="nav-downloads"></a>
				</li>
			</ul>
		</div>
	</div>
	
	<div data-role="footer" data-theme="a" id="footer">
		<div id ="footer-icon">
			
		</div>
	</div>
</div>
