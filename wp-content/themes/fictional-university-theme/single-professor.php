<?php get_header(); ?>

<div class="page-banner">
    <div class="page-banner__bg-image"
        style="background-image: url(<?php echo get_theme_file_uri('/images/ocean.jpg') ?>);"></div>
    <div class="page-banner__content container container--narrow">
        <h1 class="page-banner__title">
            <?php the_title(); ?>
        </h1>
        <div class="page-banner__intro">
            <p><?php the_archive_description(); ?></p>
        </div>
    </div>
</div>

<?php while(have_posts()){
    the_post();
    pageBanner();?>

<div class="container container--narrow page-section">
    <div class="generic-content">
        <div class="row group">
            <div class="one-third">
                <?php the_post_thumbnail('professorPortrait') ?>
            </div>
            <div class="two-thirds">
                <?php
                    $existStatus = 'no';
                    if (is_user_logged_in()) {
                        
                        $existQuery = new WP_Query(array(
                            'author' => get_current_user_id(),
                            'post_type' => 'like',
                            'meta_query' => array(
                                array(
                                    'key' => 'liked_professor_id',
                                    'compare' => '=',
                                    'value' => get_the_ID(),
                                )    
                            )
                        ));
                        if($existQuery->found_posts){
                            $existStatus = 'yes';
                        }
                        
                }
                        ?>


                <span class="like-box" data-like="<?php echo $existQuery->posts[0]->ID; ?>"
                    data-professor="<?php the_ID(); ?>" data-exists="<?php echo $existStatus; ?>">
                    <i class="fa fa-heart-o" aria-hidden="true"></i>
                    <i class="fa fa-heart" aria-hidden="true"></i>
                    <span class="like-count"><?php echo $existQuery->found_posts; ?></span>
                </span>
                <?php the_content() ?>
            </div>
        </div>
    </div>
    <?php
    $relatedProfessors = new WP_Query(array(
    'post_per_page' => -1,
    'post_type' => 'professor',
    'orderby' => 'title',
    'order' => 'ASC',
    'meta_query' => array(
    array(
        'key' => 'related_programs',
        'compare' => 'LIKE',
        'value' =>'"' . get_the_ID() . '"',
    ),
    ),

    ));

    if($relatedProfessors->have_posts()){
    echo '<hr class="section-break">';
    echo '<h2 class="headline headline--medium">Upcoming ' . get_the_title() . ' Event</h2>';

    while($relatedProfessors->have_posts()){
    $relatedProfessors->the_post();?>
    <?php
    }
    }   
    ?>


    <?php
        $relatedPrograms =  get_field('related_programs');  
        if($relatedPrograms){
            
            echo '<hr class="section-break">';    
            echo '<h2 class="headline headline--medium">Subject(s) Taught</h2>';
            echo '<ul class="link-list min-list">';
             foreach ($relatedPrograms as $program) {
    ?>
    <li><a href="<?php echo get_the_permalink($program) ?>"><?php echo get_the_title($program); ?></a></li>
    <?php
        }
        echo '</ul>';
    }
    ?>
</div>
<?php
}
get_footer();
?>