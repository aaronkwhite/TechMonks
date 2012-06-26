
<? /* http://codex.wordpress.org/Class_Reference/WP_Query */ ?>

<?php
/*
	Template Name: Episodes
*/
?>



<? /*


//Set the Query & Params!

$args = array(
	'posts_per_page' => 1,
	'post__in'  => get_option( 'sticky_posts' ),
	'ignore_sticky_posts' => 1
);
$query = new WP_Query( $args );


//Loop out the Shit

<?php while($query->have_posts()) : $query->the_post(); ?>

//Display some Shit Here, like so:

<img src="<?php echo get_post_meta($post->ID, 'portimage', true); ?>" alt="<?php the_title(); ?>" />

<?php endwhile; ?>

*/ ?>
