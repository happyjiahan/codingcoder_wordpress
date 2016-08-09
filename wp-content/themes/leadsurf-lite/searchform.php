<form method="get" id="searchform" action="<?php echo esc_url(home_url('/')); ?>">
	<div class="searchleft">
		<input type="text" value="<?php echo get_search_query(); ?>" placeholder="<?php _e('Search','leadsurf-lite'); ?>" name="s" id="searchbox" class="searchinput"/>
	</div>
    <div class="searchright">
    	<input type="submit" class="submitbutton" value="" /><i class="fa fa-search"></i>
    </div>
    <div class="clearfix"></div>
</form>
