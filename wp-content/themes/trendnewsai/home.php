<?php get_header(); ?>
<div class='container home'>
  <div class="main">
    <?php get_template_part('template-parts/sidebar-left'); ?>
    <div class='post-list'></div>
    <?php get_template_part('template-parts/sidebar-right'); ?>
  </div>
</div>
<script
  type="module"
  src="<?= get_template_directory_uri(); ?>/assets/theme/scripts/post-list.js">
</script>

<?php get_footer(); ?>