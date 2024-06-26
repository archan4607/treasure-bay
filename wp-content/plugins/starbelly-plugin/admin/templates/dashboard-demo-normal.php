<?php
/**
* Template for theme dashboard demo content page
*/
?>

<div class="starbelly-dashboard-plugins">
  <div class="image-container">
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <lottie-player src="https://assets2.lottiefiles.com/packages/lf20_amiibtte.json"  background="transparent"  speed="1"  style="width: 100%; height: auto;"  loop  autoplay></lottie-player>
  </div>
  <div class="content-container">
    <div class="notice notice-error">
      <p><?php echo sprintf( __( 'One click demo install are available only with <strong>activated theme</strong>!', 'starbelly-plugin' ) );?></p>
    </div>
    <h2><?php echo esc_html__( 'Demo Import Status', 'starbelly-plugin' ); ?></h2>
    <div class="starbelly-dashboard-list">
      <ul>
        <li>
           <strong><span class="dashicons dashicons-no" title="<?php echo esc_attr__( 'Disabled! Need activate theme.', 'starbelly-plugin' ); ?>"></span></strong>
           <?php echo esc_html__( 'One Click Demo Import', 'starbelly-plugin' ); ?>
        </li>
        <li>
           <strong><span class="dashicons dashicons-no" title="<?php echo esc_attr__( 'Disabled! Need activate theme.', 'starbelly-plugin' ); ?>"></span></strong>
           <?php echo esc_html__( 'Theme Settings Import', 'starbelly-plugin' ); ?>
        </li>
      </ul>
    </div>
    <div class="buttons">
      <p>
        <a href="" class="button button-primary button-primary-disabled"><?php echo esc_html__( 'Install / Select Demo', 'starbelly-plugin' ); ?></a>
        <?php echo sprintf( __( '<a href="%s" class="button button-primary">Activate Theme</a>', 'starbelly-plugin' ), admin_url( 'admin.php?page=starbelly-theme-activation' ) ); ?>
      </p>
    </div>
  </div>
</div>
