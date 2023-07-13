<?php get_header() ?>

<h1>all articles</h1>

<ul>
    <?php foreach(get_categories() as $category): ?>
        <li>
        <a href="<?= home_url('/category/' . $category->slug) ?>">
            <?= $category->name ?>
        </a>    
    </li>
    <?php endforeach ?>
</ul>

<?php
$paged = get_query_var('paged') ?? 1; 
$query = new WP_Query([
    'post_type' => 'post',
    'posts_per_page' => 10,
    'paged' => $paged,
]);
?>

<?php while($query->have_posts()): $query->the_post(); ?>
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
<?=paginate_links([
    'total' => $query->max_num_pages,
    'current' => max(1, $paged),
]) ?>

<?php get_footer() ?>