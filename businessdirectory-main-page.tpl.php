<div id="wpbdp-main-page" class="wpbdp-main-page wpbdp-main businessdirectory wpbdp-page <?php echo join(' ', $__page__['class']); ?>">

          <?php // wpbdp_the_main_links(); ?>
          <?php // wpbdp_the_search_form(); ?>

    <?php echo $__page__['before_content']; ?>

    <div class="wpbdp-page-content <?php echo join(' ', $__page__['content_class']); ?>">
    		<?php // wpbdp_the_directory_categories(); ?>

        <?php if ($listings) { ?>
<?php echo $listings; } ?>
    </div>

</div>
