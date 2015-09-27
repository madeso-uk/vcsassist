	<div id="sidebar-vcspd" class="sidebar partner-directory widget-area" role="complementary">
    <?php vcs_submitbutton(); ?>
    <?php wpbdp_the_search_form(); ?>
    <?php // wpbdp_the_directory_categories(); ?>
    <?php vcs_categories_button(); ?>
    <?php if ( is_active_sidebar( 'vcsassist_partner_directory' ) ) : ?>
        <?php dynamic_sidebar( 'vcsassist_partner_directory' ); ?>
    <?php endif; ?>
	</div><!-- #sidebar-vcspd -->
