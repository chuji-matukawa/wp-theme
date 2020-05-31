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
        <div class="l-container is-flex">
            <div class="l-contents">
                <?php if(have_posts()) : ?>
                    <?php while(have_posts()) : ?>
                    <?php the_post(); ?>
                    <!-- ▼ 投稿 : 開始-->
                    <article <?php post_class(); ?>>
                    <header class="c-post__header">
                        <div class="c-post__meta">
                            <span class="posted-on">
                                <time class="entry-date published">
                                    <?php the_title('Y年n月j日'); ?>
                                </time>
                            </span>
                            <span class="entry-author">
                                投稿者: <?php the_author(); ?>
                            </span>
                        </div>
                        <h1 class="c-post__title">
                            <?php the_title(); ?>
                        </h1>
                    </header>
                    <div class="c-post__content">
                        <?php the_content(); ?>
                    </div>
                    <footer class="c-post__footer">
                        <span class="cat-tags-links">
                            <span class="cat-links">
                                <?php the_category('&nbsp'); ?>
                            </span>
                            <?php the_tags('<span class="tags-links">', '&nbsp;', '</span>'); ?>
                        </span>
                    </footer>
                </article>
                <?php endwhile; ?>
                <?php the_post_navigation(); ?>
<!--
                <nav class="navigation post-navigation" role="navigation">
                    <div class="nav-links">
                        <div class="nav-previous">
                            <a href="#" rel="prev">前の投稿</a>
                        </div>
                        <div class="nav-next">
                            <a href="#" rel="next">次の投稿</a>
                        </div>
                    </div>
                </nav>
-->
                <?php endif; ?>
            </div>
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>
<!-- ▲ コンテンツ : 終了-->
<?php get_footer(); ?>
</body>
</html>
