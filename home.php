<?php get_header(); ?>

<header class="topBanner">
  <div class="holdBanner">
    <div class="holdLogo">
      <img src="<?php echo get_template_directory_uri();?>/img/logo.png" alt="Logo of a lightbulb with my initials as the filiment"/>
    </div>
    <h1 class="bannerHeader">Hi! I'm <br/>Jen Sadler</h1>
    <img class="profilePic" src="<?php echo get_template_directory_uri();?>/img/profile.png" alt="Picture of me - a heavyset thirty year old white woman with brown hair and blue eyes - Next to an alpaca"/>

    <div class="bannerBlurb"> I create <a href="/category/websites/">websites</a>,<a href="/category/elearning/"><br/>learning objects</a>, and <a href="/category/video/">videos</a></div>
  </div>
</header>

<section class="projectSection webProjectSection">
  <h2 class="longBar">Featured Web Projects</h2>
	
<?php
$args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'category_name' => 'websites',
    'posts_per_page' => 4,
);
$arr_posts = new WP_Query( $args );
  
if ( $arr_posts->have_posts() ) :
	?>
  <div class="holdTiles">
	  <?php
    while ( $arr_posts->have_posts() ) :
        $arr_posts->the_post();
        ?>
		<div class="projectTile" id="post-<?php the_ID(); ?>"><a href="<?php the_permalink(); ?>">
    <h3 class="projectTitle"><?php the_title(); ?></h3>
			<?php
            if ( has_post_thumbnail() ) :
                the_post_thumbnail('large', array('class' => 'projectImg'));
            endif;
            ?>
  		</a>
		</div>
        <?php
    endwhile; ?>
	</div>
<?php endif;?>
	
</section>

<section class="projectSection eLearningProjectSection">
  <h2 class="shortBars">Featured eLearning Project</h2>
    <?php
$args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'category_name' => 'eLearning',
    'posts_per_page' => 1,
);
$arr_posts = new WP_Query( $args );
  
if ( $arr_posts->have_posts() ) :
	?>
  <div class="holdTiles">
	  <?php
    while ( $arr_posts->have_posts() ) :
        $arr_posts->the_post();
        ?>
		<div class="projectTile" id="post-<?php the_ID(); ?>"><a href="<?php the_permalink(); ?>">
    <h3 class="projectTitle"><?php the_title(); ?></h3>
			<?php
            if ( has_post_thumbnail() ) :
                the_post_thumbnail('large', array('class' => 'projectImg'));
            endif;
            ?>
  		</a>
		</div>
        <?php
    endwhile; ?>
	</div>
<?php endif;?>
</section>

<section class="projectSection videoProjectSection">
<h2 class="shortBars">Featured Video Project</h2>
     <?php
$args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'category_name' => 'video',
    'posts_per_page' => 1,
);
$arr_posts = new WP_Query( $args );
  
if ( $arr_posts->have_posts() ) :
	?>
  <div class="holdTiles">
	  <?php
    while ( $arr_posts->have_posts() ) :
        $arr_posts->the_post();
        ?>
		<div class="projectTile" id="post-<?php the_ID(); ?>"><a href="<?php the_permalink(); ?>">
    <h3 class="projectTitle"><?php the_title(); ?></h3>
			<?php
            if ( has_post_thumbnail() ) :
                the_post_thumbnail('large', array('class' => 'projectImg'));
            endif;
            ?>
  		</a>
		</div>
        <?php
    endwhile; ?>
	</div>
<?php endif;?>
</section>

<section class="projectSection learnMoreSection">
<h2 class="shortBars">Learn More</h2>
<div class="holdLearnMore">
  <a href="#"><h3 class="infoButton">About</h3></a>
  <a href="#"><h3 class="infoButton">Resume</h3></a>
  <a href="#"><h3 class="infoButton">Contact</h3></a>
</div>
</section>

<?php get_footer()?>
