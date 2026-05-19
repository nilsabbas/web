<?php
/* Template Name: Template Product */
wp_head();
get_header();
?>

<link rel='stylesheet' id='style-css' href='<?= get_template_directory_uri(); ?>/assets/css/product-style.css'
    type='text/css' media='all' />



<?php
$about_section  =   get_field( "about_section" );

$product_category = $about_section['product_category'][0];
if(!empty($product_category)):

    $postID = $product_category->ID;

    $banner_type    =   get_field("banner_type", $postID );
    $banner_video   =   get_field("banner_video", $postID );
    $banner_image   =   get_field('banner_image', $postID );
    $banner_logo    =   get_field('banner_logo', $postID );
    $banner_text    =   get_field('banner_text', $postID );


    $logo_icon          =   get_field( "logo_icon", $postID  );
    $logo_icon_url      =   $logo_icon['url'];
    $logo_icon_alt      =   $logo_icon['alt'];
    $product_color      =   (get_field('product_color', $postID ))? get_field('product_color', $postID ) :'#000';

//    $tabBg_about        =   get_field('about_tab_bg_image', $postID  );
//    $tabBg_product      =   get_field('product_tab_bg_image', $postID  );
//    $tabBg_catalog      =   get_field('catalogue_tab_bg_image', $postID );
//    $tabBg_gallery      =   get_field('gallery_tab_bg_image', $postID );
    $about_section      =   get_field('about_section', $postID );

endif;

if(!empty( $about_section ))
{
    $prod_img       =   $about_section['product_image'];
    $prod_img_url   =   $prod_img['url'];
    $prod_img_alt   =   $prod_img['alt'];

    $about_title    =   $about_section['about_title'];
    $about_product  =   $about_section['about_product'];
    $about_cta      =   (!empty($about_section['about_cta']))?$about_section['about_cta']:'Read more';
    $cta_url        =   $about_section['cta_url'];
    $cta_o_n_w      =   $about_section['cta_open_in_new_window'];
    $specifications_table      =   $about_section['specifications_table']; 
    $additional_descriptions      =   $about_section['additional_descriptions']; 

}

$product_tabHeadActive  =   '';
$product_tabBodyActive  =   '';
$about_tabHeadActive    =   '';
$about_tabBodyActive    =   '';

if(!empty($_GET['product']) && $_GET['product']=='true')
{
    $product_tabHeadActive =  'active'; 
    $product_tabBodyActive =  'show active'; 
}else{
    $about_tabHeadActive =  'active'; 
    $about_tabBodyActive =  'show active';
}



?>

<!-- Product Banner Start -->
<!--<div class="na-banner na-banner--inner na-banner--video">
    <?php
    /*if(($banner_type == 'Video Banner') && (!empty($banner_video)))
    {
        echo '<video autoplay loop muted playsinline src="'.$banner_video.'" class="na-banner__bg"></video>';
    }elseif(($banner_type == 'Image Banner') && ( !empty($banner_image['url'])))
    {
        echo '<img src="'.$banner_image['url'].'" alt="'.$banner_image['alt'].'" class="na-banner__bg">';
    }else
    {
        echo '<img src="'.get_template_directory_uri().'/assets/images/banner-bg.png" alt="Banner Image" class="na-banner__bg">';
    }*/
    ?>
    <!--<div class="na-heading__wrap">
        <div class="na-heading">
            <?php /*if(!empty($banner_text)): ?>
            <p class="na-heading__sub"><?= $banner_text; ?></p>
            <?php endif; ?>
            <?php if(!empty($banner_logo)): ?>
            <div class="na-banner__logo-img">
                <img src="<?= $banner_logo['url']; ?>" alt="<?= $banner_logo['alt']; ?>">
            </div>
            <?php endif;*/ ?>
        </div>
    </div>-->
<!--</div>-->
<!-- Product Banner End -->


