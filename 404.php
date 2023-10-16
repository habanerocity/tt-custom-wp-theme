<?php get_header(); ?>
    <div id="content" class="site-content">
        <div id="primary" class="content-area">
            <main id="main" class="site-main">
                    <div class="container">
                        <div class="error-404">
                            <header>
                                <h1><?php e_( 'Page not found', 'wp-devs' ); ?></h1>
                                <p><?php e_( 'Unfortunately, this page does not exist.', 'wp-devs' ); ?></p>
                            </header>
                            <div class="error">
                                <p> <?php e_('How about searching for the page you had in mind?', 'wp-devs' ); ?></p>
                                <?php get_search_form(); ?>
                                <?php the_widget( 
                                    'WP_Widget_Recent_Posts', 
                                     array(
                                        'title' => 'Latest Posts',
                                        'number' => 3
                                     )
                                     ); ?>
                            </div>
                        </div>
                    </div>    
            </main>    
        </div>
    </div>
<?php get_footer(); ?>