 <?php
/**
 * The sidebar containing the main widget area.
 *
 * @package _s
 */

if ( ! is_active_sidebar( 'vcsassist_supporters' ) ) {
	return;
}
?>
<div id="vcs_supporters" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'vcsassist_supporters' ); ?>
</div><!-- #secondary -->
