<?php
/*
Template Name: Projects
*/
get_header(); ?>
<div class="background-vector-projects-container">
    <img src="<?php echo bloginfo("template_directory");?>/assets/images/background-images/wektory.png"
    class="background-vector-projects" id="vec-main">
</div>
<main class="main-projects">
<h2>Strony www</h2>
<section class="projects-container">
    <?php

    $query = new WP_Query([
        "post_type" => "post"
    ]);
    if($query->have_posts()){
        while($query->have_posts()){  $query->the_post();
            if(has_post_thumbnail()){ ?>
                <div class="single-project">
                    <img src="<?php the_post_thumbnail_url(); ?>" alt="project-image"class="project-image">
                </div>
            <?php } //if
        } //while
    }//if
    ?>
</section>
</main>
<?php get_footer();?>