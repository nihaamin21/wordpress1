<?php /* Template Name: Custom Template */
get_header(); ?>

<!-- Main Content -->

<div class="container">
    
    <div class="row">
        <div class="col-md-3">
            <aside class="sidebar">
                <label for="handle"></label>
                <input id="handle" type="checkbox" name="handle">

                <nav>
                    <ul>
                        <li>Home</li>
                        <li>Blog</li>
                        <li>Projects</li>
                        <li>About</li>
                        <li>Contact</li>
                    </ul>
                </nav>

            </aside>

        </div>
        <div class="col-md-6">
            <main>

            

                <h1>Bitters ennui</h1>

                <p>Tumblr Echo Park mixtape pork belly, hoodie narwhal Pinterest Tonx cornhole skateboard. Ennui hoodie
                    you probably haven't heard of them synth. Selfies Pitchfork pop-up wolf actually Godard.
                    Letterpress flexitarian mumblecore yr, street art 3 wolf moon scenester church-key whatever tousled
                    deep v. Williamsburg cardigan tousled fap, banjo art party hella ethnic master cleanse fixie meh
                    normcore lo-fi Shoreditch. </p>

                <p>Roof party VHS kogi jean shorts, literally freegan pickled sriracha single-origin coffee organic
                    Schlitz meggings Pitchfork. +1 sustainable artisan Tumblr leggings irony.</p>

                <p>Scenester four loko chia stumptown literally dreamcatcher salvia. Try-hard narwhal jean shorts
                    paleo. Fashion axe polaroid mustache readymade. Organic bespoke locavore, stumptown twee polaroid
                    roof party vegan fanny pack. Viral whatever locavore mixtape, sustainable Cosby sweater authentic
                    Tumblr four loko bicycle rights dreamcatcher. Pitchfork letterpress keytar blog pug Banksy. Banjo
                    bespoke stumptown umami.</p>

            </main>
        </div>
        <div class="col-md-3">
            <!-- <form class="wp-forms-hidden-input">
                <input type="text" name="first_name" />
                <textarea name="message">Enter your message here</textarea>
                <input type="submit" />
            </form> -->

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                <?php the_content(); ?>

                <?php endwhile;?>
                <?php endif; ?>
        </div>
    </div>
    <?php get_footer(); ?>