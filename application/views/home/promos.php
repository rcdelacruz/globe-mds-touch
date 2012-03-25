
<div data-role="page" id="promos-page">
	<div data-role="header" class ="promos-down">
		<div class="float-logo"></div>
			<div id="header-up">
				<div class="enjoy"></div>
			</div>
			<div id="header">
				<div class="logo">
					<a href="<?php echo base_url();?>home/menu" class="menuBtnRight  ui-btn-right">Menu</a>
				</div>
			</div>
	</div>

	<div id="promo-nav-wrapper">
		<ul>
			<li>
				<a href="<?php echo base_url()?>home/promos/call" class="promo-call <?php echo ($type == 'call') ? 'active-call' : '' ?>"></a>
			</li>
			<li>
				<a href="<?php echo base_url()?>home/promos/text" class="promo-text <?php echo ($type == 'text') ? 'active-text' : '' ?>"></a>
			</li>
			<li>
				<a href="<?php echo base_url()?>home/promos/data" class="promo-data <?php echo ($type == 'data') ? 'active-data' : '' ?>"></a>
			</li>
			<li>
				<a href="<?php echo base_url()?>home/promos/combo" class="promo-combo <?php echo ($type == 'combo') ? 'active-combo' : '' ?>"></a>
			</li>
			<li>
				<a href="<?php echo base_url()?>home/promos/recent" class="promo-recent <?php echo ($type == 'recent') ? 'active-recent' : '' ?>"></a>
			</li>
		</ul>
	</div>
	<div data-role="content" role="main" id="main">
		<ul data-role="listview" id="list" class="ui-listview">
			<?php
			if(isset($response)) {
				foreach($response as $resp) { ?>
					<li data-theme="c" data-icon="false">
						<a href="#">
							<h3><?php echo $resp['title']; ?></h3>
							<p id="wrap"><?php echo $resp['desc']; ?></p>
						</a>
					</li>
			<?php }
			}else {
				echo "Empty";
			}
			?>
		</ul>
	</div>
	
	<div data-role="footer" data-theme="a" id="footer">
		<div id ="footer-icon">
			
		</div>
	</div>
</div>

