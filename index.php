<?php
/**
 * Index template
 */
get_header();
?>

<section style="padding: 8rem 2rem; max-width: 1400px; margin: 0 auto;">
    <?php
    if (have_posts()) {
        while (have_posts()) {
            the_post();
            ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <h1><?php the_title(); ?></h1>
                <div class="entry-content">
                    <?php the_content(); ?>
                </div>
            </article>
            <?php
        }
    } else {
        ?>
        <p><?php _e('No hay contenido disponible.', 'vcstudio-theme'); ?></p>
        <?php
    }
    ?>
</section>

<?php get_footer();
