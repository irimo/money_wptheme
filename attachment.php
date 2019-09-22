<?php
/**
 * The template for displaying attachments.
 *
 * @package WordPress
 * @subpackage Therapy2014
 * @since Therapy2014 1.0
 */

get_header(); ?>

		<div id="container" class="single-attachment di-column-left">
                        <div class="di-pankuzu">
<a href="<?php echo home_url( '/' ); ?>">TOP</a><!-- pankuzu tukuritaiyo~ > 最新の5件-->
                        </div>
			<div id="content" role="main" class="di-blogs">

			<?php
			/* Run the loop to output the attachment.
			 * If you want to overload this in a child theme then include a file
			 * called loop-attachment.php and that will be used instead.
			 */
			get_template_part( 'loop', 'attachment' );
			?>

			</div><!-- #content -->
		</div><!-- #container -->

<?php get_footer(); ?>
