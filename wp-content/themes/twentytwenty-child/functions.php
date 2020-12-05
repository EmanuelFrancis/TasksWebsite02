<?php

//function sess_start() {
//    if (!session_id())
//    session_start();
//}
//add_action('init','sess_start');

// include custom jQuery

//function add_theme_scripts() {
//  wp_enqueue_style( 'parent-style', get_stylesheet_directory_uri().'/style.css' );
//	wp_enqueue_style( 'style', get_stylesheet_directory_uri().'/style.css' );
//	wp_enqueue_style( 'style', get_stylesheet_directory_uri().'http://emanuelfrancis.co.uk/wp-content/themes/twentytwenty/style.css' );



//	wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css',false,'1.1','all');
//}
//  wp_enqueue_style( 'slider', get_template_directory_uri() . '/css/slider.css', array(), '1.1', 'all');

//  wp_enqueue_script( 'abc', get_template_directory_uri().'/includes/custom-scripts.js', array('jquery'), 1.1);

//  wp_deregister_script('jquery');
//  wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', array(), null, true);

  //wp_enqueue_style( 'parent-style', plugins_url( '/style.css' , __FILE__ ) );
//  wp_enqueue_script( 'custom-scripts', plugins_url( 'includes/custom-scripts.js' , __FILE__ ) );

  //  if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
  //    wp_enqueue_script( 'comment-reply' );
  //  }
//}
//add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );


function my_assets() {
	wp_register_script( 'custom-scripts', get_stylesheet_directory_uri() . '/js/custom-scripts.js', array( 'jquery' ) );
	wp_enqueue_script( 'custom-scripts' );
}

add_action( 'wp_enqueue_scripts', 'my_assets' );

function duplicate_test($SelCat, $cat){
	$isDupe;

	$arrlength2=count($cat);


$String1 = strval($SelCat);

	for($x=0;$x<$arrlength2;$x++)
		{

			$String2 = strval($cat[$x]);

		if($String1 === $String2){

			 $isDupe = 1;
			 return $isDupe;
		}else {
			$isDupe = 0;
		}

	}
return $isDupe;
}

function print_array($arr){
//$cars=array("Volvo","BMW","Toyota");
$arrlength=count($arr);

for($x=0;$x<$arrlength;$x++)
  {
  echo $arr[$x];
  echo "<br>";
}
}


function count_catagories($catagories){
  $noOfCats = count($catagories);
  return $noOfCats;
}

function cat_exists($catagories, $cat){
  $noOfCats = count($catagories);


		for($x=0;$x<$noOfCats;$x++)
			{

				$cat1 = strval($catagories[$x]);

			if($cat === $cat1){

  return $cat;
}else {
	return "Choose a catagory";
}
}
}
