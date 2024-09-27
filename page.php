<!DOCTYPE html>
<?php get_header(); ?>

<?php
$category = get_queried_object();
$categoryId=$category->term_id;
$categoryName=$category->name;

$community_args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
	'cat' => $categoryId,
    'tag' => 'community'
);
$community_arr_posts = new WP_Query( $community_args );

$personal_args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
	'cat' => $category->term_id,
    'tag' => 'personal'
);
$personal_arr_posts = new WP_Query( $personal_args );

$western_args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
	'cat' => $category->term_id,
    'tag' => 'western-university'
);
$western_arr_posts = new WP_Query( $western_args );

?>
<header class="topBanner">
  <div class="holdBanner">
    <div class="holdLogo">
      <img src="<?php echo get_template_directory_uri();?>/img/logo.png" alt="Logo of a lightbulb with my initials as the filiment"/>
    </div>
    <h1 class="bannerHeader"><?php echo($categoryName); ?></h1>

    <div class="bannerBlurb category"> <?php echo(category_description($categoryId)); ?>
		 
	<?php if ( $community_arr_posts->have_posts() ) :?>
      <p><a href="#communityProjects">Community </a></p>
		<?php endif ?>
		
		<?php if ( $western_arr_posts->have_posts() ) :?>
      <p><a href="#westernProjects">Western University</a></p>
		<?php endif ?>
		<?php if ( $personal_arr_posts->have_posts() ) :?>
      <p><a href="#personalProjects">Personal </a></p>
		<?php endif ?>
    </div>
  </div>
</header>
	  
<main class="categoryMain">

  
	
<?php
	

	

  
if ( $community_arr_posts->have_posts() ) :
	?>
	<h2 class="longBar category" id="communityProjects">Community Projects</h2>
  <div class="holdProjects">
	  <?php
    while ( $community_arr_posts->have_posts() ) :
        $community_arr_posts->the_post();
        ?>
	  <div class="project">
    <div class="holdProjectImg">
    <?php
          if ( has_post_thumbnail() ) :
                the_post_thumbnail('large', array('class' => 'categoryProjectImg'));
            endif;
            ?>
  </div>
    <div class="projectBlurb">
      <h3 class="projectHeader"><?php the_title(); ?></h3>
      <?php the_excerpt(); ?>
      <a href="<?php the_permalink(); ?>" class="projectLink">Learn more about the <?php the_title(); ?> Site</a>
    </div>
	  
	  
		</div>
        <?php
    endwhile; ?>
	</div>
<?php endif;?>


  
	
<?php

  
if ( $western_arr_posts->have_posts() ) :
	?>
	<h2 class="longBar category" id="westernProjects">Western University Projects</h2>
  <div class="holdProjects">
	  <?php
    while ( $western_arr_posts->have_posts() ) :
        $western_arr_posts->the_post();
        ?>
	  <div class="project">
    <div class="holdProjectImg">
    <?php
            if ( has_post_thumbnail() ) :
                the_post_thumbnail('large', array('class' => 'categoryProjectImg'));
            endif;
            ?>
  </div>
    <div class="projectBlurb">
      <h3 class="projectHeader"><?php the_title(); ?></h3>
      <?php the_excerpt(); ?>
      <a href="<?php the_permalink(); ?>" class="projectLink">Learn more about the <?php the_title(); ?> Site</a>
    </div>
	  
	  
		</div>
        <?php
    endwhile; ?>
	</div>
<?php endif;?>

  
  	
<?php

  
if ( $personal_arr_posts->have_posts() ) :
	?>
	<h2 class="longBar category" id="personalProjects">Personal Projects</h2>
  <div class="holdProjects">
	  <?php
    while ( $personal_arr_posts->have_posts() ) :
        $personal_arr_posts->the_post();
        ?>
	  <div class="project">
    <div class="holdProjectImg">
    <?php
            if ( has_post_thumbnail() ) :
                the_post_thumbnail('large', array('class' => 'categoryProjectImg'));
            endif;
            ?>
  </div>
    <div class="projectBlurb">
      <h3 class="projectHeader"><?php the_title(); ?></h3>
      <?php the_excerpt(); ?>
      <a href="<?php the_permalink(); ?>" class="projectLink">Learn more about the <?php the_title(); ?> Site</a>
    </div>
	  
	  
		</div>
        <?php
    endwhile; ?>
	</div>
<?php endif;?>

</main>

<?php get_footer(); ?>
	  