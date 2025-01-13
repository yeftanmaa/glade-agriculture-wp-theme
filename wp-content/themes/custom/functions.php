<?php

    // Setup custom theme
    function theme_setup() {
        add_theme_support('wp-block-styles');
        add_theme_support('post-thumbnails');
    }
    add_action('after_setup_theme', 'theme_setup');

    // Custom stylesheet in asset folder
    function adding_custom_stylesheet() {
        wp_enqueue_style('style_header', get_template_directory_uri() . '/assets/css/header.css');
        wp_enqueue_style('style_landing', get_template_directory_uri() . '/assets/css/landing.css');
        wp_enqueue_style('style_footer', get_template_directory_uri() . '/assets/css/footer.css');
        wp_enqueue_style('style_single', get_template_directory_uri() . '/assets/css/single.css');
        wp_enqueue_style('style_privacy', get_template_directory_uri() . '/assets/css/privacy.css');
        wp_enqueue_style('style_services', get_template_directory_uri() . '/assets/css/services.css');
        wp_enqueue_style('style_search', get_template_directory_uri() . '/assets/css/search.css');
        wp_enqueue_style('style_category', get_template_directory_uri() . '/assets/css/category.css');
    }
    add_action('wp_enqueue_scripts', 'adding_custom_stylesheet');

    // Normalize CSS library
    function add_normalize_CSS() {
        wp_enqueue_style('normalize_styles', "https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css");
    }
    add_action('wp_enqueue_scripts', 'add_normalize_CSS');

    // Font Awesome library
    function add_font_awesome() {
        wp_enqueue_style('font_awesome_icons', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css");
    }
    add_action('wp_enqueue_scripts', 'add_font_awesome');

    // Enqueue block styles
    function enqueue_block_styles() {
        wp_enqueue_style('wp-block-library');
    }
    add_action('wp_enqueue_scripts', 'enqueue_block_styles');

    // Register a new sidebar named 'Sidebar'
    function add_widget_support() {
        register_sidebar(array(
            'name'          => 'Sidebar',
            'id'            => 'sidebar',
            'before_widget' => '<div>',
            'after_widget'  => '</div>',
            'before_title'  => '<h2>',
            'after_title'   => '</h2>',
        ));
    }
    add_action('widgets_init', 'add_widget_support');

    // Register a new navigation menu
    function add_Main_Nav() {
        register_nav_menu('header-menu', __('Header Menu'));
    }
    add_action('init', 'add_Main_Nav');

    // Enqueue theme styles
    function my_theme_enqueue_styles() {
        wp_enqueue_style('my-theme-style', get_stylesheet_uri(), array('wp-block-library')); // Your theme's stylesheet
    }
    add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');

    // Remove the default "Required fields are marked *" message in the comment form
    function remove_required_fields_message($defaults) {
        $defaults['comment_notes_before'] = '';
        return $defaults;
    }
    add_filter('comment_form_defaults', 'remove_required_fields_message');

    function adding_custom_scripts() {
        wp_enqueue_script(
            'custom_script',
            get_template_directory_uri() . '/assets/js/script.js',
            array(),
            null,
            true
        );

        wp_localize_script('custom_script', 'wpAjax', array(
            'ajaxUrl' => admin_url('admin-ajax.php'),
        ));
    }
    add_action('wp_enqueue_scripts', 'adding_custom_scripts');

    // Query to get most 4 viewed articles
    function get_latest_posts_json() {
        // Arguments for WP_Query to get the latest 4 posts
        $args = array(
            'post_type'      => 'post',
            'posts_per_page' => 4, // Get 4 latest posts
            'orderby'        => 'date',
            'order'          => 'DESC'
        );
    
        $query = new WP_Query($args);
        $posts_data = [];
    
        // Collect data for each post
        while ($query->have_posts()) {
            $query->the_post();
            $posts_data[] = [
                'title'       => get_the_title(),
                'date'        => get_the_date('F j, Y'),
                'excerpt'     => get_the_excerpt(),
                'thumbnail'   => get_the_post_thumbnail_url(get_the_ID()),
                'link'        => get_the_permalink(),
            ];
        }
    
        wp_reset_postdata();
    
        // Return posts data as JSON
        echo json_encode($posts_data);
        wp_die();
    }
    
    // Create a WordPress AJAX action for fetching the latest posts
    add_action('wp_ajax_get_latest_posts', 'get_latest_posts_json');
    add_action('wp_ajax_nopriv_get_latest_posts', 'get_latest_posts_json');

    add_action('wp_footer', function () {
        if (is_singular() && comments_open()) {
            ?>
            <script>
                document.addEventListener('DOMContentLoaded', function () {
                    tinymce.init({
                        selector: '#comment',
                        menubar: false,
                        toolbar: 'undo redo | bold italic underline | bullist numlist | link',
                        plugins: 'link lists',
                        setup: function (editor) {
                            editor.on('change', function () {
                                editor.save(); // Ensure content is saved into the textarea
                            });
                        }
                    });
                });
            </script>
            <?php

            ?>
                <style>
                    #comment {
                        border: 1px solid #ccc;
                        transition: background-color 0.3s, border-color 0.3s;
                    }

                    #comment:focus {
                        background-color: #f5f5f5;
                        border: 1px solid rgb(187, 255, 0);
                    }
                </style>
            <?php
        }
    });
    
    // Validate comment content before submission
    add_filter('preprocess_comment', function ($commentdata) {
        if (empty(trim($commentdata['comment_content']))) {
            wp_die('Error: Please type your comment text.');
        }
        return $commentdata;
    });

    function exclude_custom_pages_from_search($query) {
        if ($query->is_search && !is_admin()) {
            $excluded_titles = ['Privacy Policy']; // Add more titles as needed
            $excluded_ids = [];
    
            foreach ($excluded_titles as $title) {
                $page = get_page_by_title($title, OBJECT, 'page');
                if ($page) {
                    $excluded_ids[] = $page->ID;
                }
            }
    
            if (!empty($excluded_ids)) {
                $query->set('post__not_in', $excluded_ids);
            }
        }
    }
    add_action('pre_get_posts', 'exclude_custom_pages_from_search');
    
?>
