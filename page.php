<?php get_header() ?>

<?php while(have_posts()): the_post(); ?>
<section>
    <h1><?php the_title() ?></h1>
    <div>
        <?php the_content() ?>
    </div>
</section>
<?php endwhile ?>

<?php get_footer() ?>