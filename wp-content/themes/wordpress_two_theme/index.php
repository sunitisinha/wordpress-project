<?php get_header();


pageBanner(array(
  'title' => 'Welcome to our blog',
  'subtitle' => 'Keep up with our latest news'
))
  ?>



<div class="container container--narrow page-section">
  <?php
  while (have_posts()) {
    the_post(); ?>
    <div class="post-item">
      <h2 class="headline headline--medium headline--post-title"><a
          href="<?php echo the_permalink(); ?>"><?php echo the_title(); ?> </h2>
    </div>

    <div class="metabox">
      <p>Posted by <?php the_author_posts_link(); ?> on <?php the_time('n.j.y'); ?> in
        <?php echo get_the_category_list(', '); ?>
      </p>

    </div>

    <div class="generic-content">
      <?php the_excerpt(); ?>

    </div>

    <p><a class="btn btn--blue" href="<?php the_permalink(); ?>">Continue Reading</a></p>
    <?php
  }

  echo paginate_links();
  ?>
</div>

<?php get_footer(); ?>