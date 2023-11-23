    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="footer_wrapper">
                        <div class="footer-inner">
                            <?php 
                            $image = get_field('footer_logo', 'option');
                            $size = 'full'; // (thumbnail, medium, large, full or custom size)
                            if( $image ) {
                                echo wp_get_attachment_image( $image, $size );
                            }
                            ?>
                            <?php the_field('footer_subtitle', 'option'); ?>
                            <div class="social-button-block">
                                <?php if( have_rows('icons_social', 'option') ): ?>
                                    <?php while( have_rows('icons_social', 'option') ): the_row();
                                        $image = get_sub_field('icon-img', 'option');?>
                                        <div><a class="icon-link" href="<?php the_sub_field('icon-link', 'option'); ?>">
                                    <?php echo wp_get_attachment_image( $image, 'full' ); ?></a></div> 
                                    <?php endwhile; ?>
                                <?php endif; ?>                                                                 
                            </div>
                        </div>
                        <div class="footer-nav-menu-items d-grid">
                            <div class="footer-nav-menu">
                                <div class="title-item title_tasker"><?php the_field('title_tasker_item', 'option'); ?> </div>
                                <?php $footer_nav_tasker = get_field("footer_nav_tasker", 'option');
                                wp_nav_menu( array(
                                    'menu' => $footer_nav_tasker,
                                    'container' => false,
                                    'menu_class' => 'footer_nav-menu menu',
                                    'fallback_cb'=> ''
                                ));?>
                            </div>
                            <div class="footer-nav-menu">
                                <div class=" title-item title_solutions"><?php the_field('title_solutions_item', 'option'); ?> </div>
                                <?php $footer_nav_solutions= get_field("footer_nav_solutions", 'option');
                                wp_nav_menu( array(
                                    'menu' => $footer_nav_solutions,
                                    'container' => false,
                                    'menu_class' => 'footer_nav-menu menu',
                                    'fallback_cb'=> ''
                                ));?>
                            </div>
                            <div class="footer-nav-menu">
                                <div class="footer-nav-menu-download">
                                    <div class=" title-item title_download"><?php the_field('title_download_item', 'option'); ?> </div>
                                    <?php $footer_nav_download = get_field("footer_nav_download", 'option');
                                    wp_nav_menu( array(
                                    'menu' => $footer_nav_download,
                                    'container' => false,
                                    'menu_class' => 'footer_nav-menu menu',
                                    'fallback_cb'=> ''
                                ));?>
                                </div>
                                <div class="footer-nav-menu-build">
                                    <div class=" title-item title_build"><?php the_field('title_build_item', 'option'); ?> </div>
                                    <?php $footer_nav_build= get_field("footer_nav_build", 'option');
                                    wp_nav_menu( array(
                                    'menu' => $footer_nav_build,
                                    'container' => false,
                                    'menu_class' => 'footer_nav-menu menu',
                                    'fallback_cb'=> ''
                                ));?>
                                </div>
                            </div>
                            <div class="footer-nav-menu">
                                <div class="footer-nav-menu-get-started">
                                    <div class=" title-item title_get-started"><?php the_field('title_get-started_item', 'option'); ?> </div>
                                    <?php $footer_nav_get_started = get_field("footer_nav_get_started", 'option');
                                        wp_nav_menu( array(
                                        'menu' => $footer_nav_get_started,
                                        'container' => false,
                                        'menu_class' => 'footer_nav-menu menu',
                                        'fallback_cb'=> ''
                                    ));?>
                                </div>
                                <div class="footer-nav-menu footer-nav-menu-resources">
                                    <div class=" title-item title_resources"><?php the_field('title_resources_item', 'option'); ?> </div>
                                        <?php $footer_nav_resources = get_field("footer_nav_resources", 'option');
                                        wp_nav_menu( array(
                                        'menu' => $footer_nav_resources,
                                        'container' => false,
                                        'menu_class' => 'footer_nav-menu menu',
                                        'fallback_cb'=> ''
                                    ));?>
                                </div>
                            </div> 
                        </div>   
                    </div>
                    <div class="footer_copyright text-center">
                        <?php echo date("© Y"); ?> Tasker, Designed By Mumair
                    </div>
            </div>
        </div>    
</footer>
</body>
</html>