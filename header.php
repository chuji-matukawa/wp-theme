<!-- ▼ ヘッダー : 開始-->
<header class="l-header">
    <div class="c-header-description"><?php bloginfo('description'); ?></div>
    <a class="c-logo" href="<?php echo esc_url(home_url('/')); ?>">
        <div class="c-logo__image">
            <img src="<?php echo esc_url(get_theme_file_uri('images/logo.png')); ?>" alt="<?php bloginfo('name'); ?>">
        </div>
        <div class="c-logo__text"><?php bloginfo('name'); ?></div>
    </a>
    <?php wp_nav_menu(
    array(
        'theme_location'         => 'globalnav',
        'container'              => 'div',
        'container_class'        => 'c-global-nav'
    )); ?>
<!--
    <div class="c-global-nav">
        <ul>
            <li>
                <a href="<?php echo esc_url(home_url('/')); ?>">HOME</a>
            </li>
            <li>
                <a href="<?php echo esc_url(home_url('/profile/')); ?>">PROFILE</a>
            </li>
            <li>
                <a href="<?php echo esc_url(home_url('/blog/')); ?>">BLOG</a>
            </li>
            <li>
                <a href="<?php echo esc_url(home_url('/contact/')); ?>">CONTACT</a>
            </li>
        </ul>
    </div>
-->
</header>
<!-- ▲ ヘッダー : 終了-->