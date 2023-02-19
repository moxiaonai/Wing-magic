<?php
    $categorys = get_the_category();
    if (is_single() && $categorys) {
        $category = $categorys[0];
        echo '<div class="breadcrumbs"><span class="text-muted">当前位置：</span><a href="'.get_bloginfo('url').'">'.get_bloginfo('name').'</a> <small>></small> '.get_category_parents($category->term_id, true, ' <small>></small> ').'<span class="text-muted">'.'正文'.'</span></div>';
    }
?>
<header class="article-header">
    <h1 itemprop="name headline" class="article-title h2 mb-2"><?php the_title(); ?></h1>
    <ul class="article-info d-flex text-gray reset-ul m-0">
		<?php if ( get_the_author_meta( 'display_name' ) ) : ?>
            <li>
                <i class="czs-forum"></i>
                <span><?php the_author_meta( 'display_name' ); ?></span>
            </li>
		<?php endif; ?>
        <li>
            <i class="czs-time"></i>
            <time datetime="<?php the_time( 'c' ); ?>" itemprop="datePublished"
                  pubdate><?php the_time( 'Y-m-d' ); ?></time>
        </li>
        <li class="c-hand" onclick="onPraise()">
            <i class="czs-heart"></i>
            <span class="praise-<?php the_ID(); ?>"><?= get_praise() ?></span>
        </li>
    </ul>
    <div class="divider"></div>
</header>
<script>
    function onPraise() {
        if ( $h.store.comments && $h.store.comments.$refs.affiliate ) {
            $h.store.comments.$refs.affiliate.handlePraise();
        } else {
            $modules.actions.setPraise(<?php the_ID(); ?>);
        }
    }
</script>