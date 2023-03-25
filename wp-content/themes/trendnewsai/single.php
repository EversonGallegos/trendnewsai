<?php get_header(); ?>

<?php
  the_post();
  $author_ID = get_the_author_meta('ID');
  $author_name = get_the_author_meta('display_name');
  $author_URL = get_author_posts_url($author_ID);
  $author_image = get_avatar_url($author_ID);
  $content = get_the_content();
?>

<div class='container single'>
  <div class="main">
    <?php get_template_part('template-parts/sidebar-left'); ?>
    <div class='content'>
      <div class="post">
        <div class="post--header">
          <a class="post--author-link" href="<?= $author_URL; ?>">
            <img class="post--author-image" src="<?= $author_image; ?>" alt="<?= $author_name; ?>"/>
          </a>
          <p class="post--author-name">
            <a class="post--author-link" href="<?= $author_URL; ?>"><?= $author_name; ?></a>
          </p>
        </div>
        <h1 class="post--title"><?= the_title(); ?></h1>
        <div class="post--content">
          <?= $content; ?>
        </div>
        <div class="post--aux-buttons">
          <span class="button">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#000000" viewBox="0 0 256 256">
              <rect width="25" height="25" fill="none"></rect>
              <path
              d='M77.4,201.9l-32.3,27A8,8,0,0,1,32,222.8V64a8,8,0,0,1,8-8H216a8,8,0,0,1,8,8V192a8,8,0,0,1-8,8H82.5A7.8,7.8,0,0,0,77.4,201.9Z'
              fill="none" stroke="#000000" stroke-linecap="round"
                stroke-linejoin="round" stroke-width="16">
              </path>
            </svg>
          </span>
          <span class="button">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#000000" viewBox="0 0 256 256">
              <rect width="25" height="25" fill="none"></rect>
              <polyline points="176 152 224 104 176 56" fill="none" stroke="#000000" stroke-linecap="round"
                stroke-linejoin="round" stroke-width="16">
              </polyline>
              <path d="M192,216H40a8,8,0,0,1-8-8V88" fill="none" stroke="#000000" stroke-linecap="round"
                stroke-linejoin="round" stroke-width="16"></path><path d="M75,176a96.1,96.1,0,0,1,93-72h56"
                fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="16">
              </path>
            </svg>
          </span>
        </div>
      </div>
    </div>
    <?php get_template_part('template-parts/sidebar-right'); ?>
  </div>
</div>
<?php get_footer(); ?>