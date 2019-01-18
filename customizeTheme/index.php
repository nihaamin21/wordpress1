<?php get_header(); ?>

<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-10col-lg-offset-2 col-md-10 col-md-offset-1">
            <div class="post-preview">
                <a href="#">
                    <h2 class="post-title">
                        Man must explore, and this is exploration at its greatest
                    </h2>
                    <h3 class="post-subtitle">
                        Problems look mighty small from 150 miles up
                    </h3>
                </a>
                <p class="post-meta">Posted by <a href="#">Start Bootstrap</a> on September 24, 2014</p>
            </div>
            <?php if ( have_posts() ) : ?>

            <?php /* Start the Loop */ ?>
            <?php
while ( have_posts() ) :
    the_post();
    ?>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8">
                        <div id="post-<?php the_ID(); ?>" <?php post_class('post-preview'); ?>>
                            <a href="<?php the_permalink(); ?>" rel="bookmark">
                                <h2 class="post-title">
                                    <?php the_title(); ?>
                                </h2>
                                <h3 class="post-subtitle">
                                    <?php the_excerpt(); ?>
                                </h3>
                            </a>
                            <p class="post-meta">
                                <?php twentytwelve_entry_meta(); ?>
                            </p>
                        </div>
                        <hr>
                        <?php endwhile; ?>

                        <?php else : ?>
                        <?php endif; // end have_posts() check ?>

                    </div>
                    <div class="col-md-4">
                        <?php dynamic_sidebar( 'sidebar-1' ); ?>
                    </div>
                </div>
            </div>
            <?php get_footer(); ?>