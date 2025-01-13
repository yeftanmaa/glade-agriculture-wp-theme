<?php get_header(); ?>
  <!-- Jumbotron Section -->
  <div class="jumbotron">
    <div class="container landing-container is-flex is-flex-direction-column is-justify-content-center is-align-items-flex-start">
      <h1 class="content-jumbotron">
        Utilization of Technology to Support Environmentally Friendly Agriculture
      </h1>

      <form class="form-search" action="<?php echo esc_url(home_url('/')); ?>" method="get">
        <fieldset id="landing">
              <span class="icon is-small is-left mx-2">
                <i class="fas fa-search"></i>
              </span>

              <input class="has-icon-right input-search-articles" type="search" 
              name="s" placeholder="Search articles...">
              
              <button type="submit" class="button btn-search-articles px-2">Search</button>
        </fieldset>
      </form>
    </div>
  </div>

  <!-- Popular Articles Section -->
  <div class="container popular-articles-container">
    <h1 class="has-text-black has-text-weight-medium is-size-1-desktop is-size-3-mobile">Latest Articles</h1>

    <div class="fixed-grid has-2-cols">
      <div class="grid is-gap-3">

        <!-- Left side -->
        <div class="cell is-row-span-3">
          <a class="left-grid-link" href="" target="_blank">
            <div class="card p-0">
              <div
                  class="left-grid-image left-side-cardimg"
                  alt="Most viewed article"
                >
              </div>

              <div class="card-content">
                <p class="mt-5 is-size-5 left-grid-date">Placeholder Date</p>

                <h1 class="mt-3 is-size-2 has-text-weight-medium has-text-black left-grid-title">Placeholder Title</h1>
                <p class="is-size-5 left-grid-excerpt">Placeholder Excerpt</p>
              </div>
            </div>
          </a>
        </div>

        <!-- Right side -->
        <a class="right-grid-link" href="" target="_blank">
          <div class="cell">
            <div class="card is-flex is-gap-2">
              <div class="image-container">
                <img
                  class="grid-responsive-img right-grid-img"
                  src="http://localhost/wp_localhost/wp-content/uploads/2025/01/orange-1-768x512.jpg"
                  alt="Placeholder image"
                />
              </div>
              <div class="custom-card-content">
                <p class="right-grid-date">Placeholder Date</p>
                <h1 class="has-text-black has-text-weight-medium is-size-4 right-grid-title">Placeholder Title</h1>
              </div>
            </div>
          </div>
        </a>
      
        <a class="right-grid-link" href="" target="_blank">
          <div class="cell">
            <div class="card is-flex is-gap-2">
              <div class="image-container">
                <img
                  class="grid-responsive-img right-grid-img"
                  src="http://localhost/wp_localhost/wp-content/uploads/2025/01/orange-1-768x512.jpg"
                  alt="Placeholder image"
                />
              </div>
              <div class="custom-card-content">
                <p class="right-grid-date">Placeholder Date</p>
                <h1 class="has-text-black has-text-weight-medium is-size-4 right-grid-title">Placeholder Title</h1>
              </div>
            </div>
          </div>
        </a>
      
        <a class="right-grid-link" href="" target="_blank">
          <div class="cell">
            <div class="card is-flex is-gap-2">
              <div class="image-container image-container-custom">
                <img
                  class="grid-responsive-img right-grid-img"
                  src="http://localhost/wp_localhost/wp-content/uploads/2025/01/orange-1-768x512.jpg"
                  alt="Placeholder image"
                />
              </div>
              <div class="custom-card-content">
                <p class="right-grid-date">Placeholder Date</p>
                <h1 class="has-text-black has-text-weight-medium is-size-4 right-grid-title">Placeholder Title</h1>
              </div>
            </div>
          </div>
        </a>
      </div>
    </div>
  </div>

  <!-- You Might Also Like Section -->
  <div class="container suggested-articles-container">
    <h1 class="has-text-black has-text-weight-medium is-size-1-desktop is-size-3-mobile">You Might Also Like</h1>

    <div class="columns is-multiline">
      <?php
        $args = array(
          'post_type'     => 'post',
          'posts_per_page' => 6,
          'orderby' => 'title',
          'order' => 'DESC',
        );

        $query = new WP_Query($args);

        if ($query->have_posts()):
          while ($query->have_posts()) : $query->the_post(); ?>
            <div class="column is-4-desktop is-full-mobile">
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
                      // Check if the category is 'Uncategorized'
                      $categories = get_the_category();
                      if ( ! empty( $categories ) ) {
                          switch (get_the_category()[0]->name) {
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
          <?php endwhile;
        endif;

      ?>
    </div>
  </div>
<?php get_footer(); ?>