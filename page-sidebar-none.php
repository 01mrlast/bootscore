<?php
    /**
     * Template Name: No Sidebar
     *
     * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
     *
     * @package Bootscore
     */
    
    get_header();
    ?>
<div id="content" class="site-content container py-5 mt-5">
    <div id="primary" class="content-area">

        <main id="main" class="site-main">

            <header class="entry-header">
                <?php the_post(); ?>
                <!-- Title -->
                <?php the_title('<h1>', '</h1>'); ?>
                <!-- Featured Image-->
                <?php bootscore_post_thumbnail(); ?>
                <!-- .entry-header -->
            </header>
            <div class="entry-content">
                <!-- Content -->
                <?php the_content(); ?>
                <!-- .entry-content -->
                <?php wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'bootscore' ),
					'after'  => '</div>',
					) );
					?>
            </div>
            <footer class="entry-footer">
                <!-- Edit Link -->
                <!--<?php bootscore_edit();?>-->
                <!-- .entry-footer -->
            </footer>
            <!-- Comments -->
            <?php comments_template(); ?>

        </main><!-- #main -->

    </div><!-- #primary -->
</div><!-- #content -->
<?php
get_footer();
