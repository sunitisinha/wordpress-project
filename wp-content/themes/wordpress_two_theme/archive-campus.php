<?php get_header();
pageBanner(array(
  'title' => 'Our Campuses',
  'subtitle' => 'We have several located campuses.'
))
  ?>


<div class="acf-map">
  <div class="container container--narrow page-section">
    <?php
    while (have_posts()) {
      the_post(); ?>
      <div class="marker" data-lat="<?php echo $mapLocation['lat']; ?>" data-lng="<?php echo $mapLocation['lng']; ?>">
        <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
        <?php echo $mapLocation['address']; ?>
      </div>
      <?php
    }


    ?>
  </div>


  <?php get_footer(); ?>