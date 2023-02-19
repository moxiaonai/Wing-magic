<?php get_header(); ?>
    <!-- 文章列表 -->
    <?php
        $category = get_the_category();
        if($category && $category[0]){
            echo '<div class="catleader"><h3>'.$category[0]->cat_name.'</h3></div>';
        }
    ?>
    <div class="article-list">
        <?php
			get_template_part( 'excerpt' );
			wp_reset_query();
		?>
    </div>
<?php the_pagination() ?>
<?php get_footer(); ?>