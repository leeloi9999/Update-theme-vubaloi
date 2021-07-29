
<form role="search" class="search-form" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
    <input type="search" class="search-field" name="s" placeholder="Tìm kiếm..." value="<?php echo get_search_query(); ?>">
	</label>
	<button type="submit" class="search-submit btn btn-primary" aria-label="Submit Search">
	<i class="fas fa-search"></i>
	</button>
</form>
