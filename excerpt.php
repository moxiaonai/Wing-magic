<?php
/**
 * Used for index/archive/search/author/catgory/tag.
 *
 */

$ii = 0;
while ( have_posts() ) : the_post();

    $_thumb = _get_post_thumbnail();
    $no_thumb = strstr($_thumb, 'data-thumb="default"');

    $_excerpt_text = '';
    if( $no_thumb ){
        $_excerpt_text .= ' excerpt-text';
    }
    if( is_post_new() ){
        $_excerpt_text .= ' excerpt-latest';
    }


    $ii++;
    echo '<div  class="divider my-1"></div>
        <article class="excerpt excerpt-'.$ii. $_excerpt_text .'">';
        if( !$no_thumb ){
            echo '<a'.' target="_blank"'.' class="focus" href="'.get_permalink().'">'.$_thumb.'</a>';
        }
        echo '<header>';
            echo '<h2><a'.' target="_blank"'.' href="'.get_permalink().'" title="'.get_the_title().get_the_subtitle(false).'-'.get_bloginfo('name').'">'.get_the_title().get_the_subtitle().'</a></h2>';
        echo '</header>';

        $excp = _get_excerpt(200);
        if( $excp ) echo '<p class="note">'.$excp.'</p>';
        ?>
            <div class="meta text-gray">
                <ul class="d-flex text-tiny text-gray reset-ul">
                    <li class="time">
                        <i class="czs-time"></i>
                        <time datetime="<?php the_time( 'c' ); ?>" itemprop="datePublished"
                                pubdate><?php the_time( 'Y-m-d' ); ?></time>
                    </li>
                    <li class="comments">
                        <i class="czs-comment"></i>
                        <?php comments_number( '0', '1', '%' ); ?>
                    </li>
                    <?php if ( $post_praise = get_praise() ) : ?>
                        <li class="likes">
                            <i class="czs-heart"></i>
                            <?= $post_praise ?>
                        </li>
                    <?php endif; ?>
                </ul>
                <a  class="btn btn-link btn-sm text-gray d-flex align-center a-link" href="<?php get_permalink(); ?>">
                    阅读全文 <i class="dashicons dashicons-arrow-right-alt ml-1"></i>
                </a>
            </div>
        </article>
    <?php

endwhile;