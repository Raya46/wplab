<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo("title") ?></title>
    <?php wp_head() ?>
</head>
<body>
<?php if(is_user_logged_in()):  ?>

    <nav>
    <div class="navbar-left">
        <h3><a href="<?= get_home_url() ?>"><?php bloginfo("title") ?></a></h3>
    </div>
    <div class="navbar-right">
        <a href="">
        <?php wp_nav_menu([
    'theme_location' => 'navbar-menu',
    'container_class' => 'navbar',
]); ?>
        </a>
    
    </div>
   
</nav>
<?php endif; ?>




