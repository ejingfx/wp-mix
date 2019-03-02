<?php

get_header();
?>

	<main>
		<h1>Archive Page</h1>
		<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
				<?php print_r($post->post_title); ?>
			<?php endwhile; ?>
		<?php endif; ?>
	</main>

<?php
get_footer();
