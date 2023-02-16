<?php get_header(); ?>
    <!-- 文章列表 -->
    <div class="article-list">
        <?php
			get_template_part( 'excerpt' );
			wp_reset_query();
		?>
    </div>
<?php the_pagination() ?>
<?php get_footer(); ?>