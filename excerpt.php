<?php
    $i = 0;
    while ( have_posts() ) : the_post();
        $i++;
        echo '<div  class="divider my-1"></div>
        <article class="excerpt excerpt-text">';
        echo '<header>';
            echo '<h3><a'.' target="_blank"'.' href="'.get_permalink().'" title="'.get_the_title().get_the_subtitle(false).'-'.get_bloginfo('name').'">'.get_the_title().get_the_subtitle().'</a></h3>';
        echo '</header>';
        ?>
            <div class="meta text-gray">
                <ul class="note-meta">
                    <li class="note-meta-time"><i class="czs-time-l"></i><time datetime="<?php the_time( 'c' ); ?>" itemprop="datePublished"
                                    pubdate><?php the_time( 'Y-m-d' ); ?></time></li>
                    <li class="note-meta-comment"><i class="czs-comment-l"></i><span> <?php comments_number( '0', '1', '%' ); ?></span></li>
                    <li class="likes">
                        <i class="czs-heart-l"></i>
                        <?php echo get_praise(); ?>
                    </li>
                    <li class="likes">
                        <i class="czs-eye-l"></i>
                        <?php echo get_views(); ?>
                    </li>
                </ul>
            </div>
        </article>
    <?php

endwhile;