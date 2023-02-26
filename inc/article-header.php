
<header class="article-header text-center">
    <h1 itemprop="name headline" class="article-title h2 mb-2"><?php the_title(); ?></h1>
    <ul class="article-info flex-center reset-ul text-center note-meta">
        <li>
            <i class="czs-time-l"></i>
            <time datetime="<?php the_time( 'Y-m-d' ); ?>" itemprop="datePublished"
                  pubdate><?php the_time( 'Y-m-d' ); ?></time>
        </li>
        <?php
            $categorys = get_the_category();
            if (is_single() && $categorys) {
                $category = $categorys[0];
                echo "<li><i class='czs-folder-l'></i>&emsp;".get_category_parents($category->term_id, true, '')."</li>";
            }
        ?>
        <li class="c-hand">
            <i class="czs-comment-l"></i>
            <a class="pc" href="<?php echo get_comments_link(); ?>">评论(<?php echo get_comments_number('0', '1', '%'); ?>)</a>
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