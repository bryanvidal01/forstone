<?php
/*
Template Name: Contact
*/

$imgBackground = get_field('image_background');
$title = get_field('title');
$content = get_field('content');
$imgMap = get_field('map_img');
the_post();
?>

<?php get_header(); ?>
<div class="background-page" style="background-image: url('<?php echo get_background($imgBackground); ?>');">
</div>

<div class="page-container home page-cms">
    <div class="container-fluid container-site">
        <div class="row">
            <div class="col-md-6">
                <div class="background-white">
                    <div class="title">
                        <?php echo __('Contact') ?>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <img src="<?php echo wp_get_attachment_image_src($imgMap, '200x200')[0]; ?>" alt="" style="margin-bottom: 20px;">
                        </div>
                        <div class="col-sm-6">
                            <?php echo get_field('contact_info'); ?>
                        </div>
                    </div>
                </div>
                <div class="hidden-xs hidden-sm">
                    <div class="footer-desk">
                        Forstone -
                        <a href="<?php echo get_field('page_mentions_legales', 'options'); ?>">
                            <?php echo __('Mentions légales', 'orizon'); ?>
                        </a>
                        <div style="margin-top: 10px">
                            <?php echo __('Réalisation du site :', 'orizon'); ?>
                            <a href="http://m21production.com" target="_blank">
                                M21 Production
                            </a>
                        </div>
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

<div class="visible-xs visible-sm text-center" >
    <div class="footer-desk">
        Forstone -
        <a href="<?php echo get_field('page_mentions_legales', 'options'); ?>">
            <?php echo __('Mentions légales', 'orizon'); ?>
        </a>
        <div style="margin-top: 10px">
            <?php echo __('Réalisation du site :', 'orizon'); ?>
            <a href="http://m21production.com" target="_blank">
                M21 Production
            </a>
        </div>
    </div>
</div>

<?php get_footer(); ?>
