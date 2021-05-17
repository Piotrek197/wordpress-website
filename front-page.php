<?php get_header(); ?>
<div class="background-vector-container">
    <img src="<?php echo bloginfo("template_directory");?>/assets/images/background-images/wektory.png"
            class="background-vector" id="vec-main">
</div>
<main>
        <section class="front">
            <h1>What is Lorem Ipsum?</h1>
            <p>Lorem Ipsum jest tekstem stosowanym jako<br>
                przykładowy wypełniacz w przemyśle poligraficznym.</p>
        </section>

        <section class="intro" id="intro">
            <h2><?php the_field("intro-header"); ?></h2>
            <?php the_field("paragraph"); ?>
        </section>
        
        <section class="projects" id="projects">
            <h2>Realizacje</h2>
            <div class="row first">
                <div class="img-div">
                    <a href="/projekty">
                        <img src="<?php echo bloginfo("template_directory");?>/assets/images/photos/berg.png" alt="">
                    </a>
                    <span class="project-number">001</span>
                </div>
                <div class="img-div">
                    <a href="/projekty">
                        <img src="<?php echo bloginfo("template_directory");?>/assets/images/photos/image.png" alt="">
                    </a>
                        <span class="project-number">002</span>
                </div>
            </div>
            <div class="row second">
                <div class="img-div">
                    <a href="/projekty">    
                        <img src="<?php echo bloginfo("template_directory");?>/assets/images/photos/abc-mockup-big2.jpg" alt="">
                    </a>
                    <span class="project-number">003</span>
                </div>
                <div class="img-div">
                    <img src="<?php echo bloginfo("template_directory");?>/assets/images/photos/4.png" class="with-gradient" alt="">
                    <span class="project-number">004</span>
                    <a href="/projekty">
                        <div class="gradient-bg"></div>
                    </a>
                </div>
            </div>
        </section>
    </main>


<?php get_footer(); ?>