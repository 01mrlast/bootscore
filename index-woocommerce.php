<?php
	/**
	 * The main template file
	 *
	 * This is the most generic template file in a WordPress theme
	 * and one of the two required files for a theme (the other being style.css).
	 * It is used to display a page when nothing more specific matches a query.
	 * E.g., it puts together the home page when no home.php file exists.
	 *
	 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
	 *
	 * @package Bootscore
	 */
	
	get_header();
	?>
<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <!-- Header Image -->


        <div class="bootstore-header py-3 pt-md-5 pb-md-4 mx-auto text-center container">
            <h1 class="display-1"><?php bloginfo('name'); ?></h1>
            <p class="lead"><?php bloginfo('description'); ?></p>
        </div>

        <div class="products">
            <?php echo do_shortcode("[recent_products]"); ?>
        </div>



        <!-- Pagination -->
        <div>
            <?php 
						if (function_exists("bootscore_pagination"))
						{
						  	bootscore_pagination();
						}
						?>
        </div>
</div>

</div>
<!-- row -->
</main>
<!-- #main -->
</div>
<!-- #primary -->
<?php
get_footer();
