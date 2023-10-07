<?php
/*
Template Name: General Template
Default Template is index.php
*/
?>
<?php get_header(); ?>
        <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
        <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                        <div class="container">
                            <div class="general-template">
                                <?php
                                    if( have_posts() ):
                                        while( have_posts() ) : the_post();
                                        ?>
                                            <article>
                                                <h2><?php the_title(); ?></h2>
                                           
                                                <?php the_content(); ?>
                                            </article>
                                        <?php
                                        endwhile;
                                    else:
                                        ?>
                                        <p>No content to display</p>
                                    <?php endif; ?>
                            </div>
                        </div>
                </main>
            </div>
        </div>
<?php get_footer(); ?>
