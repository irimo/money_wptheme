<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Therapy2014
 * @since Therapy2014 1.0
 */

get_header(); ?>

		<div id="container" class="di-column-left">
                        <div class="di-pankuzu">
<a href="<?php echo home_url( '/' ); ?>">TOP</a><!-- pankuzu yaritai > 最新の5件 -->
                        </div>
			<div id="content" role="main" class="di-blogs">

			<?php
			/* Run the loop to output the posts.
			 * If you want to overload this in a child theme then include a file
			 * called loop-index.php and that will be used instead.
			 */
			 get_template_part( 'loop', 'index' );
			?>
			</div><!-- #content -->
		</div><!-- #container -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
