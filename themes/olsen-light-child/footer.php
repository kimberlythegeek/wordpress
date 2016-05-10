                </div><!-- /site-content -->

                <footer id="footer">

                    <div class="site-bar group">
                        <nav class="nav">
                            <?php wp_nav_menu( array(
                                'theme_location' => 'footer_menu',
                                'container'      => '',
                                'menu_id'        => '',
                                'menu_class'     => 'navigation',
                                'depth'          => 1
                            ) ); ?>
                        </nav>

                        <div class="site-tools">
                            <?php if ( get_theme_mod( 'footer_socials', 1 ) == 1 ) {
                                get_template_part( 'part', 'social-icons' );
                            } ?>
                        </div><!-- /site-tools -->
                    </div><!-- /site-bar -->

                    <div id="footer-sidebar" class="secondary">
                        <div id="footer-left" class="footer-widget">
                            <?php if(is_active_sidebar('footer-sidebar-1')){ dynamic_sidebar('footer-sidebar-1'); }  ?>
                        </div>
                        <div id="footer-center" class="footer-widget">
                            <?php if(is_active_sidebar('footer-sidebar-2')){ dynamic_sidebar('footer-sidebar-2'); } ?>
                        </div>
                        <div id="footer-right" class="footer-widget"> 
                            <?php if(is_active_sidebar('footer-sidebar-3')){ dynamic_sidebar('footer-sidebar-3'); } ?>
                        </div>
                    </div><!-- /footer-sidebar -->


                    <div class="site-logo">
                        <h3>
                            <a href="<?php echo esc_url( home_url() ); ?>">
                                <?php if( get_theme_mod( 'footer_logo', get_template_directory_uri() . '/images/logo.png' ) ): ?>
                                    <img src="<?php echo esc_url( get_theme_mod( 'footer_logo', get_template_directory_uri() . '/images/logo.png' ) ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" />
                                <?php else: ?>
                                    <?php bloginfo( 'name' ); ?>
                                <?php endif; ?>
                            </a>
                        </h3>
                    
                        <?php if ( get_theme_mod( 'footer_credits', 1 ) ) : ?>
                            <span class="developer">Website by <a href="http://acodeabove.com">A Code Above</a></span><br>
                            <p class="tagline">
                                <?php echo wp_kses( sprintf( __( '<a href="%1$s" title="%2$s">Olsen WordPress Theme</a> by <a href="%3$s">CSSIgniter</a>', 'olsen-light' ),
                                    esc_url( 'http://www.cssigniter.com/ignite/themes/olsen-light/' ),
                                    esc_attr__( 'Blogging theme for WordPress', 'olsen-light' ),
                                    esc_url( 'http://www.cssigniter.com/' )
                                ), olsen_light_get_allowed_tags( 'guide' ) ); ?>
                            </p>
                        <?php endif; ?>
                    </div><!-- /site-logo -->
                </footer><!-- /footer -->
            </div><!-- /col-md-12 -->
        </div><!-- /row -->
    </div><!-- /container -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
