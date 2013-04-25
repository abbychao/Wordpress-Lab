<?php 
/*
Template Name: About
*/
$email = get_post_meta($post->ID, 'email');	// returns a list


?>
<html>
<head>
	<title>About</title>
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri() ?>">
</head>
<body>
	<?php if(have_posts()): while (have_posts()): the_post(); ?>
	<h1> <?php the_title() ?></h1>
	<p><?php the_content() ?></p>
<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
</body>
</html>