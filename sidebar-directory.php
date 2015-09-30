	<div id="sidebar-vcspd" class="sidebar partner-directory widget-area" role="complementary">
<h3>Browse Categories</h3>
    <?php vcs_categories_button(); ?>
<h3>Search Partners</h3>
    <?php wpbdp_the_search_form(); ?>
    <?php vcs_submitbutton(); ?>
    <?php // wpbdp_the_directory_categories(); ?>
    <?php if ( is_active_sidebar( 'vcsassist_partner_directory' ) ) : ?>
        <?php dynamic_sidebar( 'vcsassist_partner_directory' ); ?>
    <?php endif; ?>
	</div><!-- #sidebar-vcspd -->
