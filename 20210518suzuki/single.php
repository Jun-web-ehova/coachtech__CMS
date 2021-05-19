<?php get_header(); ?>
<?php if (have_posts()) : the_post(); ?>
  <div class="single__main">
    <div class="single__box">
      <div class="single__box-header">
        <?php if (has_category()) : ?>
          <div class="single__box-header--category"><?php echo get_the_category_list(' '); ?></div>
        <?php endif; ?>
        <h1 class="single__box-header--title"><?php the_title(); ?></h1>
        <p class="single__box-header--date"><?php echo get_the_date('Y-m-d'); ?></p>
      </div>
      <div class="single__box-img">
        <?php if (has_post_thumbnail()) : ?>
          <?php the_post_thumbnail(); ?>
        <?php else : ?>
          <img src="<?php echo get_template_directory_uri(); ?>/img/blog__first.jpg">
        <?php endif; ?>
      </div>

      <div class=" single__box-content">
        <?php the_content(); ?>

      </div>
    </div>
  </div>
<?php endif; ?>
<?php get_footer(); ?>