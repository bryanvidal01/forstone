<?php
/*
Template Name: Contact
*/

$imgBackground = get_field('image_background');
$title = get_field('title');
$content = get_field('content');

the_post();
?>

<?php get_header(); ?>
<div class="background-page" style="background-image: url('<?php echo get_background($imgBackground); ?>');">
</div>

<div class="page-container home page-cms">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="background-white">
                    <div class="title">
                        <?php echo __('Contact') ?>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <img src="http://fakeimg.pl/400x400" alt="">
                        </div>
                        <div class="col-sm-6">
                            <p>
                                Téléphone : <br/>
                                +33 (0)1 56 77 98 54
                            </p>
                            <p>
                                6, rue du Colonel Delorme<br/>
                                93100 Montreuil
                            </p>
                            <p>
                                Accès : <br/>
                                Métro de coirx de chaveaux<br/>
                                RER A : Vincennes
                            </p>
                        </div>
                    </div>
                </div>
                <div class="hidden-xs hidden-sm">
                    <div class="footer-desk">
                        Forstone Mentions légales<br/>
                        Réalisation du site : M21 Production
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="container-equipe">
                    <div class="title white">
                        Nous envoyer un message
                    </div>

                    <div class="contact-form">
                        <?php echo do_shortcode( '[contact-form-7 id="57" title="Contact form 1"]' ); ?>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<a href="#" class="contact-footer visible-xs visible-sm">
    Contact
</a>

<?php get_footer(); ?>
