<?php
/*
Template Name: Cabinet
*/

$imgBackground = get_field('image_background');
$title = get_field('title');
$content = get_field('content');
$imgStar = get_field('image_star');
$url_back = get_field('url_back');
?>

<?php get_header(); ?>
<div class="background-page" style="background-image: url('<?php echo get_background($imgBackground); ?>');">
</div>

<div class="page-container home page-cabinet">
    <div class="container-fluid container-site">
        <div class="row">
            <div class="col-md-12">
                <img src="<?php echo wp_get_attachment_image_src($imgStar, '1600x600')[0]; ?>" class="img-full-width" />

                <div class="background-white content-wysiwyg">

                    <?php if ($url_back): ?>
                        <a href="<?php echo $url_back; ?>" class="button-back">
                            <?php echo __('retour', 'orizon'); ?>
                        </a>
                    <?php endif; ?>
                    <?php if ($title): ?>
                        <div class="title">
                            <?php echo $title; ?>
                        </div>
                    <?php endif; ?>

                    <?php if ($content): ?>
                        <div class="content">
                            <p>
                                <?php echo $content; ?>
                            </p>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="hidden-xs hidden-sm">
                    <div class="footer-desk">
                        Forstone -
                        <a href="<?php echo get_field('page_contact', 'options'); ?>">
                            <?php echo __('Contactez nous', 'orizon'); ?>
                        </a>
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
