<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<?php get_header(); ?>
<!-- ▼ コンテンツ : 開始-->
<div class="l-wrapper">
    <div class="l-main">
        <div class="l-container is-flex">
            <div class="l-contents">
                <?php if(is_home()) : //投稿ホームの場合 ?>
                <h1 class="archive-title">BLOG</h1>
                <?php else : ?>
                <?php the_archive_title('<h1 class="archive-title">', '</h1>'); ?>
                <?php endif; ?>
                <div class="c-post-archive">
                    <?php if(have_posts()) : ?>
                    <?php while(have_posts()) : ?>
                    <?php the_post(); ?>
                    <!-- ▼ 投稿 : 開始-->
                    <article <?php post_class(); ?>>
                        <div class="hentry-thumbnail">
                            <a href="<?php the_permalink(); ?>">
                                <?php if(has_post_thumbnail()): ?>
                                <?php the_post_thumbnail(); ?>
                                <?php else : ?>
                                <img src="<?php echo esc_url(get_theme_file_uri('images/img-default.png')); ?>" alt="">
                            </a>
                            <?php endif; ?>
                        </div>
                        <div class="hentry-content">
                            <header class="entry-header">
                                <div class="entry-meta">
                                    <a href="<?php the_permalink(); ?>">
                                        <time class="entry-date published">
                                            <?php the_time('Y年n月j日'); ?>
                                        </time>
                                    </a>
                                </div>
                                <h2 class="entry-title">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_title(); ?>
                                    </a>
                                </h2>
                            </header>
                            <div class="entry-content">
                                <?php the_excerpt(); ?>
                            </div>
                            <footer class="entry-footer">
                                <span class="cat-tags-links">
                                    <span class="cat-links">
                                        <?php the_category('&nbsp;'); ?>
                                    </span>
                                    <?php the_tags('<span class="tags-links">', '&nbsp;', '</span>'); ?>
                                </span>
                            </footer>
                        </div>
                    </article>
                    <!-- ▲ 投稿 : 終了-->
                    <?php endwhile; ?>
                    <!--▼ ページネーション : 開始-->
                    <?php the_posts_pagination(); ?>
<!--
                    <nav class="navigation pagination" role="navigation">
                        <h2 class="screen-reader-text">投稿ナビゲーション</h2>
                        <div class="nav-links">
                            <span class='page-numbers current'>1</span>
                            <a class='page-numbers' href='#'>2</a>
                            <a class='page-numbers' href='#'>3</a>
                            <a class="next page-numbers" href="#">次ページへ</a>
                        </div>
                    </nav>
-->
                    <!--▲ ページネーション : 終了-->
                    <?php else: ?>
                    <P>あてはまる情報がありません</P>
                    <?php endif; ?>
                </div>
            </div>
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>
<!-- ▲ コンテンツ : 終了-->
<?php get_footer(); ?>

<?php wp_footer(); ?>
</body>
</html>
