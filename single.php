<?php get_header() ?>
<div class="container">
    <?php while(have_posts()): the_post() ?>
    <div class="detail-card">
        <h1><?php the_title() ?></h1>
        <p><?php the_content() ?></p>
    </div>
    <?php endwhile ?>
</div>
    
<?php get_footer() ?> 
