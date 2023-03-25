<?php
  $args = array(
    'post_type' => 'trends',
    'post_per_page' => 6,
    'order_by' => 'date',
    'order' => 'DESC'
  );

  $query = new WP_Query($args);
?>

<div class="trending-posts">
  <h2>Trending posts</h2>
  <ul class="trending-posts--list">
    <?php
    if($query->have_posts()):
      while($query->have_posts()):
        $query->the_post();
        $post = get_post();
    ?>
    <li class="trending-posts--item">
      <span class="trending-posts--item--tag">
        <?php
          $terms = get_the_terms($post, 'trend_categories');
          foreach($terms as $key => $value):
        ?>
            <?= $value->name; ?>
        <?php endforeach; ?>
      </span>
      <h3 class="trending-posts--item--name"><a href="/"><?= the_title() ?></a></h3>
      <p class="trending-posts--item--amount">
        <?php
          $engagement = implode(get_post_meta($post->ID, 'trend_engagement'));
          echo $engagement . ' people are talking about';
        ?>
      </p>
    </li>
    <?php
      endwhile;
    endif;
    ?>
  </ul>
</div>