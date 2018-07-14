<?php get_header(); ?>

    <section class="page-main-hero">
        <div class="container">
            <div class="row">
                <h1 class="page-hero-title"><?php the_title(); ?></h1>
            </div>
        </div>
    </section>

<div class="container">
    <div class="main-content">
        <div class="row">
            <?php if ( have_posts() ) : while ( have_posts() ) :    the_post(); ?>
                <!-- post -->
                <?php the_content(); ?>
            <?php endwhile; ?>
                <!-- post navigation -->
            <?php else: ?>
                <!-- no posts found -->
            <?php endif; ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>