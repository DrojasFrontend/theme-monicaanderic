<!DOCTYPE html>
<html lang="en">
<head>
  <title><?=get_the_title()?></title>

  <!-- meta tag header includes -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon.ico" />
  <meta name="robots" content="index, follow">

  <!-- compatability header includes -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo $titulo_principal; ?></title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Cormorant:ital,wght@0,300..700;1,300..700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Belleza&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://use.typekit.net/viz6yyn.css">

  <style>
    h2, h3, h4, h5, h6, a, p, button {
      font-family: "Belleza", sans-serif;
      font-weight: 400;
      font-style: normal;
      
    }
  </style>
  
  <!-- wordpress header includes -->
  <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>

  <!-- Header -->
  <header class="position-fixed top-0 left-0 w-100 mt-3 bg-white-50">
    <div class=""></div>
      <div class="container-fluid gx-0 py-xl-0 pt-2 pb-1 px-2">
        <div class="row gx-0 justify-content-between">
          <div class="col-8 d-flex align-items-center d-xl-none ">
            <div class="text-center">
              <a class="d-block" href="/">
                <h2 class="font-titulo fs-3 text-primary">Monica & Eric</h2>
              </a>
            </div>
          </div>
          <div class="col-12 d-none d-xl-block">
            <ul class="customHeader d-none d-xl-grid gap-5 py-xl-2 py-1 px-2">
              <li class="d-flex justify-content-center align-items-center"><a class="fs-xl-5 text-primary letter-spacing-xl-4" href="<?php echo get_multilingual_link('wedding'); ?>">WEDDING</a></li>
              <li class="d-flex justify-content-center align-items-center"><a class="fs-xl-5 text-primary letter-spacing-xl-4" href="<?php echo get_multilingual_link('events'); ?>">EVENTS</a></li>
              <li class="d-flex justify-content-center align-items-center"><a class="font-titulo fs-xl-1-md fs-3 text-secondary" href="/">Monica & Eric</a></li>
              <li class="d-flex justify-content-center align-items-center"><a class="fs-xl-5 text-primary letter-spacing-xl-4" href="<?php echo get_multilingual_link('cartagena'); ?>">CARTAGENA</a></li>
              <li class="d-flex justify-content-center align-items-center">
                <a class="fs-xl-5 text-primary letter-spacing-xl-4" href="<?php echo get_multilingual_link('rsvp'); ?>">R.S.V.P.</a>
                <?php get_template_part('template-parts/components/icons/componente-traslate'); ?>
              </li>
            </ul>
          </div>
          <div class="col-4 d-flex justify-content-end align-items-center d-xl-none gap-2">
            <?php get_template_part('template-parts/components/icons/componente-traslate'); ?>
            <button type="button" class="pt-1 border-0 bg-transparent p-0 text-primary" style="width: 30px" data-toggle-menu>
              <?php get_template_part('template-parts/components/icons/icon-menu'); ?>
            </button>
          </div>
        </div>
      </div>
    </div>
  </header>
  
  <!-- Fin Header -->

  <section class="customHeaderMobile position-fixed top-0 right-0 w-100 h-100 pt-3 bg-white" data-menu-mobile>
    <div class="container-fluid h-100">
      <div class="row h-100">
        <button class="position-absolute top-0 end-0 mt-2 pe-2 p-0 border-0 bg-transparent" style="width: 40px" data-close-menu>
          <?php get_template_part('template-parts/components/icons/icon-close'); ?>
        </button>
        <ul class="customHeader d-flex flex-column justify-content-center align-items-center gap-5 py-xl-2 py-1">
          <li class="d-flex justify-content-center align-items-center"><a class="fs-xl-5 text-primary letter-spacing-xl-4" href="<?php echo get_multilingual_link('wedding'); ?>">WEDDING</a></li>
          <li class="d-flex justify-content-center align-items-center"><a class="fs-xl-5 text-primary letter-spacing-xl-4" href="<?php echo get_multilingual_link('events'); ?>">EVENTS</a></li>
          <li class="d-flex justify-content-center align-items-center"><a class="font-titulo fs-2 text-primary" href="/">Monica & Eric</a></li>
          <li class="d-flex justify-content-center align-items-center"><a class="fs-xl-5 text-primary letter-spacing-xl-4" href="<?php echo get_multilingual_link('cartagena'); ?>">CARTAGENA</a></li>
          <li class="d-flex justify-content-center align-items-center">
            <a class="fs-xl-5 text-primary letter-spacing-xl-4" href="<?php echo get_multilingual_link('rsvp'); ?>">R.S.V.P.</a>
          </li>
        </ul>
      </div>
    </div>
  </section>

  <!-- Whatsapp -->
  <?php mostrar_boton_whatsapp(); ?>
  <!-- Fin Whatsapp -->