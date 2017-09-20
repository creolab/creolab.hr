<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package brosco
 */

get_header(); ?>

	<div id="primary" class="content-area container">
		<main id="main" class="site-main" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                	<header class="entry-header entry-portfolio-header">
                		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                	</header><!-- .entry-header -->

                	<div class="entry-content">
                		<?php the_content(); ?>
                	</div><!-- .entry-content -->
                </article><!-- #post-## -->
			<?php endwhile; // end of the loop. ?>

            <?php
                $portfolioQuery = new WP_Query([
                    'post_type' => 'project',
                    'nopaging'  => true,
                ]);
            ?>

            <?php if ($portfolioQuery->have_posts()) : ?>
    			<?php /* Start the Loop */ ?>
    			<?php while ($portfolioQuery->have_posts() ) : $portfolioQuery->the_post(); ?>
    				<?php
    					get_template_part('content', 'project');
    				?>
    			<?php endwhile; ?>

    			<div class="container">
    			<?php brosco_paging_nav(); ?>
    			</div>
    		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
