<?php

get_header();
?>

    <main>
        <ul>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <li>
                <article>
                    <a href="<?= get_the_permalink(); ?>">
                        <h2><?= the_title(); ?></h2>
                        <p><?= the_content(); ?></p>
                    </a>
                </article>
            </li>
            <?php endwhile; ?>
            <?php endif; ?>
        </ul>
    </main>

<?php
get_footer();
