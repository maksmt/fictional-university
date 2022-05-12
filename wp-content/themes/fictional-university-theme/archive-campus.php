<?php

 get_header();
pageBanner(array(
    'title' => 'Our Campuses',
    'subtitle' => 'We have several conveniently located campuses.',
));
?>

<div class="page-banner">
    <div class="page-banner__bg-image"
        style="background-image: url(<?php echo get_theme_file_uri('/images/ocean.jpg') ?>);"></div>
    <div class="page-banner__content container container--narrow">
        <h1 class="page-banner__title">
            Our Campuses
        </h1>
        <div class="page-banner__intro">
            <p>
                We have several conveniently located campuses. </p>
        </div>
    </div>
</div>
<div class="container container--narrow page-section">
    <ul class="link-list min-link">

        <?php  
    while(have_posts()){
        the_post();?>
        <li><a href="<?php the_permalink(); ?>"><?php the_title();?></a></li>
        <?php
    }
    echo paginate_links();
    ?>
    </ul>
</div>

<?php get_footer();?>