<?php
$list_stuff = $this;
$lcp_display_output = '';
$lcp_display_output .= vcspd_header();
foreach ($this->catlist->get_categories_posts() as $single){
  $lcp_display_output .= '<div class="entry-content">';
  $lcp_display_output .= 'here is post';
  $lcp_display_output .= '</div>';
}
$lcp_display_output .= vcspd_footer();
$this->lcp_output = $lcp_display_output;