<!-- Tab starts here -->
<div class="na">
    <div class="na-tab">
        <div class="content-wrapper">

            <div class="na-tab__inner">
                <div class="na-tab__out">
                    <div class="na-tab__out__logo">
                        <?php if(!empty($logo_icon_url)): ?>
                        <img src="<?= esc_url( $logo_icon_url ); ?>" alt="<?= $logo_icon_alt; ?>">
                        <?php endif; ?>
                    </div>
                </div>
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">

                        <button class="nav-link <?= $about_tabHeadActive; ?>" id="pills-about-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-about" type="button" role="tab" aria-controls="pills-about"
                            aria-selected="true">About</button>

                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link <?= $product_tabHeadActive; ?>" id="pills-product-tab"
                            data-bs-toggle="pill" data-bs-target="#pills-product" type="button" role="tab"
                            aria-controls="pills-product" aria-selected="false">Products</button>

                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-catalogue-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-catalogue" type="button" role="tab" aria-controls="pills-catalogue"
                            aria-selected="false">Catalogue</button>

                    </li>
                    <!--<li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-gallery-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-gallery" type="button" role="tab" aria-controls="pills-gallery"
                            aria-selected="false">GALLERY</button>
                    </li>-->
                </ul>
            </div>
        </div>
    </div>
    <div class="">
        <div class="tab-content" id="pills-tabContent">

            <!-- About Tab Body start -->
            <div class="tab-pane fade <?= $about_tabBodyActive; ?>" id="pills-about" role="tabpanel"
                aria-labelledby="pills-about-tab">
                <div class="na-pdtbrochure">
                    <div class="content-wrapper">
                        <div class="na-pdtbrochure__wrap">
                            <!-- Product Brochure Left Side -->
                            <div class="na-pdtbrochure__left">
                                <!-- Image for the non-list module part starts here -->
                                <div class="na-pdtbrochure__img">
                                    <?php if(!empty($prod_img_url)): ?>
                                    <img src="<?= esc_url($prod_img_url); ?>" alt="<?= esc_attr( $prod_img_alt ); ?>">
                                    <?php endif; ?>
                                </div>
                                <!-- Image for the non-list module part ends here -->
                            </div>

                            <!-- Product Brochure Right Side starts-->
                            <div class="na-pdtbrochure__right">
                                <!-- Heading Part -->
                                <div>
                                    <div class="na-heading">
                                        <?php if(!empty( $about_title)): ?>
                                        <h2 class="na-heading__title" style="color:<?= $product_color; ?>">
                                            <?= $about_title ?></h2>

                                        <?php endif; ?>
                                    </div>
                                </div>

                                <!-- Content Part -->
                                <div class="na-pdtbrochure__content">

                                    <?= $about_product; ?>

                                    <?php if(!empty($specifications_table)): ?>
                                    <div class="na-pdtbrochure__readmore">
                                        <?= $about_cta; ?>
                                        <span><svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M13.4932 1.42285C13.4931 1.15769 13.3878 0.903398 13.2003 0.715899C13.0128 0.528399 12.7585 0.423046 12.4933 0.423006L4.49311 0.423006C4.36035 0.420698 4.22845 0.444855 4.10512 0.494066C3.9818 0.543277 3.8695 0.616557 3.7748 0.70963C3.68009 0.802704 3.60487 0.913706 3.55353 1.03616C3.50218 1.15862 3.47573 1.29007 3.47573 1.42285C3.47573 1.55564 3.50218 1.68709 3.55353 1.80955C3.60487 1.932 3.68009 2.04301 3.7748 2.13608C3.8695 2.22915 3.9818 2.30243 4.10512 2.35164C4.22845 2.40085 4.36035 2.42501 4.49311 2.4227L10.0793 2.4227L0.715041 11.7869C0.527504 11.9745 0.422147 12.2288 0.422147 12.494C0.422147 12.7592 0.527505 13.0136 0.715041 13.2011C0.902577 13.3887 1.15693 13.494 1.42215 13.494C1.68736 13.494 1.94172 13.3887 2.12925 13.2011L11.4935 3.83692L11.4935 9.42306C11.498 9.68523 11.6054 9.93512 11.7924 10.1189C11.9794 10.3027 12.2311 10.4057 12.4933 10.4057C12.7555 10.4057 13.0072 10.3027 13.1943 10.1189C13.3813 9.93512 13.4886 9.68523 13.4932 9.42306L13.4932 1.42285Z"
                                                    fill="black" />
                                            </svg>
                                        </span>
                                    </div>
                                    <?php endif; ?>

                                </div>
                                <!-- Content part ends -->
                            </div>
                            <!-- Product Brochure Right Side ends-->
                        </div>
                        <div class="na-producttable">
                            <div class="content-wrapper">
                                <?php 
                                    if(!empty($specifications_table)): 
                                        echo $specifications_table;
                                    endif;                        
                                ?>
                            </div>
                        </div>

                        <?php if(!empty($additional_descriptions)): ?>
                        <div class="na-additional-text">
                            <?= $additional_descriptions ?>
                        </div>
                        <?php endif; ?>

                    </div>
                </div>

                <?php
                    get_template_part("template-parts/available-ranges");
                ?>
            </div>
            <!-- About Tab Body End -->

            <!-- Product Tab Body start -->
            <?php
            $product_section        =   get_field('product_section');
            if(!empty($product_section)):
                $slider                 =   $product_section['product_images_slider'];
                $product_section_title  =   $product_section['product_section_title'];
                $product_detailed       =   $product_section['product_detailed'];
                $product_listing_content       =   $product_section['product_listing_content'];
                $product_cta_label      =   $product_section['product_cta_label'];
            ?>
            <div class="tab-pane fade <?= $product_tabBodyActive; ?>" id="pills-product" role="tabpanel"
                aria-labelledby="pills-profile-tab">
                <!-- Product Brochure content start -->

                <div class="na-pdtbrochure">
                    
                    <div class="content-wrapper dddd">
                        <div class="na-pdtbrochure__wrap">
                            <!-- Product Brochure Left Side -->
                            <div class="na-pdtbrochure__left">

                                <!-- Slider content Start here -->
                                <?php if( !empty($slider) ): ?>
                                <div class="na-proslide">
                                    <div class="na-proslide__view">

                                        <div class="na-proslide__arrow-l" onclick="arrowLeft()">
                                            <img src="<?= get_template_directory_uri(); ?>/assets/images/product-arrow.png"
                                                alt="">
                                        </div>
                                        <!-- product single image  -->
                                        <?php  
                                        $i = 0;
                                        foreach($slider as $item): 
                                            $i++;
                                            $show = ($i == 1)?'show':'';
                                        ?>
                                        <div class="na-proslide__img <?= $show; ?>">
                                            <div class="na-proslide__frames">
                                                <?php if(!empty($item['image'])): ?>
                                                <img src="<?= $item['image']['url']; ?>"
                                                    alt="<?= $item['image']['alt']; ?>">
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <?php endforeach; ?>

                                        <!-- product single image  -->
                                        <div class="na-proslide__arrow-r" onclick="arrowRight()">
                                            <img src="<?= get_template_directory_uri(); ?>/assets/images/product-arrow.png"
                                                alt="">
                                        </div>

                                    </div>
                                    <!-- product tab  -->
                                    <div class="na-proslide__list">
                                        <?php foreach($slider as $item): ?>
                                        <div class="na-proslide__list-items">
                                            <img src="<?= $item['image']['url']; ?>"
                                                alt="<?= $item['image']['alt']; ?>">
                                        </div>
                                        <?php endforeach; ?>

                                    </div>
                                    <!-- product tab  -->
                                </div>
                                <?php endif; ?>
                                <!-- Slider content ends here -->
                            </div>
                            <!-- Product Brochure Right Side starts-->
                            <div class="na-pdtbrochure__right">
                                <!-- Heading Part -->
                                <div>
                                    <div class="na-heading">
                                        <?php if(!empty($product_section_title)): ?>
                                        <h2 class="na-heading__title" style="color:<?= $product_color; ?>">
                                            <?= $product_section_title; ?></h2>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <!-- Content Part -->
                                <?php if(!empty($product_detailed )): ?>
                                <div class="na-pdtbrochure__content">
                                    <?= $product_detailed ?>
                                </div>
                                <?php endif; ?>
                                <!-- Content part ends -->

                                <!-- List part starts -->
                                <?php if(!empty($product_listing_content)): ?>

                                <div class="na-pdtbrochure__list">
                                    <?= $product_listing_content; ?>
                                </div>

                                <?php endif; ?>

                                <!-- List part ends -->


                                <!-- GET A QUOTE CTA-2 Starts (for list module) -->
                                <?php if(!empty($product_cta_label)): ?>
                                <a href="" class="na-btn na-btn--gradient" data-bs-toggle="modal"
                                    data-bs-target="#getaquoteModal">
                                    <?= $product_cta_label; ?>
                                </a>
                                <?php endif; ?>
                                <!-- CTA-2 ends -->

                                <!-- GET A QUOTE Modal start -->
                                <div class="na-modal">
                                    <div class="modal fade" id="getaquoteModal" tabindex="-1"
                                        aria-labelledby="getaquoteModal" aria-hidden="true">
                                        <button type="button" class="na-modal__close" data-bs-dismiss="modal"
                                            aria-label="Close">
                                            <img src="<?= get_template_directory_uri(); ?>/assets/images/getaquote-close.png"
                                                alt="">
                                        </button>
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <div class="na-modal__yellow"></div>
                                                    <div class="na-modal__dark"></div>
                                                    <div class="na-modal__inner">
                                                        <div style="background-image: url(<?= get_template_directory_uri(); ?>/assets/images/popup-arrow.png);"
                                                            class="na-modal__bg-sec">
                                                            <h1 class="na-modal__heading">Get A Quote</h1>
                                                        </div>
                                                        <p class="na-modal__txt">Please fill the below form to get an
                                                            inquiry about this product.</p>
                                                        <?php 
                                                      
                                                         echo do_shortcode('[contact-form-7 id="fae621e" title="Get A Quote"]'); 
                                                        ?>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <script type="text/javascript">

                                        </script>
                                    </div>
                                </div>
                                <!-- GET A QUOTE Modal End -->

                            </div>
                            <!-- Product Brochure Right Side ends-->
                        </div>
                    </div>
                    <?php get_template_part("template-parts/available-ranges-product"); ?>
                
                </div>
                <!-- Product Brochure content end -->

                <?php
                //get_template_part("template-parts/available-ranges");
                ?>

            </div>
            <?php
            endif;
            ?>
            <!-- Product Tab Body End -->




            <!-- Catalogue Tab Body start -->
            <?php
            $catalogue_section  =   get_field("catalogue_section");
            if(!empty( $catalogue_section )):
                
                $catalogue_section_title    =   $catalogue_section['catalogue_section_title'];
                $catalogue_image            =   $catalogue_section['catalogue_image'];
                $calalogue_description      =   $catalogue_section['calalogue_description'];
                $catalogue_items_title      =   $catalogue_section['catalogue_items_title'];
                $catalogue_items            =   $catalogue_section['catalogue_items'];
            
            ?>
            <div class="tab-pane fade" id="pills-catalogue" role="tabpanel" aria-labelledby="pills-contact-tab">

                <?php  ?>
                <?php if(!empty($catalogue_section_title)): ?>
                <div class="na-pdtbrochure">
                    <div class="content-wrapper">
                        <div class="na-pdtbrochure__wrap">
                            <!-- Product Brochure Left Side -->
                            <div class="na-pdtbrochure__left">
                                <!-- Image for the non-list module part starts here -->
                                <div class="na-pdtbrochure__img">
                                    <?php if(!empty($catalogue_image )): ?>
                                    <img src="<?= $catalogue_image['url']; ?>" alt="<?= $catalogue_image['alt']; ?>">
                                    <?php endif; ?>
                                </div>
                                <!-- Image for the non-list module part ends here -->
                            </div>

                            <!-- Product Brochure Right Side starts-->
                            <div class="na-pdtbrochure__right">
                                <!-- Heading Part -->

                                <div>

                                    <div class="na-heading">

                                        <h2 class="na-heading__title" style="color:<?= $product_color; ?>">
                                            <?= $catalogue_section_title; ?></h2>

                                    </div>

                                </div>

                                <!-- Content Part -->
                                <div class="na-pdtbrochure__content">
                                    <?php
                                    if(!empty($calalogue_description)):
                                        echo $calalogue_description;
                                    endif;
                                    ?>

                                </div>
                                <!-- Content part ends -->
                            </div>
                            <!-- Product Brochure Right Side ends-->
                        </div>
                    </div>
                </div>
                <?php endif; ?>
                <?php  ?>

                <div class="na-pdtcat__outer">
                    <div class="content-wrapper">
                        <?php if(!empty($catalogue_items_title)): ?>
                        <h2 class="na-heading na-heading--inv na-heading--center"><?= $catalogue_items_title; ?></h2>
                        <?php endif; ?>
                        <div class="na-pdtcat">


                            <!-- 1 -->
                            <?php if(!empty($catalogue_items)): 
                            foreach($catalogue_items as $item):    
                                $thumbnail_image    =   $item['thumbnail_image'];
                                $catalogue_pdf_file =   $item['catalogue_pdf_file']['url'];
                                $number_of_pages    =   $item['number_of_pages'];
                                $display_text    =   $item['display_text'];
                            ?>
                            <div class="na-pdtcat__tile">
                                <?php if(!empty($thumbnail_image['url'])): ?>
                                <div class="na-pdtcat__img">
                                    <img src="<?= $thumbnail_image['url']; ?>">
                                </div>
                                <?php endif; ?>
                                <div class="na-pdtcat__body">
                                    <?php if(!empty($display_text)): ?>
                                    <div class="na-pdtcat__title">
                                        <?= $display_text; ?>
                                    </div>
                                    <?php endif; ?>
                                    <div class="na-pdtcat__bluetxt">
                                        <p><span><?= $number_of_pages; ?></span> pages</p>
                                        <div>
                                            <a href="<?= esc_url($catalogue_pdf_file); ?>" target="downloadfile"><svg
                                                    class="na-pdtcat__dwnld" width="22" height="22" viewBox="0 0 28 28"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M13.9993 18.6665L8.16602 12.8332L9.79935 11.1415L12.8327 14.1748V4.6665H15.166V14.1748L18.1994 11.1415L19.8327 12.8332L13.9993 18.6665ZM6.99935 23.3332C6.35768 23.3332 5.80857 23.1049 5.35202 22.6483C4.89546 22.1918 4.66679 21.6423 4.66602 20.9998V17.4998H6.99935V20.9998H20.9993V17.4998H23.3327V20.9998C23.3327 21.6415 23.1044 22.191 22.6479 22.6483C22.1913 23.1057 21.6418 23.334 20.9993 23.3332H6.99935Z"
                                                        fill="#1984C3" />
                                                </svg>
                                            </a>
                                            <a href="<?= esc_url($catalogue_pdf_file); ?>" target="viewmore">
                                                <svg class="na-pdtcat__eye" width="22" height="22" viewBox="0 0 28 28"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M14.1576 17.9377C16.1711 17.9377 17.8034 16.3054 17.8034 14.2918C17.8034 12.2783 16.1711 10.646 14.1576 10.646C12.144 10.646 10.5117 12.2783 10.5117 14.2918C10.5117 16.3054 12.144 17.9377 14.1576 17.9377Z"
                                                        stroke="#1984C3" stroke-width="2" />
                                                    <path
                                                        d="M24.1087 12.9962C24.5802 13.5698 24.816 13.8554 24.816 14.2917C24.816 14.728 24.5802 15.0135 24.1087 15.5872C22.383 17.6823 18.5767 21.5833 14.158 21.5833C9.73924 21.5833 5.93299 17.6823 4.20729 15.5872C3.73576 15.0135 3.5 14.728 3.5 14.2917C3.5 13.8554 3.73576 13.5698 4.20729 12.9962C5.93299 10.901 9.73924 7 14.158 7C18.5767 7 22.383 10.901 24.1087 12.9962Z"
                                                        stroke="#1984C3" stroke-width="2" />
                                                </svg>

                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                            endforeach;
                            endif; ?>

                        </div>
                    </div>
                </div>
                <?php
                    get_template_part("template-parts/available-ranges");
                ?>
            </div>
            <?php
            endif;
            ?>
            <!-- Catalogue Tab Body End -->




            <!-- Gallery Tab Body start -->
            <div class="tab-pane fade" id="pills-gallery" role="tabpanel" aria-labelledby="pills-contact-tab">
                <!-- gallery  -->
                <?php
                    $gallery_section    =   get_field("gallery_section");
                    $section_title      =   $gallery_section['section_title'];
                    $image_tab_label    =   $gallery_section['image_tab_label'];
                    $video_tab_label    =   $gallery_section['video_tab_label'];
                    $gallery_images     =   $gallery_section['gallery_images'];
                    $gallery_videos     =   $gallery_section['gallery_videos'];

                ?>
                <?php if(!empty($gallery_images) || !empty($gallery_videos )): ?>
                <div class="na-gallerytab">
                    <div class="content-wrapper">
                        <div class="na-gallerytab__heading">
                            <?php if(!empty($section_title )): ?>
                            <h3><?= $section_title; ?></h3>
                            <?php endif; ?>
                        </div>
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <?php if(!empty($gallery_images)): ?>
                            <li class="nav-item" role="presentation">
                                <?php if(!empty($image_tab_label)): ?>
                                <button class="nav-link active" id="images-tab" data-bs-toggle="tab"
                                    data-bs-target="#images" type="button" role="tab" aria-controls="images"
                                    aria-selected="true"><?= $image_tab_label; ?></button>
                                <?php endif; ?>
                            </li>
                            <?php endif; ?>
                            <?php if( !empty($gallery_videos ) ): ?>
                            <li class="nav-item" role="presentation">
                                <?php if(!empty($video_tab_label)): ?>
                                <button class="nav-link" id="video-tab" data-bs-toggle="tab" data-bs-target="#video"
                                    type="button" role="tab" aria-controls="video"
                                    aria-selected="false"><?= $video_tab_label; ?></button>
                                <?php endif; ?>
                            </li>
                            <?php endif; ?>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="images" role="tabpanel"
                                aria-labelledby="images-tab">
                                <div class="na-gallery">
                                    <?php
                                        if(!empty($gallery_images)):
                                    ?>
                                    <div class="na-gallery__wrap">
                                        <?php
                                            $i = 0;
                                            foreach($gallery_images as $item):
                                                $i++;
                                                echo '<div class="na-gallery__img" data-bs-toggle="modal" data-bs-target="#galleryimage'.$i.'" >
                                                            <img src="'.$item['image']['url'].'" alt="'.$item['image']['alt'].'">

                                                             <div class="na-modal na-gallery">
                                                                <div class="modal fade" id="galleryimage'.$i.'" tabindex="-1" aria-labelledby="galleryimageLabel" aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered">
                                                                    <div class="modal-content">
                                                                    <button type="button" class="na-modal__close" data-bs-dismiss="modal" aria-label="Close">
                                                                        <img src="'. get_template_directory_uri() .'/assets/images/getaquote-close.png" alt="Close">
                                                                    </button>
                                                                    <div class="modal-body">
                                                                        <div class="img-out">
                                                                        <img src="'.$item['image']['url'].'" alt="'.$item['image']['alt'].'">
                                                                        </div>
                                                                    </div>
                                                                    </div>
                                                                </div>
                                                                </div>
                                                            </div>
                                                            
                                                      </div>';
                                            endforeach;
                                        ?>
                                    </div>
                                    <?php
                                        endif;
                                    ?>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="video" role="tabpanel" aria-labelledby="video-tab">
                                <div class="na-gallery">
                                    <div class="na-gallery__vouter">
                                        <?php

                                        if( !empty($gallery_videos ) ):
                                            foreach( $gallery_videos as $VD_item ):

                                                // print_r( $VD_item );

                                                $video_type     =  $VD_item['video_type'];

                                                if( $video_type == 'Youtube Video')
                                                {
                                                    if(!empty($VD_item['youtube_video_id'])):
                                                    ?>
                                        <div class="na-gallery__vtile">

                                            <iframe width="100%" height="100%"
                                                src="https://www.youtube.com/embed/<?= $VD_item['youtube_video_id']; ?>?autoplay=0&amp;mute=1&amp;controls=1"
                                                title="YouTube video player" frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                referrerpolicy="strict-origin-when-cross-origin"
                                                allowfullscreen=""></iframe>



                                        </div>
                                        <?php
                                                    endif;
                                                }else
                                                {
                                                    if(!empty($VD_item['video_file_url'])):
                                                    ?>
                                        <div class="na-gallery__vtile">
                                            <!-- <video autoplay playsinline loop muted
                                                src="<?= $VD_item['video_file_url']; ?>"></video> -->
                                            <video controls playsinline
                                                src="<?= $VD_item['video_file_url']; ?>"></video>
                                        </div>
                                        <?php
                                                    endif;
                                                }
                                            endforeach;
                                        ?>

                                        <?php 
                                        endif;
                                        ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
				<?php endif; ?>
                <?php
                    get_template_part("template-parts/available-ranges");
                ?>
            </div>
            <!-- Gallery Tab Body End -->


        </div>
    </div>
</div>
<!-- Tab ends here -->

<!-- Special Test -->
<script>
// document.addEventListener('wpcf7mailsent', function(event) {
    // var modal = document.getElementById('cf7-success-modal');
    // var span = document.getElementsByClassName('cf7-close')[0];

    // // Display the modal
    // modal.style.display = 'block';

    // // Close the modal when the user clicks on the "x"
    // span.onclick = function() {
    //     modal.style.display = 'none';
    // }

    // // Close the modal when the user clicks outside of the modal
    // window.onclick = function(event) {
    //     if (event.target == modal) {
    //         modal.style.display = 'none';
    //     }
    // }
// }, false);
</script>
<!-- Special Test -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> 
<script type="text/javascript" src="<?= get_template_directory_uri(); ?>/assets/js/custom.js" id="na-custom-js"></script>

<?php
get_footer();
?>