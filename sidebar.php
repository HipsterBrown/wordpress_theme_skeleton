<aside class="col col-sm-3 col-sidebar" role="complementary">

	<?php include(locate_template('templates/searchform.php')); ?>
    		
	<div class="sidebar-widget">
		<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-1')) ?>
	</div>
	
	<div class="sidebar-widget">
		<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-2')) ?>
	</div>
		
</aside><!-- /sidebar -->