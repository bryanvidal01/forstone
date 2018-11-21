<?php
/*
Template Name: Single Equipe
*/

$currentPost = get_field('current_post');
$contactInformations = get_field('informations_contact');
$biography = get_field('biography');
$textContent = get_field('text_content');
$adresseMail = get_field('adresse_mail');
$urlLinkedin = get_field('url_linkedin');
$vcard = get_field('url_vcard');

$imgBackground = get_field('image_background');
$avatarID = get_field('avatar');

$postType = get_post_type($post);

?>

<?php get_header(); ?>
<div class="background-page" style="background-image: url('<?php echo get_background($imgBackground); ?>');">
</div>

<div class="page-container home page-cms">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="background-white">
                    <a href="<?php echo get_field('page_' . $postType . '', 'option'); ?>" class="button-back">
                        <?php echo __('retour', 'orizon'); ?>
                    </a>
                    <div class="row">
                        <div class="col-sm-4 col-xs-4">
                            <?php if ($avatarID): ?>
                                <img src="<?php echo wp_get_attachment_image_src($avatarID, '200x200')[0]; ?>" class="avatar" alt="">
                            <?php endif; ?>
                        </div>
                        <div class="col-sm-8 col-xs-8">
                            <div class="info-avatar">
                                <div class="name">
                                    <?php echo get_the_title(); ?>
                                </div>

                                <?php if ($currentPost): ?>
                                    <div class="poste">
                                        <?php echo $currentPost ?>
                                    </div>
                                <?php endif; ?>

                                <?php if ($contactInformations): ?>
                                    <div class="sub-info">
                                        <?php echo $contactInformations; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <?php if ($biography): ?>
                                <div class="content">
                                    <?php echo $biography; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>

                </div>

                <div class="hidden-sm hidden-xs">
                    <div class="footer-desk">
                        Forstone -
                        <a href="<?php echo get_field('page_contact', 'options'); ?>">
                            <?php echo __('Contactez nous', 'orizon'); ?>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="container-equipe white content-wysiwyg">
                        <?php if ($textContent): ?>
                        <?php echo $textContent; ?>
                    <?php endif; ?>
                    <ul class="list-social">
                            <?php if ($adresseMail): ?>
                                <li>
                                    <a href="mailto:<?php echo $adresseMail; ?>">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 512.001 512.001" style="enable-background:new 0 0 512.001 512.001;" xml:space="preserve" width="512px" height="512px">
                                            <g>
                                                <g>
                                                    <path d="M511.646,126.634c-0.021-14.449-11.782-26.189-26.227-26.189c-0.012,0-0.024,0-0.034,0L26.19,101.076    c-7.005,0.009-13.588,2.746-18.535,7.706C2.709,113.743-0.009,120.334,0,127.337l0.355,258.029    c0.009,7.005,2.746,13.588,7.706,18.535c4.951,4.938,11.526,7.655,18.519,7.655c0.012,0,0.025,0,0.035,0l459.194-0.631    c14.458-0.02,26.207-11.799,26.19-26.261L511.646,126.634z M456.611,126.71L256.02,266.154L55.04,127.262L456.611,126.71z     M340.846,292.471l118.971,92.265l-407.972,0.56l119.696-92.825c5.722-4.439,6.764-12.675,2.326-18.399    c-4.439-5.722-12.675-6.764-18.399-2.326L26.561,371.715l-0.32-232.475l222.344,153.657c2.244,1.551,4.849,2.325,7.455,2.325    c2.617,0,5.236-0.783,7.485-2.346l221.912-154.264l0.336,233.066l-128.856-99.931c-5.719-4.437-13.959-3.396-18.397,2.326    C334.081,279.795,335.122,288.033,340.846,292.471z" fill="#FFFFFF"/>
                                                </g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                        </svg>
                                    </a>
                                </li>
                            <?php endif; ?>

                            <?php if ($urlLinkedin): ?>
                                <li>
                                    <a href="<?php echo $urlLinkedin ?>" target="_blank">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="512px" height="512px" viewBox="0 0 430.117 430.117" style="enable-background:new 0 0 430.117 430.117;" xml:space="preserve">
                                            <g>
                                                <path id="LinkedIn" d="M430.117,261.543V420.56h-92.188V272.193c0-37.271-13.334-62.707-46.703-62.707   c-25.473,0-40.632,17.142-47.301,33.724c-2.432,5.928-3.058,14.179-3.058,22.477V420.56h-92.219c0,0,1.242-251.285,0-277.32h92.21   v39.309c-0.187,0.294-0.43,0.611-0.606,0.896h0.606v-0.896c12.251-18.869,34.13-45.824,83.102-45.824   C384.633,136.724,430.117,176.361,430.117,261.543z M52.183,9.558C20.635,9.558,0,30.251,0,57.463   c0,26.619,20.038,47.94,50.959,47.94h0.616c32.159,0,52.159-21.317,52.159-47.94C103.128,30.251,83.734,9.558,52.183,9.558z    M5.477,420.56h92.184v-277.32H5.477V420.56z" fill="#FFFFFF"/>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                        </svg>
                                    </a>
                                </li>
                            <?php endif; ?>

                            <?php if ($vcard): ?>
                                <li>
                                    <a href="<?php echo $vcard ?>" target="_blank">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 60 60" style="enable-background:new 0 0 60 60;" xml:space="preserve" width="512px" height="512px">
                                            <g>
                                                <path d="M55.783,8H4.217C1.892,8,0,9.892,0,12.217v35.566C0,50.108,1.892,52,4.217,52h51.566C58.108,52,60,50.108,60,47.783V12.217   C60,9.892,58.108,8,55.783,8z M58,47.783C58,49.006,57.006,50,55.783,50H4.217C2.994,50,2,49.006,2,47.783V12.217   C2,10.994,2.994,10,4.217,10h51.566C57.006,10,58,10.994,58,12.217V47.783z" fill="#FFFFFF"/>
                                                <path d="M22.638,36.246L19,34.388v-0.387c1.628-0.889,2.773-2.353,3.412-4.364C23.381,29.123,24,28.122,24,27v-1   c0-0.926-0.431-1.785-1.151-2.349c-0.624-3.78-3.262-5.696-7.849-5.696c-0.217,0-0.429,0.008-0.636,0.024   c-0.864,0.071-2.129-0.004-3.224-0.74c-0.409-0.276-0.718-0.544-0.915-0.793c-0.336-0.429-0.901-0.579-1.402-0.373   c-0.502,0.206-0.797,0.708-0.734,1.247c0.042,0.374,0.105,0.809,0.2,1.286c0.193,0.975,0.193,0.975-0.078,1.558   c-0.102,0.221-0.228,0.49-0.376,0.853c-0.331,0.811-0.566,1.699-0.701,2.647C6.424,24.229,6,25.083,6,26v1   c0,1.122,0.619,2.123,1.588,2.637c0.639,2.012,1.784,3.476,3.412,4.364v0.376l-3.769,1.858C5.855,36.985,5,38.425,5,39.993v1.325   C5,42.121,5,44,15,44s10-1.879,10-2.682v-1.245C25,38.442,24.095,36.977,22.638,36.246z M23,41.092C22.376,41.472,19.838,42,15,42   s-7.376-0.528-8-0.908v-1.099c0-0.835,0.455-1.603,1.152-1.982l3.857-1.901c0.602-0.294,0.99-0.917,0.99-1.588v-1.803l-0.604-0.26   c-1.517-0.654-2.503-1.901-3.015-3.814l-0.143-0.533l-0.526-0.164C8.293,27.817,8,27.428,8,27v-1c0-0.362,0.207-0.698,0.541-0.876   l0.469-0.25l0.055-0.529c0.099-0.938,0.308-1.803,0.622-2.57c0.133-0.325,0.246-0.568,0.338-0.767   c0.339-0.728,0.462-1.104,0.377-1.875c1.176,0.672,2.589,0.958,4.122,0.841c0.155-0.013,0.314-0.019,0.477-0.019   c3.744,0,5.572,1.356,5.929,4.398l0.062,0.522l0.465,0.246C21.791,25.299,22,25.636,22,26v1c0,0.428-0.293,0.817-0.712,0.947   l-0.526,0.164l-0.143,0.533c-0.512,1.913-1.498,3.16-3.015,3.814L17,32.719v1.811c0,0.669,0.37,1.272,0.964,1.575l3.775,1.929   C22.517,38.422,23,39.204,23,40.073V41.092z" fill="#FFFFFF"/>
                                                <path d="M30,23h10c0.553,0,1-0.447,1-1s-0.447-1-1-1H30c-0.553,0-1,0.447-1,1S29.447,23,30,23z" fill="#FFFFFF"/>
                                                <path d="M44,23h1c0.553,0,1-0.447,1-1s-0.447-1-1-1h-1c-0.553,0-1,0.447-1,1S43.447,23,44,23z" fill="#FFFFFF"/>
                                                <path d="M31,38h-1c-0.553,0-1,0.447-1,1s0.447,1,1,1h1c0.553,0,1-0.447,1-1S31.553,38,31,38z" fill="#FFFFFF"/>
                                                <path d="M37,38h-2c-0.553,0-1,0.447-1,1s0.447,1,1,1h2c0.553,0,1-0.447,1-1S37.553,38,37,38z" fill="#FFFFFF"/>
                                                <path d="M42,38h-1c-0.553,0-1,0.447-1,1s0.447,1,1,1h1c0.553,0,1-0.447,1-1S42.553,38,42,38z" fill="#FFFFFF"/>
                                                <path d="M48,38h-2c-0.553,0-1,0.447-1,1s0.447,1,1,1h2c0.553,0,1-0.447,1-1S48.553,38,48,38z" fill="#FFFFFF"/>
                                                <path d="M51.29,38.29C51.109,38.479,51,38.74,51,39s0.109,0.52,0.29,0.71C51.479,39.89,51.74,40,52,40s0.52-0.11,0.71-0.29   C52.89,39.52,53,39.26,53,39s-0.11-0.521-0.29-0.71C52.33,37.92,51.66,37.92,51.29,38.29z" fill="#FFFFFF"/>
                                                <path d="M52,27H30c-0.553,0-1,0.447-1,1s0.447,1,1,1h22c0.553,0,1-0.447,1-1S52.553,27,52,27z" fill="#FFFFFF"/>
                                                <path d="M52,33H30c-0.553,0-1,0.447-1,1s0.447,1,1,1h22c0.553,0,1-0.447,1-1S52.553,33,52,33z" fill="#FFFFFF"/>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                        </svg>
                                    </a>
                                </li>
                            <?php endif; ?>
                        </ul>
                </div>

            </div>
        </div>
    </div>
</div>

<a href="#" class="contact-footer visible-xs visible-sm">
    Contact
</a>

<?php get_footer(); ?>
