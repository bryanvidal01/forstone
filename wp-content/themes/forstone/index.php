<?php
/*
Template Name: Homepage
*/?>

<?php get_header(); ?>
<div class="background-page" style="background-image: url('<?php echo get_template_directory_uri() ?>/assets/images/background-home.jpg');">
</div>

<div class="page-container home">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="intro-home">
                    Forstone vous accompagne et répond parfaitement a vos besoins.
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-sm-offset-6">
                <div class="nav-home">
                    <ul>
                        <li>
                            <a href="#">L'équipe</a>
                        </li>
                        <li>
                            <a href="#">Compétences</a>
                        </li>
                        <li>
                            <a href="#">Nos métiers</a>
                        </li>
                        <li>
                            <a href="#">Références</a>
                        </li>
                        <li>
                            <a href="#">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6 hidden-xs hidden-sm">
                <div class="footer">
                    Forstone Mentions légales <br>
                    Réalisation du site : M21 Production
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 visible-xs visible-sm text-center">
                <div class="footer">
                    <a href="#" class="link-contact">Contact</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
