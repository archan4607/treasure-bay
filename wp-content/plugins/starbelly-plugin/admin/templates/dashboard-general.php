<?php

/**
* Template for theme dashboard welcome page
*/
?>

<div class="starbelly-dashboard-general">
  <div class="image-container">
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <lottie-player src="https://assets2.lottiefiles.com/packages/lf20_amiibtte.json"  background="transparent"  speed="1"  style="width: 100%; height: auto;"  loop  autoplay></lottie-player>
  </div>
  <div class="content-container">
    <h1>
      <span>
        <?php echo sprintf( __( 'Welcome to the %s v%s', 'starbelly-plugin' ), starbelly_theme_info()->name, starbelly_theme_info()->version ); ?>
        <?php if ( starbelly_plugin_info()->capability == 'normal' ) : ?>
        <span class="sticker sticker-not"><?php echo esc_html__( 'Not Activated', 'starbelly-plugin' ); ?></span>
        <?php else : ?>
        <span class="sticker sticker-yes"><?php echo esc_html__( 'Activated', 'starbelly-plugin' ); ?></span>
        <?php endif; ?>
      </span>
    </h1>
    <p><?php echo esc_html__( 'Theme is already installed and ready to use! Thank you for choosing our theme!', 'starbelly-plugin' ); ?></p>
    <p><img src="<?php echo get_template_directory_uri() . '/screenshot.png'; ?>" alt="" /></p>
  </div>
</div>
