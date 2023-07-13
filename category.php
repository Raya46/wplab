<?php get_header()?>

<h1>Articles: <?php single_cat_title(); ?></h1>
<?php while(have_posts()) : the_post(); ?>
<article>
<div class="card">
        <div class="card-head">
            <h1>
            <a href="<?php the_permalink() ?>">
                <?php the_title() ?>
            </a>    
            </h1>
        </div>
        <div class="card-body">
        <p><?php the_excerpt() ?></p>
        </div>
    </div>
</article>
<?php endwhile; ?>

<?php get_footer()?>