<?php
/*
Template Name: Références
*/


$imgBackground = get_field('image_background');
$title = get_field('title');
$content = get_field('content');
?>

<?php get_header(); ?>
<div class="background-page" style="background-image: url('<?php echo get_background($imgBackground); ?>');">
</div>

<div class="page-container home page-cms">
    <div class="container-fluid container-site">
        <div class="row">
            <div class="col-md-6">
                <div class="background-white">
                    <?php if ($title): ?>
                        <div class="title">
                            <?php echo $title; ?>
                        </div>
                    <?php endif; ?>

                    <?php
                    if( have_rows('references') ): ?>
                        <div class="row">
                        <?php while ( have_rows('references') ) : the_row();
                            $imgLogo = get_sub_field('logo_reference');
                            $link = get_sub_field('reference_link');
                        ?>
                            <div class="col-sm-4 col-xs-6">

                                <?php if ($link): ?>
                                    <a href="<?php echo $link; ?>" target="_blank">
                                <?php endif; ?>
                                    <img src="<?php echo wp_get_attachment_image_src($imgLogo, '200x200')[0]; ?>" class="img-ref" alt="">
                                <?php if ($link): ?>
                                    </a>
                                <?php endif; ?>
                            </div>
                        <?php endwhile; ?>
                        </div>
                    <?php endif;
                    ?>
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
            <div class="col-md-6">
                <div class="container-equipe">
                    <div class="title white">
                        <?php echo get_the_title(); ?>
                    </div>
                        <?php
                        $args = array(
                        	'post_type' => 'references',
                        	'posts_per_page' => -1,
                            'orderby' => 'date',
                            'order' => 'ASC'
                        );

                        $the_query = new WP_Query( $args );

                        if ( $the_query->have_posts() ) {
                        	echo '<ul class="container-fluid">';
                        	while ( $the_query->have_posts() ) {
                        		$the_query->the_post();
                                $currentPost = get_field('current_post');
                                $avatarID = get_field('avatar');
                                ?>
                                <li class="item-equipe">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <?php if ($avatarID): ?>
                                                <a href="<?php echo get_the_permalink(); ?>">
                                                    <img src="<?php echo wp_get_attachment_image_src($avatarID, '200x200')[0]; ?>" alt="" class="image-avatar">
                                                </a>
                                            <?php endif; ?>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="content-team">
                                                <a href="<?php echo get_the_permalink(); ?>" class="name">
                                                    <?php echo get_the_title(); ?>
                                                </a>
                                                <?php if ($currentPost): ?>
                                                    <div class="poste">
                                                        <?php echo $currentPost; ?>
                                                    </div>
                                                <?php endif; ?>

                                                <a href="<?php echo get_the_permalink(); ?>" class="link-more">
                                                    <?php echo __('En savoir plus', 'orizon'); ?>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                        	<?php }
                        	echo '</ul>';
                        	wp_reset_postdata();
                        }
                        ?>
                </div>
            </div>
        </div>
    </div>
</div>

<a href="<?php echo get_field('page_contact', 'options'); ?>" class="contact-footer visible-xs visible-sm">
    Contact
</a>

<?php get_footer(); ?>
