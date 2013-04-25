<?php
	$books = new WP_Query('category_name=books');
	$books = $books->posts;
?>


<html>
<head>
	<title>ITP 460 Demo</title>
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri() ?>">
</head>
<body>
	<p>Welcome to ITP 460</p>

	<?php // print_r($books) ?>

	<?php foreach($books as $book): ?>
		<div class="book">
			<?php echo $book->post_title ?>
		</div>
	<?php endforeach ?>

</body>
</html>