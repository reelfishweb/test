<?php
/* Template Name: Contact */


get_header('contact');
?>

<div class="wrap">
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

            <?php
            while (have_posts()) : the_post();

                get_template_part('template-parts/page/content', 'page');

                // If comments are open or we have at least one comment, load up the comment template.
                if (comments_open() || get_comments_number()) :
                    comments_template();
                endif;

            endwhile; // End of the loop.
            ?>
            
            
            <div style="width:100%;clear: both;">
                <div style="width:50%;float:left;">
                    Logo: <br/>
                    <?php 
                    $logo = get_field('logo');
                    echo $logo['id'];?><br/>
                    Address:<br/>
                    <?php echo get_field('address');?>
                </div>
                <div style="width:50%;float:left;">
                    <?php
                    $location = get_field('map');
                    if (!empty($location)):
                        ?>
                        <div class="acf-map">
                            <div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </main><!-- #main -->
    </div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer('contact'); 
