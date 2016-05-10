<?php get_header(); ?>

<div>
    <main id="content" class="entries-classic" role="main" itemprop="mainContentOfPage" itemscope="itemscope" itemtype="http://schema.org/Blog">

        <div>


            <?php if( is_search() ): ?>
                <?php
                    global $wp_query;

                    $found = $wp_query->found_posts;
                    $none  = esc_html__( 'No results found. Please broaden your terms and search again.', 'olsen-light' );
                    $one   = esc_html__( 'Just one result found. We either nailed it, or you might want to broaden your terms and search again.', 'olsen-light' );
                    $many  = esc_html( sprintf( _n( '%d result found.', '%d results found.', $found, 'olsen-light' ), $found ) );
                ?>
                <article class="entry damn-it">
                    <h2 class="entry-title">
                        <?php esc_html_e( 'Search results' , 'olsen-light' ); ?>
                    </h2>

                    <div class="entry-content" itemprop="text">
                        <p><?php olsen_light_e_inflect( $found, $none, $one, $many ); ?></p>
                        <?php if ( $found < 2 ) {
                            get_search_form();
                        } ?>
                    </div>

                    <div class="entry-utils group"></div>
                </article>
            <?php endif; ?>

            <?php while ( have_posts() ) : the_post(); ?>
                <?php get_template_part( 'content', 'entry' ); ?>
            <?php endwhile; ?>

        </div>

        <?php olsen_light_pagination(); ?>
    </main>


</div><!-- /row -->

<?php get_footer(); ?>