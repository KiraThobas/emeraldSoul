<?php
get_header();
// Template Name: Seznam
?>
<section>
    <h1><?php the_title(); ?></h1>
    <?php
    $args = array(
        'category_name' => 'komiks',
        'posts_per_page' => 50,
        'order' => 'ASC',
    );
    query_posts($args);
    if (have_posts()) :
        ?> <ul> <?php
        while (have_posts()) : the_post(); ?>

            <div class="seznam clearfix">
                
                <li><h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <span><i class="fa fa-clock-o" aria-hidden="true"></i> <?php the_time(get_option('date_format')); ?></span>           </li>   
            </div>
        <?php endwhile; ?>
</ul>


        <span class="old"><?php next_posts_link('Starší stránky »'); ?></span>
        <span class="new"><?php previous_posts_link('« Novější stránky'); ?></span>

    <?php endif; ?>

    <?php wp_reset_query(); ?>
</section>
<?php
get_footer();
