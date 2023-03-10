<?php get_header(); ?>

<?php while (have_posts()) : the_post(); ?>

<section class="elementor-section elementor-top-section elementor-element elementor-section-boxed content" data-element_type="section">
    <div class="elementor-container elementor-column-gap-default">
        <div class="elementor-row">
            <div class="elementor-column elementor-col-75 elementor-top-column elementor-element" data-element_type="column">
                <div class="elementor-column-wrap">
                    <div class="elementor-widget-wrap">
                        <h1><?php echo get_the_title(); ?></h1>
                        <h2><?php echo do_shortcode('[acf field="blurb"]'); ?></h2>
                        <p><?php echo the_content(); ?></p>
                    </div>
                </div>
            </div>
            <div class="elementor-column elementor-col-25 elementor-top-column elementor-element" data-element_type="column">
                <div class="elementor-column-wrap">
                    <div class="elementor-widget-wrap">
                        Right
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php endwhile; ?>

<?php get_footer(); ?>