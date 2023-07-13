<?php get_header() ?>
<h1>our blogs</h1>

<?php 
$wp_query = new WP_Query([
    'post_type' => 'blogs_post',
]);
?>

<?php while(have_posts()): the_post() ?>
<figure>
    <img src="<?= get_field('image')['url'] ?>" alt="" style="width: 150px; height: 130px;  object-fit: cover;">
</figure>
<h2>
    <a href="<?php the_permalink() ?>">
        <?php the_title() ?>
    </a>
</h2>
<p><?= get_field('location') ?></p>
<hr>

<?php endwhile ?>


<?php get_footer() ?>