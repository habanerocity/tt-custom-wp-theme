<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header>
        <h1><?php the_title(); ?></h1>
        <div class="meta-info">
            <p><?php esc_html(_e('Posted on', 'wp-devs')) ?> <?php echo get_the_date(); ?> <?php _e('by', 'wp-devs') ?> <?php the_author_posts_link(); ?> </p>
            <?php if( has_category()): ?>
                <p><?php esc_html(_e( 'Categories', 'wp-devs' )) ?>: <?php the_category( ' ' ); ?></p>
            <?php endif; ?>
            <?php if( has_tag()): ?>
                <p><?php esc_html(_e('Tags', 'wp-devs' )) ?>: <?php the_tags( '', ', '); ?></p>
            <?php endif; ?>
        </div>
    </header>
    <div class="content">
        <?php the_content(); ?>
    </div>
</article>