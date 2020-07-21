<?php get_header(); ?>

<div class="listing_container" style="margin-top:100px;">
	<div class="container">
		<div class="row">
				<?php get_template_part( 'rlt-search-form', 'single' ); ?>
				<?php echo rlt_get_search_listing(); ?>
			</div><!-- .rlt_home_full_wrapper -->
		</div><!-- .content-wrapper -->
	</div>
<?php get_footer(); ?>
