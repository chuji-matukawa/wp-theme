<!DOCTYPE html>
<html>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <?php wp_head(); ?>
</head>
<body>
<?php get_header(); ?>
<!-- ▼ コンテンツ : 開始-->
<div class="l-wrapper">
    <div class="l-main">
        <div class="l-container is-sm">
            <?php if(have_posts()) : ?>
                    <?php while(have_posts()) : ?>
                    <?php the_post(); ?>
                    <article <?php post_class(); ?>>
                <h1 class="c-post__title">
                    <?php the_title(); ?>
                </h1>
                <div class="entry-content">
                    <?php the_content(); ?>
                </div>
            </article>
            <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</div>
<!-- ▲ コンテンツ : 終了-->
<?php get_footer(); ?>
</body>
</html>
