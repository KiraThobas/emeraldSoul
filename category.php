<?php get_header(); 
// Template Name: Category
?>

    <section>
        <h1><?php echo '' . single_cat_title('', false) . ''; ?></h1>
        <span class="sipka"><?php echo category_description( $category_id ); ?> </span>

        <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <div class="clanek clearfix">
                <a class="thumbnail" href="<?php the_permalink(); ?>">
                        <?php 
                        // pokud je nahl obr zobraz ho, pokud ne, pouzij no_icon.png
                            if (has_post_thumbnail()) 
                                {
                                the_post_thumbnail('full');   
                                } 
                            else 
                                {   ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/no_icon.png" alt="no_icon" />
                                <?php }
                            ?>                                           
                </a>

                <!-- vypis clanku -->
                    <div class="clanek_info">
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h2>                
                        <?php the_excerpt(); ?>
                        
                        <a class="button" href="<?php the_permalink(); ?>">Číst více</a>
                    </div>               
            </div>
            <?php endwhile; ?>
        
        <?php else : ?>
            <div class="info_box clearfix">
                <p><?php _e('Žádné články zatím nejsou k dispozici...'); ?></p>
            </div>      
        
        <?php endif; ?>
        
        <span class="old"><?php next_posts_link('<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
'); ?></span>      
        <span class="new"><?php previous_posts_link('<i class="fa fa-long-arrow-left" aria-hidden="true"></i>
'); ?></span>
        <?php wp_reset_query(); ?>
    </section>
<?php get_footer();