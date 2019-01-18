<?php get_header(); ?>
    <!-- Main Content -->
    <!-- Post Content -->
    <article>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                        <?php the_content(); ?>

                    <?php endwhile;?>

                        <?php if ( comments_open() ) : ?><?php comments_template(); ?><?php endif; ?>

                    <?php endif; ?>

                </div>
            </div>
        </div>
    </article>
<?php get_footer(); ?>