<?php
/**
 * The template for displaying Category Archive pages.
 *
 * @package WordPress
 * @subpackage Therapy2014
 * @since Therapy2014 1.0
 */

get_header(); ?>

		<div id="container" class="di-column-left">
                        <div class="di-pankuzu">
<a href="<?php echo home_url( '/' ); ?>">TOP</a> > カテゴリ別 > 
<?php
                                        printf( __( '%s', 'therapy2014' ), '<span>' . single_cat_title( '', false ) . '</span>' );
                                ?>
                        </div>
			<div id="content" role="main" class="di-blogs">

				<?php
					$category_description = category_description();
					if ( ! empty( $category_description ) )
						echo '<div class="archive-meta">' . $category_description . '</div>';

				/* Run the loop for the category page to output the posts.
				 * If you want to overload this in a child theme then include a file
				 * called loop-category.php and that will be used instead.
				 */
				get_template_part( 'loop', 'category' );
				?>

			</div><!-- #content -->
		</div><!-- #container -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
