<?php 
    /* Template Name: Contact */
?>

<?php get_header(); ?>

<div class="innerpages-single-page section-padding">
    <div class="container">
        <div class="single-page-wrapper">
            <?php if(have_posts()) : while(have_posts()) : the_post() ?>
            <div class="page-content">
                <div class="content"><?php the_content() ?></div>
            </div>
            <?php endwhile; endif; ?>
        </div>
    </div>
</div>

<?php
get_footer();