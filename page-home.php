<?php get_header(); ?>
        <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <?php get_template_part( 'parts/section', 'hero' ); ?>
                    <?php get_template_part( 'parts/section', 'services' ); ?>
                    <?php get_template_part( 'parts/section', 'home-blog' ); ?>
                </main>
            </div>
        </div>
<?php get_footer(); ?>
