<?php get_header() ?>
<div class="container">
    <div class="row">
        <h1 class="title">List of Post</h1>
        <img src="<?=get_theme_file_uri('images/raya.png') ?>" alt="" style="width: 85px; height: 70px;" >
    </div>
    <?= do_shortcode('[katakanhalo name="Raya"]'); ?>
    <?php while(have_posts()): the_post()?>

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
    <?php endwhile ?>
</div>

<?= paginate_links() ?>
    
    
    <?php get_footer() ?>

