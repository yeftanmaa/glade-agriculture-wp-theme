<?php
/* Template Name: Privacy Policy */
get_header();
?>
<main class="container">
    <h1 class="is-size-1 has-text-centered has-text-black has-text-weight-medium mb-0 mt-6"><?php the_title() ?></h1>
    
    <p class="has-text-centered">
        Last updated <?php the_modified_date('F j, Y')  ?>
    </p>
    
    <div class="post-content-privacy"><?php the_content() ?></div>
</main>
<?php get_footer(); ?>
