<?php
/*
Template Name: Etudes
*/

$imgBackground = get_field('image_background');
$title = get_field('title');
$content = get_field('content');
?>

<?php get_header(); ?>
<div class="background-page" style="background-image: url('<?php echo get_background($imgBackground); ?>');">
</div>

<div class="page-container home page-cms">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="background-white">
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
                        Forstone Mentions légales<br/>
                        Réalisation du site : M21 Production
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="container-equipe">
                    <div class="title white">
                        Études
                    </div>

                        <?php
                        $args = array(
                        	'post_type' => 'etudes',
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
                                                <div class="name">
                                                    <?php echo get_the_title(); ?>
                                                </div>
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

<a href="#" class="contact-footer visible-xs visible-sm">
    Contact
</a>

<?php get_footer(); ?>
