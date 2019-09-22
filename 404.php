<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package WordPress
 * @subpackage Therapy2014
 * @since Therapy2014 1.0
 */

get_header(); ?>

	<div id="container" class="di-column-left">
                        <div class="di-pankuzu">
<a href="<?php echo home_url( '/' ); ?>">TOP</a><!-- pankuzu tukuritaiyo~ > 最新の5件-->
                        </div>
		<div id="content" role="main" class="di-blogs">

			<div id="post-0" class="post error404 not-found">
				<h1 class="entry-title"><?php _e( 'Not Found', 'therapy2014' ); ?></h1>
				<div class="entry-content di-story">
					<p><?php _e( 'Apologies, but the page you requested could not be found. Perhaps searching will help.', 'therapy2014' ); ?></p>
					<?php get_search_form(); ?>
				</div><!-- .entry-content -->
			</div><!-- #post-0 -->

		</div><!-- #content -->
	</div><!-- #container -->
	<script type="text/javascript">
		// focus on search field after it has loaded
		document.getElementById('s') && document.getElementById('s').focus();
	</script>

<?php get_footer(); ?>
