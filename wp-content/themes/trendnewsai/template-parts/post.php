<?php
  $author_ID = get_the_author_meta('ID');
  $author_name = get_the_author_meta('display_name');
  $author_URL = get_author_posts_url($author_ID);
  $author_image = get_avatar_url($author_ID);
  $long_content = get_the_content();
  $read_more = strlen($long_content) > 144;
  $short_content = $read_more
    ? substr($long_content, 0, 144) . '...'
    : $long_content;
?>
<div class="post">
  <div class="post--header">
    <a class="post--author-link" href="<?= $author_URL; ?>">
      <img class="post--author-image" src="<?= $author_image; ?>" alt="<?= $author_name; ?>"/>
      <p class="post--author-name"><?= $author_name; ?></p>
  </a>
  </div>
  <h1 class="post--title"><?= the_title(); ?></h1>
  <div class="post--content">
    <?= $short_content; ?>
  </div>
</div>