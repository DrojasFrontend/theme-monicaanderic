<?php 
/* 
* Template Name: Home
*/

// Manejar las peticiones AJAX del RSVP
// handle_rsvp_ajax();

get_header();

// Función para generar enlaces de páginas específicas con anclas multiidioma
function get_multilingual_page_link($page, $anchor) {
    global $TRP_LANGUAGE;
    $current_language = $TRP_LANGUAGE ? $TRP_LANGUAGE : 'en_US';
    
    if ($current_language === 'es_CO') {
        return '/es/' . $page . '#' . $anchor;
    } else {
        return '/' . $page . '#' . $anchor;
    }
}
?>

<main class="">
    <!-- Hero -->
     <section class="position-relative">
        <?php if(wp_is_mobile()): ?>
            <div class="customSectionBox customSectionBoxGreen w-100 h-100 position-absolute top-0 start-0">
                <img style="object-position: top" class="w-100 object-fit-cover object-position-top" height="960" src="<?php echo THEME_IMG; ?>hero-mobile.webp" alt="Hero Mobile">
            </div>
        <?php else: ?>
            <img class="w-100" src="<?php echo THEME_IMG; ?>hero.webp" alt="Hero Desktop">
        <?php endif; ?>

        <div class="py-xl-0 py-5"></div>
        <div class="py-xl-0 py-5"></div>
        <div class="py-xl-0 py-5"></div>
        <div class="py-xl-0 py-4"></div>
        <div class="position-relative position-xl-absolute top-0 start-0 w-100 h-100 d-flex align-items-end px-xl-0 px-3 z-1">
            <div class="container">
                <div class="row">
                    <div class="customSectionBox col-12 col-xl-7 mx-auto px-5 rounded-3" id="wedding">
                        <div class="py-xl-5 py-4"></div>
                        <div class="text-center">
                            <?php if(wp_is_mobile()): ?>
                            <img width="215" class="mb-3" src="<?php echo THEME_IMG; ?>logo.svg" alt="Monica & Eric">
                            <?php else: ?>
                            <img class="mb-5" src="<?php echo THEME_IMG; ?>logo.svg" alt="Monica & Eric">
                            <?php endif; ?>

                            <p class="fs-xl-3 ls-xl-36 mb-xl-3 mb-2">DECEMBER 27th-28th, 2025</p>
                            <p class="fs-xl-6 ls-xl-36 text-uppercase mb-xl-5 mb-3" >cartagena DE INDIAS, <br> colombia</p>
        
                            <h2 class="font-titulo fs-xl-1-lg fs-1 text-secondary">Wedding</h2>
                            <p class="fs-xl-2 mb-xl-4 mb-3">DECEMBER 27th, 2025</p>
                            
                            <h2 class="font-titulo fs-xl-1-md fs-2 text-secondary">Ceremony</h2>
                            <p class="fs-xl-2 mb-4">Catedral de Santa Catalina de Alejandría</p>
                            <a href="https://maps.app.goo.gl/Z2vTEY7E9GAZCJSr7" class="btn btn-primary mx-auto mb-4 text-uppercase" target="_blank">LOCATION</a>
                            
                            <p class="fs-xl-2 mb-xl-4 mb-3">3:00 p.m.</p>
        
                            <h2 class="font-titulo fs-xl-1-md fs-2 text-secondary">Reception to follow</h2>
                            <p class="fs-xl-2 mb-xl-4 mb-3">Casa 1537</p>
                            <a href="https://maps.app.goo.gl/y3E6muyPuueWFc8z9" class="btn btn-primary mx-auto mb-4 text-uppercase" target="_blank">LOCATION</a>
        
                            <div class="row">
                                <div class="col-12 col-xl-6 position-relative mb-xl-0 mb-4">
                                    <p class="fs-xl-4 mb-2 text-uppercase">Dress code:</p>
                                    <p class="fs-xl-4 text-uppercase mb-xl-4 mb-3">BLack tie</p>
                                    <button type="button" data-bs-toggle="modal" data-bs-target="#blackTieExamples" class="btn btn-primary mx-auto text-uppercase bg-transparent">view example</a>
                                    <span class="position-absolute top-0 end-0 border-0 border-end d-xl-block d-none h-100"></span>
                                </div>
                                <div class="col-12 col-xl-6">
                                    <p class="fs-xl-4 mb-2 text-uppercase">GIFTS:</p>
                                    <p class="fs-xl-4 text-uppercase mb-xl-4 mb-3">wishing well</p>
                                    <a href="#" class="btn btn-primary mx-auto text-uppercase" target="_blank">click here</a>
                                </div>
                            </div>
                        </div>
        
                        <div class="py-xl-5 py-4"></div>
                    </div>
                </div>
            </div>
        </div>
     </section>

     <!-- Save the Date -->
     <section class="customSectionCountdown position-relative">
        <div class="customSectionBox customSectionBoxGreen">
            <img class="customSectionCountdown__flower customSectionCountdown__flower-1 position-absolute z-1 pointer-events-none" src="<?php echo THEME_IMG; ?>rsvp-flower-1.webp" alt="">
            <img class="customSectionCountdown__flower customSectionCountdown__flower-2 position-absolute z-1 pointer-events-none" src="<?php echo THEME_IMG; ?>rsvp-flower-4.webp" alt="">
            
            <div class="py-5"></div>
            <div class="py-xl-5"></div>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-xl-8 mx-auto">
                        <div class="text-center">
                            <h2 class="font-titulo fs-xl-1-lg fs-1 text-secondary">Save the Date</h2>
                            <div id="mi-countdown" data-countdown="2025-12-27 19:00:00"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="py-4"></div>
            <div class="py-xl-5 py-3"></div>
            <div class="py-xl-5"></div>
            <img class="customSectionCountdown__flower customSectionCountdown__flower-3 position-absolute z-1" src="<?php echo THEME_IMG; ?>rsvp-flower-2.webp" alt="">
            <img class="customSectionCountdown__flower customSectionCountdown__flower-4 position-absolute z-1" src="<?php echo THEME_IMG; ?>rsvp-flower-3.webp" alt="">
        </div>
     </section>

     <!-- Events -->
     <section class="position-relative">
        <div class="py-xl-0 py-5"></div>
        <?php if(wp_is_mobile()): ?>
            <img style="object-position: bottom" class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover object-position-bottom d-block" src="<?php echo THEME_IMG; ?>bg-events.webp" alt="Hero Desktop">
        <?php else: ?>
            <img class="w-100 d-block" src="<?php echo THEME_IMG; ?>bg-events.webp" alt="Hero Desktop">
        <?php endif; ?>

        <div class="position-relative position-xl-absolute top-0 start-0 w-100 h-100 d-flex align-items-center z-1 px-xl-0 px-3">
            <div class="container">
                <div class="row">
                    <div class="customSectionBox col-12 col-xl-7 mx-auto px-5 rounded-3" id="events">
                        <div class="py-xl-5 py-4"></div>
                        <div class="text-center">
                            <h2 class="font-titulo fs-xl-1-lg fs-1 text-secondary mb-xl-2">Events</h2>
                            <h3 class="font-titulo fs-xl-1-md fs-2 text-secondary mb-xl-3">After the Sunset</h3>

                            <p class="fs-xl-2 ls-xl-36 mb-xl-5 mb-3">DECEMBER 28th, 2025</p>
                            <p class="fs-xl-2 ls-xl-36 mb-1" >Baluarte de San Francisco Javier</p>
                            <p class="fs-xl-2 ls-xl-36 mb-4" >4:30 p.m. a 12:00 a.m.</p>

                            <a href="https://maps.app.goo.gl/tgjACRTYV2XVmVwC9" class="btn btn-primary mx-auto mb-xl-5 mb-4 text-uppercase" target="_blank">LOCATION</a>
        
                            <p class="fs-xl-2 mb-2">DRESS CODE:</p>
                            <p class="fs-xl-2 mb-4">Tropical chic cocktail</p>
                            
                            <button type="button" data-bs-toggle="modal" data-bs-target="#tropicalExample" class="btn btn-primary mx-auto text-uppercase bg-transparent">view example</a>
                        </div>
        
                        <div class="py-xl-5 py-4"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="py-xl-0 py-5"></div>
     </section>

     <!-- R.S.V.P -->
    <section class="customSectionRsvp position-relative overflow-hidden" id="rsvp">
        <div class="customSectionBox customSectionBoxPink px-xl-0 px-3">
            <div class="py-xl-5 py-4"></div>
            <div class="container position-relative">
                <img src="<?php echo THEME_IMG; ?>rsvp-flower-5.webp" alt="" class="customSectionRsvp__flower-1 position-absolute pointer-events-none">
                <img src="<?php echo THEME_IMG; ?>rsvp-flower-6.webp" alt="" class="customSectionRsvp__flower-2 position-absolute pointer-events-none">
                <div class="row position-relative z-1">
                    <div class="customSectionBox col-12 col-xl-9 mx-auto rounded-3 pt-4 px-xl-0 px-xl-5 px-4">
                        
                        <div class="col-12 col-xl-9 mx-auto rounded-3">
                            <div class="text-center mb-xl-5 mb-3">
                                <?php if(wp_is_mobile()): ?>
                                    <img width="320" style="margin-bottom: -40px" src="<?php echo THEME_IMG; ?>rsvp.webp" alt="R.S.V.P.">
                                <?php else: ?>
                                    <img style="margin-bottom: -80px" src="<?php echo THEME_IMG; ?>rsvp.webp" alt="R.S.V.P.">
                                <?php endif; ?>
                                <h2 class="font-titulo fs-xl-1-lg fs-1 text-secondary">R.S.V.P.</h2>
                                <h2 class="fs-xl-2 mb-xl-2 mb-3 ls-0">WE CAN´T WAIT TO <br class="d-xl-none"> CELEBRATE WITH YOU.</h2>
                                <h3 class="font-titulo fs-xl-1-sm fs-4 text-secondary ls-0">Please respond by October 10, 2025</h3>
                            </div>

                            <?php
                                global $TRP_LANGUAGE;
                                if ($TRP_LANGUAGE === 'en_US') {
                                echo do_shortcode('[contact-form-7 id="5d0a69c" title="R.S.V.P | EN"]');
                                } else {
                                echo do_shortcode('[contact-form-7 id="3214a4c" title="R.S.V.P | ES"]');
                                }
                            ?>

                            <div class="text-center">
                                <p class="fs-xl-6 ls-2 text-secondary">For questions or more information, email us at </p>
                                <p class="fs-xl-6 ls-2 text-secondary">rsvp@moniyericwedding.com</p>
                                <p class="fs-xl-6 ls-2 text-secondary">or contact our concierge</p>
                                <p class="fs-xl-6 ls-2 text-secondary">via WhatsApp: +57 321 849 2726</p>
                            </div>
                        </div>
                        <div class="py-xl-5 py-4"></div>
                    </div>
                </div>
            </div>
            <div class="py-xl-5 py-2"></div>
            <div class="py-4"></div>
        </div>
     </section>

     <!-- Cartagena -->
     <section>
        <div class="customSectionCartagena customSectionBox customSectionBoxWhite overflow-hidden">
            <div class="container-fluid gx-0">
                <div class="row gx-0">
                    <img class="d-block w-100" src="<?php echo THEME_IMG; ?>bg-cartagena.webp" alt="Cartagena">
                </div>
            </div>
            <div class="container customSectionCartagena__mt" id="cartagena">
                <div class="row px-xl-0 px-4 position-relative">
                    <img src="<?php echo THEME_IMG; ?>cartagena-flower-1.webp" alt="Flower 1" class="customSectionCartagena__flower-1 position-absolute">
                    <img src="<?php echo THEME_IMG; ?>cartagena-flower-2.webp" alt="Flower 2" class="customSectionCartagena__flower-2 position-absolute">
                    <div class="customSectionBox rounded-5 col-12 col-xl-9 mx-auto position-relative">
                        <div class="py-xl-5 py-3"></div>
                        <div class="text-center">
                            <h2 class="font-titulo fs-xl-1 fs-1 text-secondary">Cartagena</h2>
                            <p class="fs-xl-5 mb-4 text-gray">TRAVEL TO COlOMBIA</p>
                            <div class="customSectionCartagena__text mx-auto mb-5 px-xl-0 px-4">
                                <p class="fs-xl-3 fs-p-md text-secondary mb-4">
                                    We are delighted to celebrate our wedding in Colombia’s coastal jewel, Cartagena. Recognized as a UNESCO World Heritage Site, this city stands as one of South America’s most treasured cultural landmarks. Within its historic heart, known as the Walled City, you will find charming plazas, cobblestone streets, and magnificent colonial buildings painted in vibrant colors.
                                </p>
                                <p class="fs-xl-3 fs-p-md text-secondary">
                                    The finest way to experience Cartagena is on foot, allowing yourself to wander through its maze of narrow streets and lush, verdant plazas. We recommend staying within the Walled City, where everything lies just a short stroll away. The constant melody of live music, paired with an exquisite culinary scene and character-filled bars, infuses every corner with the city’s vibrant spirit.
                                </p>
                            </div>
                            <h2 class="font-titulo fs-xl-1-md fs-2 text-secondary">Suggested by Us</h2>
                            <div class="px-xl-5">
                                <ul class="pt-xl-5 pt-3 px-3">
                                    <li class="d-flex gap-3 align-items-center py-xl-3 px-xl-4 py-2 px-2 clickeable border-0 border-bottom" style="cursor: pointer;">
                                        <span class="icono"><img class="d-block w-100" src="<?php echo THEME_IMG; ?>icons/icon-travel-info.svg" alt="Home 1"></span>
                                        <a class="fs-xl-2 text-secondary ls-0" href="<?php echo get_multilingual_page_link('cartagena', 'travel-info'); ?>">TRAVEL INFO</a>
                                    </li>
                                    <li class="d-flex gap-3 align-items-center py-xl-3 px-xl-4 py-2 px-2 clickeable border-0 border-bottom" style="cursor: pointer;">
                                        <span class="icono"><img class="d-block w-100" src="<?php echo THEME_IMG; ?>icons/icon-hotel.svg" alt="Home 1"></span>
                                        <a class="fs-xl-2 text-secondary ls-0" href="<?php echo get_multilingual_page_link('cartagena', 'hotels'); ?>">HOTELS</a>
                                    </li>
                                    <li class="d-flex gap-3 align-items-center py-xl-3 px-xl-4 py-2 px-2 clickeable border-0 border-bottom" style="cursor: pointer;">
                                        <span class="icono"><img class="d-block w-100" src="<?php echo THEME_IMG; ?>icons/icon-restaurants.svg" alt="Home 1"></span>
                                        <a class="fs-xl-2 text-secondary ls-0" href="<?php echo get_multilingual_page_link('cartagena', 'restaurants'); ?>">RESTAURANTS</a>
                                    </li>
                                    <li class="d-flex gap-3 align-items-center py-xl-3 px-xl-4 py-2 px-2 clickeable border-0 border-bottom" style="cursor: pointer;">
                                        <span class="icono"><img class="d-block w-100" src="<?php echo THEME_IMG; ?>icons/icon-brunch.svg" alt="Home 1"></span>
                                        <a class="fs-xl-2 text-secondary ls-0" href="<?php echo get_multilingual_page_link('cartagena', 'brunch'); ?>">BRUNCH &amp; DESSERTS</a>
                                    </li>
                                    <li class="d-flex gap-3 align-items-center py-xl-3 px-xl-4 py-2 px-2 clickeable border-0 border-bottom" style="cursor: pointer;">
                                        <span class="icono"><img class="d-block w-100" src="<?php echo THEME_IMG; ?>icons/icon-bars.svg" alt="Home 1"></span>
                                        <a class="fs-xl-2 text-secondary ls-0" href="<?php echo get_multilingual_page_link('cartagena', 'bars'); ?>">BARS &amp; PUBS</a>
                                    </li>
                                    <li class="d-flex gap-3 align-items-center py-xl-3 px-xl-4 py-2 px-2 clickeable border-0 border-bottom" style="cursor: pointer;">
                                        <span class="icono"><img class="d-block w-100" src="<?php echo THEME_IMG; ?>icons/icon-beauty-salons.svg" alt="Home 1"></span>
                                        <a class="fs-xl-2 text-secondary ls-0" href="<?php echo get_multilingual_page_link('cartagena', 'beauty'); ?>">BEAUTY SALONS</a>
                                    </li>
                                    <li class="d-flex gap-3 align-items-center py-xl-3 px-xl-4 py-2 px-2 clickeable border-0" style="cursor: pointer;">
                                        <span class="icono"><img class="d-block w-100" src="<?php echo THEME_IMG; ?>icons/icon-boutiques.svg" alt="Home 1"></span>
                                        <a class="fs-xl-2 text-secondary ls-0" href="<?php echo get_multilingual_page_link('cartagena', 'boutiques'); ?>">BOUTIQUES</a>
                                    </li>
                                    <!-- <li class="d-flex gap-3 align-items-center py-xl-3 px-xl-4 py-2 px-2 clickeable border-0" style="cursor: pointer;">
                                        <span class="icono"><img class="d-block w-100" src="<?php echo THEME_IMG; ?>icons/icon-thinks.svg" alt="Home 1"></span>
                                        <a class="fs-xl-2 text-secondary ls-0 uppercase" href="<?php echo get_multilingual_page_link('cartagena', 'thinks'); ?>">things to do in the city</a>
                                    </li> -->
                                </ul>
                            </div>
                        </div>
                        <div class="py-4"></div>
                    </div>
                </div>
            </div>
            <div class="py-5"></div>
        </div>
     </section>

     <!-- Places to Visit -->
     <section class="position-relative customSectionBox customSectionBoxGreen">
        <div class="py-4"></div>
        <div class="container">
            <div class="row">
                <div class="text-center">
                    <h2 class="font-titulo fs-xl-1-lg fs-1 text-secondary">Places to Visit</h2>
                </div>
            </div>
        </div>
        <?php get_template_part('template-parts/components/component-swiper-place'); ?>
        <div class="py-xl-5 py-2"></div>
     </section>

     <!-- Map -->
      <section>
        <?php get_template_part('template-parts/components/component-map'); ?>
      </section>

     <!-- Modal -->
     <?php get_template_part('template-parts/components/component-modal'); ?>

</main>

<?php 
get_footer();
?>