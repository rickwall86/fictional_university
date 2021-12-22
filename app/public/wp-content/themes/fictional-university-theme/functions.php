<?php 

function pageBanner($args = NULL) {
  
  if (!$args['title']) {
    $args['title'] = get_the_title();
  }

  if (!$args['subtitle']) {
    $args['subtitle'] = get_field('page_banner_subtitle');
  }

  if (!$args['photo']) {
    if (get_field('page_banner_background_image') AND !is_archive() AND !is_home()) {
      $args['photo'] = get_field('page_banner_background_image')['sizes']['pageBanner'];
    } else {
      $args['photo'] = get_theme_file_uri('/images/ocean.jpg');
    }
  }

  ?>
  <div class="page-banner">
    <div class="page-banner__bg-image" style="background-image: url(<?php echo $args['photo']; ?>);"></div>
    <div class="page-banner__content container container--narrow">
      <h1 class="page-banner__title"><?php echo $args['title'] ?></h1>
      <div class="page-banner__intro">
        <p><?php echo $args['subtitle']; ?></p>
      </div>
    </div>  
  </div>
<?php }

//-----------------------//


// This is how we enqueue scripts and styles to our theme much like a <link> tag in the header of a normal website
function university_files() {
  wp_enqueue_script('main-university-js', get_theme_file_uri('/build/index.js'), array('jquery'), '1.0', true);
  wp_enqueue_style('university-main-styles', get_theme_file_uri('/build/style-index.css'));
  wp_enqueue_style('university-extra-styles', get_theme_file_uri('/build/index.css'));
  wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
  wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i
  ');

}

add_action('wp_enqueue_scripts', 'university_files'); // function call for above function

//-----------------------//

// This is where we add features to our website, such as menu locations, featured images etc
function university_features() {
  register_nav_menu('headerMenuLocation', 'Header Menu Location'); // adds menu options under appearence 
  register_nav_menu('exploreMenuLocation', 'Explore Menu Location');
  register_nav_menu('learnMenuLocation', 'Learn Menu Location');
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails'); // otherwise known as featured images for blog posts
  add_image_size('professorLandscape', 400, 260, true); // adds new sized image for all images added after uploading
  add_image_size('professorPortrait', 480, 650, true);
  add_image_size('pageBanner', 1500, 350, true);
}

add_action('after_setup_theme', 'university_features'); 

//-----------------------//

// used to manipulate and change the generic url based query of the event archive page
function university_adjust_queries($query) { // Function definintion (definining a custom function)
  if (!is_admin() AND is_post_type_archive('program') AND is_main_query()) {
    $query->set('orderby', 'title');
    $query->set('order', 'ASC');
    $query->set('posts_per_page', -1);
  }

  // Adding more manipulations to generic wordpress queries across our wordpress site
  if (!is_admin() AND is_post_type_archive('event') AND $query->is_main_query()) {
    $today = date('Ymd');
    $query->set('meta_key', 'event_date');
    $query->set('orderby', 'meta_value_num');
    $query->set('order', 'ASC');
    $query->set('meta_query', array(
      array(
        'key' => 'event_date',
        'compare' => '>=',
        'value' => $today,
        'type' => 'numeric'
      )
    ));
  }
}

add_action('pre_get_posts', 'university_adjust_queries');

?>