<?php
/* Template Name: Blog Categories */
get_header();
?>

<main>
    <div class="category-custom-container container">
        <?php
        // Get all categories
        $categories = get_categories();

        foreach ($categories as $category) : ?>
            <h1 class="mb-0"><?php echo esc_html($category->name); ?></h1>
            <div class="hline"></div>

            <div class="columns is-multiline">
                <?php
                // Get posts for this category
                $posts = get_posts(array(
                    'category' => $category->term_id,
                    'posts_per_page' => -1, // Change to limit posts if needed
                ));

                if ($posts) :
                    foreach ($posts as $post) :
                        setup_postdata($post); ?>
                        <div class="column is-one-third">
                            <a href="<?php the_permalink(); ?>" target="_blank">
                                <div class="suggested-articles-box is-shadowless">
                                    <div class="image-container">
                                        <img class="column-responsive-img" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" />
                                    </div>

                                    <p class="mt-5 has-text-grey"><?php the_time('F j, Y'); ?></p>

                                    <h1 class="has-text-black has-text-weight-medium is-size-4 right-grid-title mt-2"><?php the_title(); ?></h1>

                                    <p class="has-text-grey"><?php echo wp_trim_words(get_the_excerpt(), 10, '...'); ?></p>

                                    <p class="mt-2 tag 
                                        <?php 
                                        switch ($category->name) {
                                            case 'Uncategorised':
                                                echo 'is-white ';
                                                break;
                                            case 'Animal':
                                                echo 'is-warning ';
                                                break;
                                            case 'Health':
                                                echo 'is-primary ';
                                                break;
                                            default:
                                                echo 'is-info ';
                                                break;
                                        }
                                        ?> 
                                        is-light has-text-black">
                                        <?php echo esc_html($category->name); ?>
                                    </p>
                                </div>
                            </a>
                        </div>
                    <?php endforeach;
                    wp_reset_postdata();
                else : ?>
                    <p>No posts found in this category.</p>
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
    </div>
</main>

<?php get_footer(); ?>
