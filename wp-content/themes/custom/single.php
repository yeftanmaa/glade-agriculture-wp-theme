<?php get_header(); ?>

<div class="container mx-auto has-text-left" style="margin: 50px; max-width: 800px;">
<?php
// Start the Loop
if ( have_posts() ) :
    while ( have_posts() ) : the_post();
?>

    <article class="post">
        <!-- Post Meta -->
        <div class="post-meta-custom post-meta columns mx-auto has-text-centered">
            <div class="column-mobile column">
                <div>
                    <?php
                    $categories = get_the_category();
                    if ( ! empty( $categories ) ) {
                        $cat_name = esc_html( $categories[0]->name );
                    }
                    ?>

                    <p><?php echo $cat_name ?></p>
                </div>
            </div>

            <div class="separator-line"></div>

            <div class="column-mobile column">
                <!-- Display the published date -->
                <p><?php echo get_the_date(); ?></p>
            </div>
        </div>

        <!-- Post Title -->
        <h1 class="post-title mt-5 mb-5 has-text-centered"><?php the_title(); ?></h1>

        <!-- Post Content -->
        <div class="post-content has-text-left px-2" style="line-height: 1.8; font-size: 1.1rem;">
            <?php the_content(); ?>
        </div>

        <!-- Comments Section -->
        <div class="post-comment mt-5" style="border-top: 1px solid #ddd; padding-top: 20px;">
            <?php comments_template(); ?>
        </div>
    </article>

<?php endwhile;
else :
    echo '<p>No posts found.</p>';
endif;
?>
</div>

<?php get_footer(); ?>
