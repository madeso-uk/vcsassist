 <?php
/**
 * The sidebar containing the main widget area.
 *
 * @package _s
 */
// if ( !empty($wp_registered_sidebars) ) {
		$sidebars_widgets = wp_get_sidebars_widgets();
//  echo '<pre>';
//    print_r($sidebars_widgets);
//   echo '</pre>';
		$num_widgets = 0;
		foreach ( (array) $sidebars_widgets as $k => $v ) {
			if ( 'vcsassist_supporters' != $k )
				continue;
			if ( is_array($v) )
				$num_widgets = $num_widgets + count($v);
		}
		$num = number_format_i18n( $num_widgets );
    $finalnum = $num - 1;


 if ( is_active_sidebar( 'vcsassist_supporters' ) ) : ?>
   <div id="vcs_supporters" class="widget-area col-<?php echo $finalnum; ?>" role="complementary">
    <?php dynamic_sidebar( 'vcsassist_supporters' ); ?>
  </div><!-- #secondary -->
<?php else : include('inc/sponsors.php'); ?>
<?php endif; ?>
