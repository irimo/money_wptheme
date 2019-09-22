<?php
/**
 * Template Name: One column, no sidebar
 *
 * A custom page template without sidebar.
 *
 * The "Template Name:" bit above allows this to be selectable
 * from a dropdown menu on the edit page screen.
 *
 * @package WordPress
 * @subpackage Therapy2014
 * @since Therapy2014 1.0
 */

get_header(); ?>

		<div id="container" class="one-column di-column-left">
                        <div class="di-pankuzu">
<a href="<?php echo home_url( '/' ); ?>">TOP</a><!-- pankuzu tukuritaiyo~ > 最新の5件-->
                        </div>
			<div id="content" role="main" class="di-blogs">

			<?php
			/* Run the loop to output the page.
			 * If you want to overload this in a child theme then include a file
			 * called loop-page.php and that will be used instead.
			 */
			 get_template_part( 'loop', 'page' );
			?>

			</div><!-- #content -->
		</div><!-- #container -->

<?php get_footer(); ?>
