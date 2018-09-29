<?php
/*
Template Name: Homepage
*/

$imgBackground = get_field('image_background');
$intro = get_field('introduction');

?>

<?php get_header(); ?>

<div class="background-page" style="background-image: url('<?php echo get_background($imgBackground); ?>');">

</div>

<div class="page-container home">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <?php if ($intro): ?>
                    <div class="intro-home">
                        Forstone vous accompagne et répond parfaitement a vos besoins.
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-sm-offset-6">
                <div class="nav-home">
                    <?php echo wp_nav_menu([
                        'menu'=>'home',
                        'menu_class'=>''
                    ]); ?>
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
