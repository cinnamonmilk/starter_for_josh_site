<?php
    /*
    Template Name: Home page
    */
    ?>
<?php get_header();?>   <!--  Tells WordPress to include header.php -->
<section class="container-fluid aboutbg text-center">
            <h2><?php the_field('titleforaboutme'); ?></h2><!--  custom field for the aboutme content-->
            <p class="particle"><?php the_field('subtitleforaboutme'); ?></p>
            <p class="about-text"><?php the_field('paragraphforaboutme'); ?></p>
            <div class="container">           
<div class="blocker"></div>
        </div> <!-- container -->
    </section>

    <section class="container-fluid articlesbg">
        <div class="container">

            <h3>LATEST ARTICLES</h3>
            <div class="row">
                <div class="col-md-4">
                    <img class="img-fluid" src="http://170.187.231.66/~mesh10/wp-content/uploads/2023/03/image2.jpg" alt="woman">
                    <h4 class="article-title">A PORTRAIT</h4>
                    <p class="date">Friday November 10. 2030</p>
                    <p class="article-p">STS has never been shy of seeking new terrains of investigation. More and more STS s cholars are
                        starting to explore and intervene in the arts. This object of study brings new challenges and
                        opportunities that we want to explore in this session. We would like to gather first of all
                        simply new kinds of knowledge arising from STS study of the arts.</p>
                    <a class="readmore" href="#">CONTINUE READING </a>
                </div>
                <div class="col-md-4">
                    <img class="img-fluid"  src="http://170.187.231.66/~mesh10/wp-content/uploads/2023/03/image3.jpg" alt="woman">
                    <h4 class="article-title">A PORTRAIT</h4>
                    <p class="date">Friday November 10. 2030</p>
                    <p class="article-p">STS has never been shy of seeking new terrains of investigation. More and more STS s cholars are
                        starting to explore and intervene in the arts. This object of study brings new challenges and
                        opportunities that we want to explore in this session. We would like to gather first of all
                        simply new kinds of knowledge arising from STS study of the arts.</p>
                    <a class="readmore" href="#">CONTINUE READING </a>

                </div>
                <div class="col-md-4">
                    <img class="img-fluid" src="http://170.187.231.66/~mesh10/wp-content/uploads/2023/03/image4.jpg" alt="leaf">
                    <h4 class="article-title">A PORTRAIT</h4>
                    <p class="date">Friday November 10. 2030</p>
                    <p class="article-p">STS has never been shy of seeking new terrains of investigation. More and more STS s cholars are
                        starting to explore and intervene in the arts. This object of study brings new challenges and
                        opportunities that we want to explore in this session. We would like to gather first of all
                        simply new kinds of knowledge arising from STS study of the arts.</p>
                    <a class="readmore" href="#">CONTINUE READING </a>
                </div>

            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    <?php get_footer();?>   <!-- Tells WordPress to include footer.php   -->