<?php get_header(); ?>

<main>
<div class="container search-custom-container">
    <h1>Search Results for: <?php echo get_search_query(); ?></h1>

    <?php if (have_posts()) : ?>
        <div class="columns is-multiline">
            <?php while (have_posts()) : the_post(); ?>
                <div class="column is-one-third">
                    <a href="<?php the_permalink() ?>" target="_blank">
                        <div class="suggested-articles-box is-shadowless">
                            <div class="image-container">
                                <img class="column-responsive-img" src="<?php the_post_thumbnail_url() ?>" />
                            </div>

                            <p class="mt-5 has-text-grey"><?php the_time('F j, Y'); ?></p>
                            
                            <h1 class="has-text-black has-text-weight-medium is-size-4 right-grid-title mt-2"><?php the_title() ?></h1>

                            <p class="has-text-grey"><?php echo wp_trim_words(get_the_excerpt(), 10, '...'); ?></p>

                            <p class="mt-2 tag
                                <?php 
                                $categories = get_the_category();
                                if ( ! empty( $categories ) ) {
                                    switch ($categories[0]->name) {
                                        case 'Uncategorised':
                                            echo 'is-white ';
                                            break;
                                        case 'Animal':
                                            echo 'is-warning ';
                                            break;
                                        case 'Health':
                                            echo 'is-primary ';
                                            break;
                                    }
                                }
                                ?> is-light has-text-black">

                                <?php
                                    if ( ! empty( $categories ) ) {
                                        echo esc_html( $categories[0]->name );
                                    }
                                ?>
                            </p>
                        </div>
                    </a>
                </div>
            <?php endwhile; ?>
        </div>
    <?php else : ?>
        <p>No results found. Please try a different search.</p>
    <?php endif; ?>
</div>

</main> 

<?php get_footer(); ?>
