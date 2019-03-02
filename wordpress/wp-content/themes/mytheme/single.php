<?php

get_header();
?>

	<main>
		<?php while (have_posts()) : the_post(); ?>
			<h1><?php the_title(); ?></h1>
			<time datetime="<?php the_time('d-m-Y'); ?>"><?php the_time('Y/m/d'); ?></time>
			<?php the_content(); ?>
		<?php endwhile; ?>
	</main>

<?php
get_footer();
