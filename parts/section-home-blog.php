<section class="home-blog">
    <h2>Latest News</h2>
    <div class="container">
        
        <?php

        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 3,
            'category__in' => array( 6, 7, 8),
            "category__not_in" => array( 1, 4)
        );

        $postlist = new WP_Query( $args );

            if( $postlist->have_posts() ):
                while( $postlist->have_posts() ) : $postlist->the_post();
                get_template_part( 'parts/content', 'latest-news' );
                endwhile;
                wp_reset_postdata();
            else:
                ?>
                <p>No content to display</p>
            <?php endif; ?>
        
    </div>
</section>