<?php
/* Template Name: Template Product */
wp_head();
get_header();

if(1==0):
?>




<br><br><br><br><br>





  <!-- Tab starts here -->
  <div class="na">
    <div class="na-tab">
      <div class="content-wrapper">

        <div class="na-tab__inner">
          <div class="na-tab__out">
            <div class="na-tab__out__logo">
              <img src="<?= get_template_directory_uri(); ?>/assets/images/BOSCH_logo.svg" alt="img">
            </div>
          </div>
          <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">

              <button class="nav-link active" id="pills-about-tab" data-bs-toggle="pill" data-bs-target="#pills-about"
                type="button" role="tab" aria-controls="pills-about" aria-selected="true"
                style="background-image: url(<?= get_template_directory_uri(); ?>/assets/images/about_bg.png);">ABOUT</button>
              <!-- <div class="black">
                  
                </div> -->
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="pills-product-tab" data-bs-toggle="pill" data-bs-target="#pills-product"
                type="button" role="tab" aria-controls="pills-product" aria-selected="false"
                style="background-image: url(<?= get_template_directory_uri(); ?>/assets/images/products_bg.png);">PRODUCT</button>
              <!-- <div class="black">
                  
                </div> -->
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="pills-catalogue-tab" data-bs-toggle="pill" data-bs-target="#pills-catalogue"
                type="button" role="tab" aria-controls="pills-catalogue" aria-selected="false"
                style="background-image: url(<?= get_template_directory_uri(); ?>/assets/images/catalogue_bg.png);">CATALOGUE</button>
              <!-- <div class="black">
                  
                </div> -->
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="pills-gallery-tab" data-bs-toggle="pill" data-bs-target="#pills-gallery"
                type="button" role="tab" aria-controls="pills-gallery" aria-selected="false"
                style="background-image: url(<?= get_template_directory_uri(); ?>/assets/images/gallery_bg.png);">GALLERY</button>
              <!-- <div class="black">
                  
                </div> -->
            </li>
          </ul>

        </div>

      </div>

    </div>
    <div class="">
      <div class="tab-content" id="pills-tabContent">

        <div class="tab-pane fade show active" id="pills-about" role="tabpanel" aria-labelledby="pills-about-tab">
          <div class="na-pdtbrochure">
            <div class="content-wrapper">
              <div class="na-pdtbrochure__wrap">
                <!-- Product Brochure Left Side -->
                <div class="na-pdtbrochure__left">
                  <!-- Image for the non-list module part starts here -->
                  <div class="na-pdtbrochure__img">
                    <img src="<?= get_template_directory_uri(); ?>/assets/images/Bosch_boilers_pdt_brochure-a.png" alt="Bosch Boilers">
                  </div>
                  <!-- Image for the non-list module part ends here -->
                </div>

                <!-- Product Brochure Right Side starts-->
                <div class="na-pdtbrochure__right">
                  <!-- Heading Part -->
                  <div>
                    <div class="na-heading">
                      <h2 class="na-heading__title">BOSCH BOILERS</h2>
                    </div>
                  </div>

                  <!-- Content Part -->
                  <div class="na-pdtbrochure__content">
                    <p>
                      Bosch Industriekessel and Bosch KWK Systeme are part of the globally active Bosch Group. These two
                      companies, which together make up the Large Plant business area of Bosch’s Thermotechnology
                      Division, offer energy-efficient system solutions capable of meeting virtually any customer
                      requirement.
                    </p>
                    <br>
                    <p>
                      Prior to mid-2012 the companies sold and marketed their products under the LOOS and KÖHLER &
                      ZIEGLER
                      brand names, but have now pooled their strengths and are operating as Bosch.
                    </p>
                    <div class="na-pdtbrochure__readmore">
                      Read more
                      <span><svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                          xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M13.4932 1.42285C13.4931 1.15769 13.3878 0.903398 13.2003 0.715899C13.0128 0.528399 12.7585 0.423046 12.4933 0.423006L4.49311 0.423006C4.36035 0.420698 4.22845 0.444855 4.10512 0.494066C3.9818 0.543277 3.8695 0.616557 3.7748 0.70963C3.68009 0.802704 3.60487 0.913706 3.55353 1.03616C3.50218 1.15862 3.47573 1.29007 3.47573 1.42285C3.47573 1.55564 3.50218 1.68709 3.55353 1.80955C3.60487 1.932 3.68009 2.04301 3.7748 2.13608C3.8695 2.22915 3.9818 2.30243 4.10512 2.35164C4.22845 2.40085 4.36035 2.42501 4.49311 2.4227L10.0793 2.4227L0.715041 11.7869C0.527504 11.9745 0.422147 12.2288 0.422147 12.494C0.422147 12.7592 0.527505 13.0136 0.715041 13.2011C0.902577 13.3887 1.15693 13.494 1.42215 13.494C1.68736 13.494 1.94172 13.3887 2.12925 13.2011L11.4935 3.83692L11.4935 9.42306C11.498 9.68523 11.6054 9.93512 11.7924 10.1189C11.9794 10.3027 12.2311 10.4057 12.4933 10.4057C12.7555 10.4057 13.0072 10.3027 13.1943 10.1189C13.3813 9.93512 13.4886 9.68523 13.4932 9.42306L13.4932 1.42285Z"
                            fill="black" />
                        </svg>
                      </span>
                    </div>
                  </div>
                  <!-- Content part ends -->
                </div>
                <!-- Product Brochure Right Side ends-->
              </div>
              <div class="na-producttable">
                <div class="content-wrapper">
                  <div class="na-producttable__heading">L15-L22 Fixed Speed</div>
                  <div class="na-producttable__out">
                    <table>
                      <!-- heading  -->
                      <tr>
                        <th>Compressor Model</th>
                        <th>Nominal Pressure [bar g]</th>
                        <th>Drive Motor [kW]</th>
                        <th>FAD 1) [m³/min]</th>
                        <th>Noise Level 2) [dB(A)]</th>
                        <th>Weight [kg]</th>
                        <th>Dimensions L x W x H [mm]</th>
                      </tr>
                      <!-- row two  -->
                      <tr class="bg-row">
                        <td>L15</td>
                        <td class="border-zero">
                          <table>
                            <tr>
                              <td>7.5</td>
                            </tr>
                            <tr>
                              <td>10</td>
                            </tr>
                            <tr>
                              <td>13</td>
                            </tr>
                          </table>
                        </td>
                        <td>15</td>
                        <td class="border-zero">
                          <table>
                            <tr>
                              <td class="border-zero-sec">
                                <table>
                                  <tr>
                                    <td>20.70</td>
                                  </tr>
                                  <tr>
                                    <td>2.60</td>
                                  </tr>
                                  <tr>
                                    <td>1.80</td>
                                  </tr>
                                </table>
                              </td>
                              <td class="border-zero-sec">
                                <table>
                                  <tr>
                                    <td>20.70</td>
                                  </tr>
                                  <tr>
                                    <td>2.60</td>
                                  </tr>
                                  <tr>
                                    <td>1.80</td>
                                  </tr>
                                </table>
                              </td>
                            </tr>
                          </table>
                        </td>
                        <td>70</td>
                        <td>335</td>
                        <td>787 x 698 x 1202</td>
                      </tr>
                      <!-- row three  -->
                      <tr>
                        <td>L18</td>
                        <td class="border-zero">
                          <table>
                            <tr>
                              <td>7.5</td>
                            </tr>
                            <tr>
                              <td>10</td>
                            </tr>
                            <tr>
                              <td>13</td>
                            </tr>
                          </table>
                        </td>
                        <td>18.5</td>
                        <td class="border-zero">
                          <table>
                            <tr>
                              <td>3.25</td>
                            </tr>
                            <tr>
                              <td>2.74</td>
                            </tr>
                            <tr>
                              <td>2.34</td>
                            </tr>
                          </table>
                        </td>
                        <td>70</td>
                        <td>361</td>
                        <td>787 x 698 x 1202</td>
                      </tr>
                      <!-- row four  -->
                      <tr class="bg-row">
                        <td>L22</td>
                        <td class="border-zero">
                          <table>
                            <tr>
                              <td>7.5</td>
                            </tr>
                            <tr>
                              <td>10</td>
                            </tr>
                            <tr>
                              <td>13</td>
                            </tr>
                          </table>
                        </td>
                        <td>22</td>
                        <td class="border-zero">
                          <table>
                            <tr>
                              <td>3.65</td>
                            </tr>
                            <tr>
                              <td>3.21</td>
                            </tr>
                            <tr>
                              <td>2.61</td>
                            </tr>
                          </table>
                        </td>
                        <td>71</td>
                        <td>367</td>
                        <td>787 x 698 x 1202</td>
                      </tr>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Product table start -->
          <div class="na-producttable">
            <div class="content-wrapper">
              <div class="na-producttable__heading">L15-L22 Fixed Speed</div>
              <div class="na-producttable__out">
                <table>
                  <!-- heading  -->
                  <tr>
                    <th>Compressor Model</th>
                    <th>Nominal Pressure [bar g]</th>
                    <th>Drive Motor [kW]</th>
                    <th>FAD 1) [m³/min]</th>
                    <th>Noise Level 2) [dB(A)]</th>
                    <th>Weight [kg]</th>
                    <th>Dimensions L x W x H [mm]</th>
                  </tr>
                  <!-- row two  -->
                  <tr class="bg-row">
                    <td>L15</td>
                    <td class="border-zero">
                      <table>
                        <tr>
                          <td>7.5</td>
                        </tr>
                        <tr>
                          <td>10</td>
                        </tr>
                        <tr>
                          <td>13</td>
                        </tr>
                      </table>
                    </td>
                    <td>15</td>
                    <td class="border-zero">
                      <table>
                        <tr>
                          <td class="border-zero-sec">
                            <table>
                              <tr>
                                <td>20.70</td>
                              </tr>
                              <tr>
                                <td>2.60</td>
                              </tr>
                              <tr>
                                <td>1.80</td>
                              </tr>
                            </table>
                          </td>
                          <td class="border-zero-sec">
                            <table>
                              <tr>
                                <td>20.70</td>
                              </tr>
                              <tr>
                                <td>2.60</td>
                              </tr>
                              <tr>
                                <td>1.80</td>
                              </tr>
                            </table>
                          </td>
                        </tr>
                      </table>
                    </td>
                    <td>70</td>
                    <td>335</td>
                    <td>787 x 698 x 1202</td>
                  </tr>
                  <!-- row three  -->
                  <tr>
                    <td>L18</td>
                    <td class="border-zero">
                      <table>
                        <tr>
                          <td>7.5</td>
                        </tr>
                        <tr>
                          <td>10</td>
                        </tr>
                        <tr>
                          <td>13</td>
                        </tr>
                      </table>
                    </td>
                    <td>18.5</td>
                    <td class="border-zero">
                      <table>
                        <tr>
                          <td>3.25</td>
                        </tr>
                        <tr>
                          <td>2.74</td>
                        </tr>
                        <tr>
                          <td>2.34</td>
                        </tr>
                      </table>
                    </td>
                    <td>70</td>
                    <td>361</td>
                    <td>787 x 698 x 1202</td>
                  </tr>
                  <!-- row four  -->
                  <tr class="bg-row">
                    <td>L22</td>
                    <td class="border-zero">
                      <table>
                        <tr>
                          <td>7.5</td>
                        </tr>
                        <tr>
                          <td>10</td>
                        </tr>
                        <tr>
                          <td>13</td>
                        </tr>
                      </table>
                    </td>
                    <td>22</td>
                    <td class="border-zero">
                      <table>
                        <tr>
                          <td>3.65</td>
                        </tr>
                        <tr>
                          <td>3.21</td>
                        </tr>
                        <tr>
                          <td>2.61</td>
                        </tr>
                      </table>
                    </td>
                    <td>71</td>
                    <td>367</td>
                    <td>787 x 698 x 1202</td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
          <!-- Product table end -->

          <div class="na-partileset">
            <div class="content-wrapper">
              <div>
                <div class="na-heading na-heading--inv">
                  <h2 class="na-heading__title">AVAILABLE <span>RANGES</span> </h2>
                </div>
              </div>
              <div class="na-partileset__sub">

                <div class="na-partile">
                  <div class="na-partile__black">
                    <p class="na-partile__txt">The UL-S is a remarkably efficient steam boiler featuring a
                      three-pass design, capable of producing between 1,250 and 28,000 kg/h of steam at pressures
                      up to 30 bar. It boasts very low emissions and can be adapted to run on biofuels or
                      hydrogen, ensuring its readiness for future energy needs.</p>
                    <div>
                      <svg width="41" height="42" viewBox="0 0 41 42" fill="none" xmlns="http://www.w3.org/2000/svg">
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
                    <p class="na-partile__txt">The CSB is an ultra-compact steam boiler capable of generating up to
                      23,600 kg/h of steam, constructed in accordance with the EN 12953 standard. It stands out
                      for its high efficiency and low emissions, already meeting the future requirements of the
                      MCP Directive (EU) 2015/2193.</p>
                    <div>
                      <svg width="41" height="42" viewBox="0 0 41 42" fill="none" xmlns="http://www.w3.org/2000/svg">
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
                    <p class="na-partile__txt">The UT-L is a highly dependable and efficient heat generator,
                      delivering outputs ranging from 650 to 25,000 kW at pressures up to 16 bar. It adheres to
                      the Gas Appliances Regulation, offering exceptional performance in a very compact design.
                    </p>
                    <div>
                      <svg width="41" height="42" viewBox="0 0 41 42" fill="none" xmlns="http://www.w3.org/2000/svg">
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
                    <p class="na-partile__txt">The UT-L is a highly dependable and efficient heat generator,
                      delivering outputs ranging from 650 to 25,000 kW at pressures up to 16 bar. It adheres to
                      the Gas Appliances Regulation, offering exceptional performance in a very compact design.
                    </p>
                    <div>
                      <svg width="41" height="42" viewBox="0 0 41 42" fill="none" xmlns="http://www.w3.org/2000/svg">
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
                </div>

              </div>
            </div>
          </div>

        </div>

        <div class="tab-pane fade" id="pills-product" role="tabpanel" aria-labelledby="pills-profile-tab">
          <!-- Product Brochure content start -->
          <div class="na-pdtbrochure">
            <div class="content-wrapper">
              <div class="na-pdtbrochure__wrap">
                <!-- Product Brochure Left Side -->
                <div class="na-pdtbrochure__left">

                  <div class="na-proslide">
                    <div class="na-proslide__view">

                      <div class="na-proslide__arrow-l" onclick="arrowLeft()">
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/product-arrow.png" alt="">
                      </div>
                      <!-- product single image  -->
                      <div class="na-proslide__img show">
                        <div class="na-proslide__frames">
                          <img src="<?= get_template_directory_uri(); ?>/assets/images/bosch1.png" alt="">
                        </div>
                      </div>
                      <div class="na-proslide__img">
                        <div class="na-proslide__frames">
                          <img src="<?= get_template_directory_uri(); ?>/assets/images/bosch2.png" alt="">
                        </div>
                      </div>
                      <div class="na-proslide__img">
                        <div class="na-proslide__frames">
                          <img src="<?= get_template_directory_uri(); ?>/assets/images/bosch1.png" alt="">
                        </div>
                      </div>
                      <!-- product single image  -->
                      <div class="na-proslide__arrow-r" onclick="arrowRight()">
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/product-arrow.png" alt="">
                      </div>

                    </div>
                    <!-- product tab  -->
                    <div class="na-proslide__list">
                      <div class="na-proslide__list-items">
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/bosch1.png" alt="">
                      </div>
                      <div class="na-proslide__list-items">
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/bosch2.png" alt="">
                      </div>
                      <div class="na-proslide__list-items">
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/bosch1.png" alt="">
                      </div>
                    </div>
                    <!-- product tab  -->
                  </div>

                  <!-- Slider content ends here -->

                </div>
                <!-- Product Brochure Right Side starts-->
                <div class="na-pdtbrochure__right">
                  <!-- Heading Part -->
                  <div>
                    <div class="na-heading">
                      <h2 class="na-heading__title">UL-S BOILER – Universal
                        Steam Boiler</h2>
                    </div>
                  </div>

                  <!-- Content Part -->
                  <div class="na-pdtbrochure__content">
                    Bosch Industriekessel and Bosch KWK Systeme are part of the globally active Bosch Group. These two
                    companies, which together make up the Large Plant business area of Bosch’s Thermotechnology
                    Division, offer energy-efficient system solutions capable of meeting virtually any customer
                    requirement.
                  </div>
                  <!-- Content part ends -->

                  <!-- List part starts -->
                  <ul class="na-pdtbrochure__list">
                    <li><a href="#">Extremely high efficiency across all output ratings from 1,250 to 28,000 kg/h,
                        ensuring low operating costs and emissions.</a></li>
                    <li><a href="#">Comprehensive system with tailored equipment and advanced, future-ready
                        technology.</a></li>
                    <li><a href="#">Robust, well-established German design that is highly durable and easy to
                        maintain.</a></li>
                    <li><a href="#">Consistent steam quality for a dependable supply.</a></li>
                    <li><a href="#">Custom options available for heat recovery boilers, hybrid systems, or superheated
                        steam.</a></li>
                    <li><a href="#">Intelligent boiler control and seamless integration with digital assistants for
                        enhanced operation.</a></li>
                  </ul>
                  <!-- List part ends -->

                  <!-- CTA Part -->
                  <!-- CTA-1 starts (for non-list module) -->
                  <!-- <a href="" class="na-btn na-btn--pdt">VIEW MORE
              <span class="na-btn__icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19" fill="none">
                  <circle cx="9.5" cy="9.5" r="9.5" fill="white" />
                  <path d="M7.98027 13.3001L11.7803 9.50013L7.98027 5.70013" stroke="#F2AF37" stroke-width="2.5"
                    stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </span>
            </a> -->
                  <!-- CTA-1 ends -->
                  <!-- CTA-2 Starts (for list module) -->
                  <a href="" class="na-btn na-btn--gradient">
                    GET A QUOTE
                  </a>
                  <!-- CTA-2 ends -->
                </div>
                <!-- Product Brochure Right Side ends-->
              </div>
            </div>
          </div>
          <!-- Product Brochure content end -->
          <div class="na-partileset">
            <div class="content-wrapper">
              <div>
                <div class="na-heading na-heading--inv">
                  <h2 class="na-heading__title">AVAILABLE <span>RANGES</span> </h2>
                </div>
              </div>
              <div class="na-partileset__sub">

                <div class="na-partile">
                  <div class="na-partile__black">
                    <p class="na-partile__txt">The UL-S is a remarkably efficient steam boiler featuring a
                      three-pass design, capable of producing between 1,250 and 28,000 kg/h of steam at pressures
                      up to 30 bar. It boasts very low emissions and can be adapted to run on biofuels or
                      hydrogen, ensuring its readiness for future energy needs.</p>
                    <div>
                      <svg width="41" height="42" viewBox="0 0 41 42" fill="none" xmlns="http://www.w3.org/2000/svg">
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
                    <p class="na-partile__txt">The CSB is an ultra-compact steam boiler capable of generating up to
                      23,600 kg/h of steam, constructed in accordance with the EN 12953 standard. It stands out
                      for its high efficiency and low emissions, already meeting the future requirements of the
                      MCP Directive (EU) 2015/2193.</p>
                    <div>
                      <svg width="41" height="42" viewBox="0 0 41 42" fill="none" xmlns="http://www.w3.org/2000/svg">
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
                    <p class="na-partile__txt">The UT-L is a highly dependable and efficient heat generator,
                      delivering outputs ranging from 650 to 25,000 kW at pressures up to 16 bar. It adheres to
                      the Gas Appliances Regulation, offering exceptional performance in a very compact design.
                    </p>
                    <div>
                      <svg width="41" height="42" viewBox="0 0 41 42" fill="none" xmlns="http://www.w3.org/2000/svg">
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
                </div>

              </div>
            </div>
          </div>
        </div>

        <div class="tab-pane fade" id="pills-catalogue" role="tabpanel" aria-labelledby="pills-contact-tab">
          <div class="na-pdtbrochure">
            <div class="content-wrapper">
              <div class="na-pdtbrochure__wrap">
                <!-- Product Brochure Left Side -->
                <div class="na-pdtbrochure__left">
                  <!-- Image for the non-list module part starts here -->
                  <div class="na-pdtbrochure__img">
                    <img src="<?= get_template_directory_uri(); ?>/assets/images/Bosch_boilers_pdt_brochure-a.png" alt="Bosch Boilers">
                  </div>
                  <!-- Image for the non-list module part ends here -->
                </div>

                <!-- Product Brochure Right Side starts-->
                <div class="na-pdtbrochure__right">
                  <!-- Heading Part -->
                  <div>
                    <div class="na-heading">
                      <h2 class="na-heading__title">BOSCH BOILERS</h2>
                    </div>
                  </div>

                  <!-- Content Part -->
                  <div class="na-pdtbrochure__content">
                    <p>
                      Bosch Industriekessel and Bosch KWK Systeme are part of the globally active Bosch Group. These two
                      companies, which together make up the Large Plant business area of Bosch’s Thermotechnology
                      Division, offer energy-efficient system solutions capable of meeting virtually any customer
                      requirement.
                    </p>
                    <br>
                    <p>
                      Prior to mid-2012 the companies sold and marketed their products under the LOOS and KÖHLER &
                      ZIEGLER
                      brand names, but have now pooled their strengths and are operating as Bosch.
                    </p>
                  </div>
                  <!-- Content part ends -->
                </div>
                <!-- Product Brochure Right Side ends-->
              </div>
            </div>
          </div>

          <div class="na-pdtcat__outer">
            <div class="content-wrapper">
              <h2 class="na-heading na-heading--inv na-heading--center">PRODUCT <span>CATALOGUE</span></h2>
              <div class="na-pdtcat">
                <!-- 1 -->
                <div class="na-pdtcat__tile">
                  <div class="na-pdtcat__img">
                    <img src="<?= get_template_directory_uri(); ?>/assets/images/pdt-catlg-1.png">
                  </div>
                  <div class="na-pdtcat__body">
                    <div class="na-pdtcat__title">
                      Union-Hungaria-Sogyarak-Nyrt_Small
                    </div>
                    <div class="na-pdtcat__bluetxt">
                      <p><span>8</span> pages</p>
                      <div>
                        <a href="#"><svg class="na-pdtcat__dwnld" width="22" height="22" viewBox="0 0 28 28" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                              d="M13.9993 18.6665L8.16602 12.8332L9.79935 11.1415L12.8327 14.1748V4.6665H15.166V14.1748L18.1994 11.1415L19.8327 12.8332L13.9993 18.6665ZM6.99935 23.3332C6.35768 23.3332 5.80857 23.1049 5.35202 22.6483C4.89546 22.1918 4.66679 21.6423 4.66602 20.9998V17.4998H6.99935V20.9998H20.9993V17.4998H23.3327V20.9998C23.3327 21.6415 23.1044 22.191 22.6479 22.6483C22.1913 23.1057 21.6418 23.334 20.9993 23.3332H6.99935Z"
                              fill="#1984C3" />
                          </svg>
                        </a>
                        <a href="#">
                          <svg class="na-pdtcat__eye" width="22" height="22" viewBox="0 0 28 28" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
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
                <!-- 2 -->
                <div class="na-pdtcat__tile">
                  <div class="na-pdtcat__img">
                    <img src="<?= get_template_directory_uri(); ?>/assets/images/pdt-catlg-2.png">
                  </div>
                  <div class="na-pdtcat__body">
                    <div class="na-pdtcat__title">
                      Compair_case_study_pano_<br>dh_oil-Free_Small
                    </div>
                    <div class="na-pdtcat__bluetxt">
                      <p><span>6</span> pages</p>
                      <div>
                        <a href="#"><svg class="na-pdtcat__dwnld" width="22" height="22" viewBox="0 0 28 28" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                              d="M13.9993 18.6665L8.16602 12.8332L9.79935 11.1415L12.8327 14.1748V4.6665H15.166V14.1748L18.1994 11.1415L19.8327 12.8332L13.9993 18.6665ZM6.99935 23.3332C6.35768 23.3332 5.80857 23.1049 5.35202 22.6483C4.89546 22.1918 4.66679 21.6423 4.66602 20.9998V17.4998H6.99935V20.9998H20.9993V17.4998H23.3327V20.9998C23.3327 21.6415 23.1044 22.191 22.6479 22.6483C22.1913 23.1057 21.6418 23.334 20.9993 23.3332H6.99935Z"
                              fill="#1984C3" />
                          </svg>
                        </a>
                        <a href="#">
                          <svg class="na-pdtcat__eye" width="22" height="22" viewBox="0 0 28 28" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
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
                <!-- 3 -->
                <div class="na-pdtcat__tile">
                  <div class="na-pdtcat__img">
                    <img src="<?= get_template_directory_uri(); ?>/assets/images/pdt-catlg-3.png">
                  </div>
                  <div class="na-pdtcat__body">
                    <div class="na-pdtcat__title">
                      Societe-Des-Eaux-Minerales-De-Luchon_Small
                    </div>
                    <div class="na-pdtcat__bluetxt">
                      <p><span>12</span> pages</p>
                      <div>
                        <a href="#"><svg class="na-pdtcat__dwnld" width="22" height="22" viewBox="0 0 28 28" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                              d="M13.9993 18.6665L8.16602 12.8332L9.79935 11.1415L12.8327 14.1748V4.6665H15.166V14.1748L18.1994 11.1415L19.8327 12.8332L13.9993 18.6665ZM6.99935 23.3332C6.35768 23.3332 5.80857 23.1049 5.35202 22.6483C4.89546 22.1918 4.66679 21.6423 4.66602 20.9998V17.4998H6.99935V20.9998H20.9993V17.4998H23.3327V20.9998C23.3327 21.6415 23.1044 22.191 22.6479 22.6483C22.1913 23.1057 21.6418 23.334 20.9993 23.3332H6.99935Z"
                              fill="#1984C3" />
                          </svg>
                        </a>
                        <a href="#">
                          <svg class="na-pdtcat__eye" width="22" height="22" viewBox="0 0 28 28" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
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
                <!-- 4 -->
                <div class="na-pdtcat__tile">
                  <div class="na-pdtcat__img">
                    <img src="<?= get_template_directory_uri(); ?>/assets/images/pdt-catlg-4.png">
                  </div>
                  <div class="na-pdtcat__body">
                    <div class="na-pdtcat__title">
                      Belovo_Small
                    </div>
                    <div class="na-pdtcat__bluetxt">
                      <p><span>2</span> pages</p>
                      <div>
                        <a href="#"><svg class="na-pdtcat__dwnld" width="22" height="22" viewBox="0 0 28 28" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                              d="M13.9993 18.6665L8.16602 12.8332L9.79935 11.1415L12.8327 14.1748V4.6665H15.166V14.1748L18.1994 11.1415L19.8327 12.8332L13.9993 18.6665ZM6.99935 23.3332C6.35768 23.3332 5.80857 23.1049 5.35202 22.6483C4.89546 22.1918 4.66679 21.6423 4.66602 20.9998V17.4998H6.99935V20.9998H20.9993V17.4998H23.3327V20.9998C23.3327 21.6415 23.1044 22.191 22.6479 22.6483C22.1913 23.1057 21.6418 23.334 20.9993 23.3332H6.99935Z"
                              fill="#1984C3" />
                          </svg>
                        </a>
                        <a href="#">
                          <svg class="na-pdtcat__eye" width="22" height="22" viewBox="0 0 28 28" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
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
              </div>
            </div>
          </div>
        </div>

        <div class="tab-pane fade" id="pills-gallery" role="tabpanel" aria-labelledby="pills-contact-tab">
          <!-- gallery  -->
          <div class="na-gallerytab">
            <div class="content-wrapper">
              <div class="na-gallerytab__heading">
                <h3>GALLERY</h3>
              </div>
              <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="images-tab" data-bs-toggle="tab" data-bs-target="#images"
                    type="button" role="tab" aria-controls="images" aria-selected="true">images</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="video-tab" data-bs-toggle="tab" data-bs-target="#video" type="button"
                    role="tab" aria-controls="video" aria-selected="false">video</button>
                </li>
              </ul>
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="images" role="tabpanel" aria-labelledby="images-tab">

                  <div class="na-gallery">
                    <div class="na-gallery__outer">
                      <div class="na-gallery__tile na-gallery__tile1">
                        <div class="na-gallery__innerout">
                          <div style="background-image: url(<?= get_template_directory_uri(); ?>/assets/images/image-1.png);" class="na-gallery__desk">
                          </div>
                          <div style="background-image: url(<?= get_template_directory_uri(); ?>/assets/images/image-2.png);" class="na-gallery__mob">
                          </div>
                        </div>
                        <div class="na-gallery__inner">
                          <p>Screw Compair <br>L30 - L45</p>
                        </div>
                      </div>
                      <div class="na-gallery__tile na-gallery__tile2">
                        <div class="na-gallery__innerout">
                          <div style="background-image: url(<?= get_template_directory_uri(); ?>/assets/images/image-2.png);" class="na-gallery__desk">
                          </div>
                          <div style="background-image: url(<?= get_template_directory_uri(); ?>/assets/images/image-2.png);" class="na-gallery__mob">
                          </div>
                        </div>
                        <div class="na-gallery__inner">
                          <p>Screw Compair <br>L30 - L45</p>
                        </div>
                      </div>
                      <div class="na-gallery__tile na-gallery__tile3">
                        <div class="na-gallery__innerout">
                          <div style="background-image: url(<?= get_template_directory_uri(); ?>/assets/images/image-3.png);" class="na-gallery__desk">
                          </div>
                          <div style="background-image: url(<?= get_template_directory_uri(); ?>/assets/images/image-2.png);" class="na-gallery__mob">
                          </div>
                        </div>
                        <div class="na-gallery__inner">
                          <p>Screw Compair <br>L30 - L45</p>
                        </div>
                      </div>
                      <div class="na-gallery__tile na-gallery__tile4">
                        <div class="na-gallery__innerout">
                          <div style="background-image: url(<?= get_template_directory_uri(); ?>/assets/images/image-4.png);" class="na-gallery__desk">
                          </div>
                          <div style="background-image: url(<?= get_template_directory_uri(); ?>/assets/images/image-2.png);" class="na-gallery__mob">
                          </div>
                        </div>
                        <div class="na-gallery__inner">
                          <p>Screw Compair <br>L30 - L45</p>
                        </div>
                      </div>
                      <div class="na-gallery__tile na-gallery__tile5">
                        <div class="na-gallery__innerout">
                          <div style="background-image: url(<?= get_template_directory_uri(); ?>/assets/images/image-1.png);" class="na-gallery__desk">
                          </div>
                          <div style="background-image: url(<?= get_template_directory_uri(); ?>/assets/images/image-2.png);" class="na-gallery__mob">
                          </div>
                        </div>
                        <div class="na-gallery__inner">
                          <p>Screw Compair <br>L30 - L45</p>
                        </div>
                      </div>
                      <div class="na-gallery__tile na-gallery__tile6">
                        <div class="na-gallery__innerout">
                          <div style="background-image: url(<?= get_template_directory_uri(); ?>/assets/images/image-5.png);" class="na-gallery__desk">
                          </div>
                          <div style="background-image: url(<?= get_template_directory_uri(); ?>/assets/images/image-2.png);" class="na-gallery__mob">
                          </div>
                        </div>
                        <div class="na-gallery__inner">
                          <p>Screw Compair <br>L30 - L45</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="video" role="tabpanel" aria-labelledby="video-tab">
                  <div class="na-gallery">
                    <div class="na-gallery__vouter">
                      <div class="na-gallery__vtile">
                        <!-- <video autoplay playsinline loop muted src="<?= get_template_directory_uri(); ?>/assets/video/girl-cam-desk.mp4"></video> -->
                        <iframe width="100%" height="100%"
                          src="https://www.youtube.com/embed/T1-TTfYOpTY?autoplay=1&mute=1&controls=0"
                          title="YouTube video player" frameborder="0"
                          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                          referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

                      </div>

                      <div class="na-gallery__vtile">
                        <video autoplay playsinline loop muted src="<?= get_template_directory_uri(); ?>/assets/video/girl-cam-desk.mp4"></video>
                      </div>

                      <div class="na-gallery__vtile">
                        <video src="<?= get_template_directory_uri(); ?>/assets/video/girl-cam-desk.mp4"></video>
                      </div>

                      <div class="na-gallery__vtile">
                        <!-- <video autoplay playsinline loop muted src="<?= get_template_directory_uri(); ?>/assets/video/girl-cam-desk.mp4"></video> -->
                        <iframe width="100%" height="100%"
                          src="https://www.youtube.com/embed/T1-TTfYOpTY?autoplay=1&mute=1&controls=0"
                          title="YouTube video player" frameborder="0"
                          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                          referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </div>
  <!-- Tab ends here -->














<?php
endif;

echo "Page is under Development.!..";

get_footer();
?>