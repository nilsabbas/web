<?php
$relative_products  =   get_field('relative_products');

$relative_products_title    =   $relative_products['relative_products_title'];
$relative_products          =   $relative_products['relative_products'];

if(!empty($relative_products)):
?>
<!-- AVAILABLE <span>RANGES</span> -->
<div class="na-partileset">
    <div class="content-wrapper">
        <div>
            <div class="na-heading na-heading--inv">
                <h2 class="na-heading__title"><?= $relative_products_title; ?></h2>
            </div>
        </div>
        <div class="na-partileset__sub">
            <?php
                if(!empty($relative_products)):
                    foreach($relative_products as $item)
                    {
                        $postId  =  $item->ID;

                        $product_section = get_field('product_section', $postId);

                        $product_section_title  = $product_section['product_section_title'];
                        $product_detailed       = $product_section['product_detailed'];
                        $product_images_slider  = $product_section['product_images_slider'];

                        $thumbImageUrl          = $product_images_slider[0]['image']['url'];
                        $relPostUrl             = get_permalink($postId);
                        
                        // echo $product_section_title;
            ?>
            <div class="na-partile">
                <div class="na-partile__black">
                    <p class="na-partile__txt">
                        <?= strip_tags($product_detailed,'p');  ?>
                    </p>
                    <div>
                        <a href="<?= esc_url($relPostUrl); ?>/?product=true">
                            <svg width="41" height="42" viewBox="0 0 41 42" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="20.5" cy="21" r="20.5" />
                                <path
                                    d="M16.7764 15.8847C16.7817 15.5609 16.9153 15.2482 17.148 15.0156C17.3807 14.7829 17.6933 14.6492 18.0172 14.644L25.7895 14.519C26.1134 14.5139 26.4219 14.6376 26.6472 14.8629C26.8725 15.0882 26.9962 15.3967 26.991 15.7205L26.8661 23.4929C26.8553 23.8132 26.7193 24.1205 26.4873 24.3486C26.2553 24.5767 25.9459 24.7074 25.6256 24.7126C25.3054 24.7177 25 24.5969 24.7752 24.3761C24.5504 24.1553 24.4242 23.8522 24.4238 23.5321L24.4259 18.7836L16.0899 27.1196C15.8572 27.3523 15.5444 27.486 15.2205 27.4912C14.8966 27.4964 14.588 27.3727 14.3627 27.1474C14.1373 26.922 14.0136 26.6134 14.0189 26.2895C14.0241 25.9656 14.1577 25.6529 14.3905 25.4202L22.7265 17.0841L17.9779 17.0862C17.6541 17.0914 17.3456 16.9677 17.1202 16.7424C16.8949 16.5171 16.7713 16.2086 16.7764 15.8847Z"
                                    fill="black" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="na-partile__sub1">
                    <img src="<?= $thumbImageUrl; ?>">
                </div>
                <div class="na-partile__sub2">
                    <h2><?= $product_section_title; ?></h2>
                </div>
            </div>
            <?php

                                    }

                                endif;
                            ?>


            <!-- <div class="na-partile">
                                <div class="na-partile__black">
                                    <p class="na-partile__txt">The UL-S is a remarkably efficient steam boiler featuring
                                        a
                                        three-pass design, capable of producing between 1,250 and 28,000 kg/h of steam
                                        at pressures
                                        up to 30 bar. It boasts very low emissions and can be adapted to run on biofuels
                                        or
                                        hydrogen, ensuring its readiness for future energy needs.</p>
                                    <div>
                                        <svg width="41" height="42" viewBox="0 0 41 42" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="20.5" cy="21" r="20.5" />
                                            <path
                                                d="M16.7764 15.8847C16.7817 15.5609 16.9153 15.2482 17.148 15.0156C17.3807 14.7829 17.6933 14.6492 18.0172 14.644L25.7895 14.519C26.1134 14.5139 26.4219 14.6376 26.6472 14.8629C26.8725 15.0882 26.9962 15.3967 26.991 15.7205L26.8661 23.4929C26.8553 23.8132 26.7193 24.1205 26.4873 24.3486C26.2553 24.5767 25.9459 24.7074 25.6256 24.7126C25.3054 24.7177 25 24.5969 24.7752 24.3761C24.5504 24.1553 24.4242 23.8522 24.4238 23.5321L24.4259 18.7836L16.0899 27.1196C15.8572 27.3523 15.5444 27.486 15.2205 27.4912C14.8966 27.4964 14.588 27.3727 14.3627 27.1474C14.1373 26.922 14.0136 26.6134 14.0189 26.2895C14.0241 25.9656 14.1577 25.6529 14.3905 25.4202L22.7265 17.0841L17.9779 17.0862C17.6541 17.0914 17.3456 16.9677 17.1202 16.7424C16.8949 16.5171 16.7713 16.2086 16.7764 15.8847Z"
                                                fill="black" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="na-partile__sub1">
                                    <img src="<?= get_template_directory_uri(); ?>/assets/images/D37 24 (3).png">
                                </div>
                                <div class="na-partile__sub2">
                                    <h2>UL-S BOILER – Universal <br> Steam Boiler</h2>
                                </div>
                            </div>

                            <div class="na-partile">
                                <div class="na-partile__black">
                                    <p class="na-partile__txt">The CSB is an ultra-compact steam boiler capable of
                                        generating up to
                                        23,600 kg/h of steam, constructed in accordance with the EN 12953 standard. It
                                        stands out
                                        for its high efficiency and low emissions, already meeting the future
                                        requirements of the
                                        MCP Directive (EU) 2015/2193.</p>
                                    <div>
                                        <svg width="41" height="42" viewBox="0 0 41 42" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="20.5" cy="21" r="20.5" />
                                            <path
                                                d="M16.7764 15.8847C16.7817 15.5609 16.9153 15.2482 17.148 15.0156C17.3807 14.7829 17.6933 14.6492 18.0172 14.644L25.7895 14.519C26.1134 14.5139 26.4219 14.6376 26.6472 14.8629C26.8725 15.0882 26.9962 15.3967 26.991 15.7205L26.8661 23.4929C26.8553 23.8132 26.7193 24.1205 26.4873 24.3486C26.2553 24.5767 25.9459 24.7074 25.6256 24.7126C25.3054 24.7177 25 24.5969 24.7752 24.3761C24.5504 24.1553 24.4242 23.8522 24.4238 23.5321L24.4259 18.7836L16.0899 27.1196C15.8572 27.3523 15.5444 27.486 15.2205 27.4912C14.8966 27.4964 14.588 27.3727 14.3627 27.1474C14.1373 26.922 14.0136 26.6134 14.0189 26.2895C14.0241 25.9656 14.1577 25.6529 14.3905 25.4202L22.7265 17.0841L17.9779 17.0862C17.6541 17.0914 17.3456 16.9677 17.1202 16.7424C16.8949 16.5171 16.7713 16.2086 16.7764 15.8847Z"
                                                fill="black" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="na-partile__sub1">
                                    <img src="<?= get_template_directory_uri(); ?>/assets/images/D37 24.png">
                                </div>
                                <div class="na-partile__sub2">
                                    <h2>CSB BOILER – Ultra-compact <br>
                                        steam boiler</h2>
                                </div>
                            </div>

                            <div class="na-partile">
                                <div class="na-partile__black">
                                    <p class="na-partile__txt">The UT-L is a highly dependable and efficient heat
                                        generator,
                                        delivering outputs ranging from 650 to 25,000 kW at pressures up to 16 bar. It
                                        adheres to
                                        the Gas Appliances Regulation, offering exceptional performance in a very
                                        compact design.
                                    </p>
                                    <div>
                                        <svg width="41" height="42" viewBox="0 0 41 42" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="20.5" cy="21" r="20.5" />
                                            <path
                                                d="M16.7764 15.8847C16.7817 15.5609 16.9153 15.2482 17.148 15.0156C17.3807 14.7829 17.6933 14.6492 18.0172 14.644L25.7895 14.519C26.1134 14.5139 26.4219 14.6376 26.6472 14.8629C26.8725 15.0882 26.9962 15.3967 26.991 15.7205L26.8661 23.4929C26.8553 23.8132 26.7193 24.1205 26.4873 24.3486C26.2553 24.5767 25.9459 24.7074 25.6256 24.7126C25.3054 24.7177 25 24.5969 24.7752 24.3761C24.5504 24.1553 24.4242 23.8522 24.4238 23.5321L24.4259 18.7836L16.0899 27.1196C15.8572 27.3523 15.5444 27.486 15.2205 27.4912C14.8966 27.4964 14.588 27.3727 14.3627 27.1474C14.1373 26.922 14.0136 26.6134 14.0189 26.2895C14.0241 25.9656 14.1577 25.6529 14.3905 25.4202L22.7265 17.0841L17.9779 17.0862C17.6541 17.0914 17.3456 16.9677 17.1202 16.7424C16.8949 16.5171 16.7713 16.2086 16.7764 15.8847Z"
                                                fill="black" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="na-partile__sub1">
                                    <img src="<?= get_template_directory_uri(); ?>/assets/images/D37 24 (1).png">
                                </div>
                                <div class="na-partile__sub2">
                                    <h2>UT-L - HOT WATER <br>
                                        BOILER</h2>
                                </div>
                            </div>

                            <div class="na-partile">
                                <div class="na-partile__black">
                                    <p class="na-partile__txt">The UT-L is a highly dependable and efficient heat
                                        generator,
                                        delivering outputs ranging from 650 to 25,000 kW at pressures up to 16 bar. It
                                        adheres to
                                        the Gas Appliances Regulation, offering exceptional performance in a very
                                        compact design.
                                    </p>
                                    <div>
                                        <svg width="41" height="42" viewBox="0 0 41 42" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="20.5" cy="21" r="20.5" />
                                            <path
                                                d="M16.7764 15.8847C16.7817 15.5609 16.9153 15.2482 17.148 15.0156C17.3807 14.7829 17.6933 14.6492 18.0172 14.644L25.7895 14.519C26.1134 14.5139 26.4219 14.6376 26.6472 14.8629C26.8725 15.0882 26.9962 15.3967 26.991 15.7205L26.8661 23.4929C26.8553 23.8132 26.7193 24.1205 26.4873 24.3486C26.2553 24.5767 25.9459 24.7074 25.6256 24.7126C25.3054 24.7177 25 24.5969 24.7752 24.3761C24.5504 24.1553 24.4242 23.8522 24.4238 23.5321L24.4259 18.7836L16.0899 27.1196C15.8572 27.3523 15.5444 27.486 15.2205 27.4912C14.8966 27.4964 14.588 27.3727 14.3627 27.1474C14.1373 26.922 14.0136 26.6134 14.0189 26.2895C14.0241 25.9656 14.1577 25.6529 14.3905 25.4202L22.7265 17.0841L17.9779 17.0862C17.6541 17.0914 17.3456 16.9677 17.1202 16.7424C16.8949 16.5171 16.7713 16.2086 16.7764 15.8847Z"
                                                fill="black" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="na-partile__sub1">
                                    <img src="<?= get_template_directory_uri(); ?>/assets/images/D37 24 (2).png">
                                </div>
                                <div class="na-partile__sub2">
                                    <h2>ELSB BOILER – Electric <br>
                                        Steam Boiler</h2>
                                </div>
                            </div> -->

        </div>
    </div>
</div>
<?php 
endif; ?>