<?php

if (is_user_logged_in()) {
    wp_redirect(admin_url());
}
session_start();
?>

<?php get_header()?>
<div class="container-login">
<h1>Selamat Datang</h1>
<?php if(isset($_SESSION['errors'])): ?>
    <ul>
        <?php foreach ($_SESSION['errors'] as $error) : ?>
            <li><?=$error ?></li>
        <?php endforeach ?>
        <?php session_destroy() ?>
    </ul>
<?php endif; ?>

<?php
wp_login_form([
    'redirect' => admin_url(),
]);
?>
</div>
