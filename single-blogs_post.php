<?php get_header() ?>

<h1>detail blogs</h1>
<?php while(have_posts()): the_post() ?>

<h1><?=the_title()?></h1>
<figure>
    <img src="<?= get_field('image')['url'] ?>" alt="" style="width: 200px; height: 200px; object-fit: cover;">
</figure>
<p><?=get_field('location') ?></p>
<p><?=the_content()?></p>
<?php 
$blog_id = get_the_ID();
echo do_shortcode("[blog_gallery blog-id='$blog_id']");
echo do_shortcode("[raya_tes]");

?>
<?php endwhile;?>

<?php get_footer() ?>