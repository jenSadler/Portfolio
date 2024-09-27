<?php
/*
Template Name: single
*/ ?>

<?php get_header(); ?>

<?php if (have_posts()) : the_post(); ?>

<header class="topBanner">
  <div class="holdBanner">
    <div class="holdLogo">
      <img src="<?php echo get_template_directory_uri();?>/img/logo.png" alt="Logo of a lightbulb with my initials as the filiment"/>
    </div>
    <h1 class="bannerHeader"><?php the_title(); ?></h1>

    <div class="bannerBlurb category"> <?php the_excerpt(); ?>

    </div>
  </div>
</header>



<main class="categoryMain">
  <?php the_content(); ?>

<div style="clear:both;" class="navPosts">
<?php next_posts_link( 'Older posts' ); ?>
<?php previous_posts_link( 'Newer posts' ); ?>
</div>
<?php else: ?>
  <p><?php _e('Sorry, There are not any new posts'); ?></p>
<?php endif; ?>
</main>



<?php get_footer(); ?>
