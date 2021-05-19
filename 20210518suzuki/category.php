<?php get_header(); ?>


<div class="category__top">
  <div class="category__top-title">
    <h1><?php single_cat_title(); ?></h1>
  </div>
</div>


<div class="main">
  <div class="box">
    <div class="new-post">
      <div class="category__content-box">
        <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>
            <a href="<?php the_permalink(); ?>" class="new-post__card-box">

              <div class="new-post__card">
                <div class="new-post__card-img">
                  <?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail(); ?>
                  <?php else : ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/blog__first.jpg">
                  <?php endif; ?>
                </div>
                <p class=" new-post__card-text"><?php
                                                if (mb_strlen($post->post_title, 'UTF-8') > 30) {
                                                  $title = mb_substr($post->post_title, 0, 30, 'UTF-8');
                                                  echo $title . '…';
                                                } else {
                                                  echo $post->post_title;
                                                }
                                                ?></p>
                <p class="new-post__card-date"><?php echo get_the_date('Y-m-d'); ?></p>
              </div>
            </a>

          <?php endwhile; ?>
        <?php else : ?>
          <p>投稿が見つかりません。</p>
        <?php endif; ?>
      </div>
    </div>

    <?php get_sidebar(); ?>
  </div>
</div>
<?php get_footer(); ?>
</body>

</html>