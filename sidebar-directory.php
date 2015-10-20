	<div id="sidebar-vcspd" class="sidebar partner-directory widget-area" role="complementary">
    <h3>Browse Partners</h3>
    <?php vcspd_the_search_form(); ?> 
    <?php // vcs_categories_button(); ?>
    <?php // vcs_tag_button(); ?>
    <?php vcs_submitbutton(); ?>
    <?php if ( is_active_sidebar( 'vcsassist_partner_directory' ) ) : ?>
        <?php dynamic_sidebar( 'vcsassist_partner_directory' ); ?>
    <?php endif; ?>
	</div><!-- #sidebar-vcspd -->
