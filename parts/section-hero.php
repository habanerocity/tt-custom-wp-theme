<?php
    $hero_title = get_theme_mod( 'set_hero_title', __( 'Enter Your Hero Title', 'wp-devs') );
    $hero_subtitle = get_theme_mod( 'set_hero_subtitle', __( 'Enter Your Hero Subtitle', 'wp-devs') );
    $hero_button_text = get_theme_mod( 'set_hero_button_text', __( 'Learn More', 'wp-devs' ) );
    $hero_button_link = get_theme_mod( 'set_hero_button_link', '#' );
    $hero_height = get_theme_mod( 'set_hero_height', 800 );
    $hero_background_image = wp_get_attachment_url( get_theme_mod( 'set_hero_background_image' ) );
?>

<section class="hero" style="background-image: url('<?php echo esc_url( $hero_background_image ) ?>');">
    <div class="overlay" style="min-height: <?php echo esc_attr( $hero_height ) ?>px">
        <div class="container">
            <div class="hero-items">
                <h1><?php echo esc_html( $hero_title ); ?></h1>
                <p><?php echo  nl2br( esc_html( $hero_subtitle ) ); ?></p>
                <a href="<?php echo esc_url( $hero_button_link ) ?>"><?php echo esc_html( $hero_button_text ); ?></a>
            </div>
        </div>
    </div>
</section>