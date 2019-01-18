<?php get_header(); ?>
<!-- Main Content -->
<!-- Post Content -->
<article>
    <div class="container">
        <div class="row">
            <div class="col-lg-8  col-md-8">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                <?php the_content(); ?>

                <?php endwhile;?>

                <?php if ( comments_open() ) : ?>
                <?php comments_template(); ?>
                <?php endif; ?>

                <?php endif; ?>

            </div>
            <div class="col-md-4">
                <?php dynamic_sidebar( 'sidebar-2' ); ?>
            </div>
        </div>
    </div>
</article>
<?php get_footer(); ?>