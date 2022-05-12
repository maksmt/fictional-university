<?php get_header(); ?>

<?php while(have_posts()){
    the_post();?>
<div class="page-banner">
    <div class="page-banner__bg-image"
        style="background-image: url(<?php echo get_theme_file_uri('/images/ocean.jpg') ?>);"></div>
    <div class="page-banner__content container container--narrow">
        <h1 class="page-banner__title"><?php the_title() ?></h1>
        <div class="page-banner__intro">
            <p>DONT FORGET TO REPLACE ME LATER</p>
        </div>
    </div>
</div>
<div class="container container--narrow page-section">
    <div class="generic-content">
        <?php the_content(); ?>
    </div>

    <?php
      $relatedPrograms = new WP_Query(array(
        'post_per_page' => -1,
        'post_type' => 'program',
        'orderby' => 'title',
        'order' => 'ASC', 
        'meta_query' => array(
            array(
                'key' => 'related_campus',
                'compare' => 'LIKE',
                'value' =>'"' . get_the_ID() . '"',
            ),
        ),

    ));

if($relatedPrograms->have_posts()){
    echo '<hr class="section-break">';
    echo '<h2 class="headline headline--medium">Programs available at this campus</h2>';
    echo '<ul class="min-list link-list">';
    while($relatedPrograms->have_posts()){
        $relatedPrograms->the_post();?>
    <li class="professors-card__list-item">
        <a class="professor-card" href="<?php the_permalink(); ?>">
        </a>
    </li>

    <?php
    }
    echo '</ul>';
}    
    wp_reset_postdata();
?>
    <?php
}
get_footer();
?>