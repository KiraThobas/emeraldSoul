<?php get_header(); ?>
<section>
<?php while (have_posts()) : the_post(); ?>

    
    <?php if(in_category('komiks')) : ?>
        <h1 class="dont_show"><?php the_title(); ?></h1>
        <div class="comic_page">
            <?php the_content(); ?>
        </div>
        <div id="myModal" class="modal">
          <span class="close" onclick="document.getElementById('myModal').style.display='none'">&times;</span>
          <img class="modal-content" id="img01">
          <div id="caption"> 
          </div>
        </div>
        <?php next_post_link( '<span class="new">%link</span>', 'Další', TRUE ); ?>
        <?php previous_post_link( '<span class="old">%link</span>', 'Předchozí', TRUE ); ?>
    
    <?php else : ?>        
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
    <?php endif ?>

<?php endwhile; ?>

</section>

<?php get_footer();