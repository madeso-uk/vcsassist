	<div id="sidebar-vcspd" class="sidebar partner-directory widget-area" role="complementary">
    <?php wpbdp_the_main_links(); ?>
    <?php wpbdp_the_search_form(); ?>
    <?php wpbdp_the_directory_categories(); ?>
    <?php if ( is_active_sidebar( 'vcsassist_partner_directory' ) ) : ?>
        <?php dynamic_sidebar( 'vcsassist_partner_directory' ); ?>
    <?php endif; ?>
	</div><!-- #sidebar-vcspd -->
