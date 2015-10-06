	<div id="sidebar-vcspd" class="sidebar partner-directory widget-area" role="complementary">
    <?php vcs_categories_button(); ?>
<h3>Search Partners</h3>
    <?php wpbdp_the_search_form(); ?>
    <?php vcs_submitbutton(); ?>
    <?php if ( is_active_sidebar( 'vcsassist_partner_directory' ) ) : ?>
        <?php dynamic_sidebar( 'vcsassist_partner_directory' ); ?>
    <?php endif; ?>
	</div><!-- #sidebar-vcspd -->
