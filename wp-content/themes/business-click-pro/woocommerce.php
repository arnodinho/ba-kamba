<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Trade Hub
 */

get_header(); ?>

<div class="container">
	<div class="row">
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">

				<?php if ( have_posts() ) :
					woocommerce_content();
				endif;
				?>

			</main><!-- #main -->
		</div><!-- #primary -->

		<aside id="secondary" class="widget-area" role="complementary">
			<?php
            if(is_active_sidebar('woocommerce-sidebar')){
                dynamic_sidebar('woocommerce-sidebar');
            }
            ?>
        </aside>
	</div>
</div>

<?php
get_footer(); 
