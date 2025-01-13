<?php

function my_custom_comment_form($args = null) {
    // Default arguments to pass to comment_form()
    $commenter = wp_get_current_commenter();

    // Custom fields and settings for the comment form
    $args = wp_parse_args($args, array(
        'fields' => array(
            'author' => '<div class="field"><label class="label">Name</label><div class="control"><input type="text" name="author" id="author" class="input" placeholder="Your name" value="' . esc_attr($commenter['comment_author']) . '" required /></div></div>',
            'email' => '<div class="field"><label class="label">Email</label><div class="control"><input type="email" name="email" id="email" class="input" placeholder="Your email" value="' . esc_attr($commenter['comment_author_email']) . '" required /></div></div>',
            'url' => '<div class="field"><label class="label">Website (optional)</label><div class="control"><input type="url" name="url" id="url" class="input" placeholder="Your website URL" value="' . esc_attr($commenter['comment_author_url']) . '" /></div></div>',
        ),
        'comment_field' => '<div class="field"><div class="control">' .
            '<textarea id="comment" name="comment" class="textarea" placeholder="Your comment" rows="5"></textarea>' .
        '</div></div>',
        'label_submit' => 'Post Comment',
        'submit_button' => '<button type="submit" class="button is-rounded is-black mb-5"><b>Post Comment</b></button>',
    ));

    comment_form($args);
}

// Custom callback for displaying each comment
function my_custom_comment($comment, $args, $depth) {
    $GLOBALS['comment'] = $comment; // Set up the global comment object
    ?>
    <div class="box comment" id="comment-<?php comment_ID(); ?>">
        <div class="columns is-gap-1">
            <div class="column is-narrow">
                <div class="comment-avatar">
                    <?php echo get_avatar($comment, 50); // Display the avatar ?>
                </div>
            </div>
            <div class="column">
                <div class="comment-details">
                    <strong class="is-size-5"><?php comment_author(); ?></strong>
                    <p class="is-size-7 has-text-grey"><?php comment_date(); ?></p>
                </div>
                <div class="comment-content">
                    <?php comment_text(); ?>
                </div>
            </div>
        </div>
    </div>
    <?php
}

// Display comments and the comment form
echo '<div class="px-2 mb-5 is-flex is-gap-1 is-align-content-center">
        <div class="">
            <h3 class="title is-5 py-1">Comments</h3>
        </div>
        <div>
            <h3 class="title is-6 has-background-warning px-4 py-1" style="border-radius: 40px; margin-top: 2px;">' . get_comments_number() . '</h3>
        </div>
    </div>';

my_custom_comment_form();
wp_list_comments(array('callback' => 'my_custom_comment'));

?>
