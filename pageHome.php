<?php
// Template name:Page
?>
<?php get_header() ?> 

<!-- main section -->
<section class="section_main">
    <div class="container">
        <div class="row">
            <div class="col-12 main_wrapper">
                <?php the_field('main_top'); ?>
            </div>
        </div>
    </div>
</section>

<!-- clients section -->
<section class="clients_section">
    <div class="container">
        <div class="row">
            <div class="clients_wrapper text-center">
                 <?php the_field('clients_inner'); ?>
                  <?php if( have_rows('clients_logo_item') ): ?>
                     <?php while( have_rows('clients_logo_item') ): the_row();
                         $image = get_sub_field('clients_logo_img');
                         ?>
                         <?php echo wp_get_attachment_image( $image, 'full' ); ?>
                         <?php the_sub_field('clients_logo_img'); ?>
                     <?php endwhile; ?>
                 <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<!-- features section -->
<section class="features_section">
    <div class="container">
        <div class="row">
            <div class="col-12 features_wrapper ">
                <div class="features_about float-start">
                     <?php the_field('about_features'); ?>
                </div>
                <div class="features_items d-grid">
                    <?php the_field('about_features_items'); ?>
                </div>
        </div>
    </div>
</section>

<!-- perform&boost section -->
<section class="perform&boost_section">
    <div class="container">
        <div class="row">
            <div class="col-12 d-grid">
            <div class="perform_wrapper">
                <?php the_field('about_perform'); ?>
            </div>
            <div class="boost_wrapper">
                <?php the_field('about_boost'); ?>
            </div>
        </div>
    </div>
</section>

<!-- testmonials section -->
<section class="testimonials_section">
    <div class="container">
        <div class="row">
            <div class="col">
            <div class="testimonials_wrapper">
                 <?php the_field('testimonials_text'); ?>
                 <div class="testimonials_slider team-slider">
                    <?php if( have_rows('testimonials_inner') ): ?>
                        <?php while( have_rows('testimonials_inner') ): the_row(); 
                            $image = get_sub_field('testimonials_item');
                            ?>
                            <?php echo wp_get_attachment_image( $image, 'full' ); ?>
                            <?php the_sub_field('testimonials_item'); ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                 </div>       
            </div>
        </div>
    </div>
</section>

<!-- faq section -->
<section class="faq_section">
    <div class="container">
        <div class="row">
            <div class="col">
                <?php the_field('faq_title'); ?>
                <div class="faq_wrapper">
                    <div class="faq_inner-items">
                        <?php the_field('faq_items'); ?>           
                    </div>    
                </div>
            </div>
        </div>
    </div>
</section>

<!-- subscribe_section -->
<section class="subscribe_section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
            <div class="subscribe_wrapper text-center">
                 <?php the_field('subscribe_inner'); ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer() ?>