<?php
// Iniciar sesión al principio, antes de cualquier HTML
if (!session_id()) {
    session_start();
}

// Verificar si el usuario ya está autenticado
global $usuario_autenticado, $error_password;
$usuario_autenticado = isset($_SESSION['usuario_autenticado']) && $_SESSION['usuario_autenticado'] === true;
$error_password = false;

// Procesar formulario de contraseña
if (isset($_POST['password_access'])) {
    $password_correcta = 'Cartagena2026'; // Cambia esta contraseña
    
    if ($_POST['password_access'] === $password_correcta) {
        $_SESSION['usuario_autenticado'] = true;
        $usuario_autenticado = true;
        // Limpiar cualquier error previo
        unset($_SESSION['error_password']);
    } else {
        $error_password = 'Contraseña incorrecta';
        $_SESSION['error_password'] = $error_password;
    }
} else {
    // Verificar si hay error previo en sesión
    $error_password = isset($_SESSION['error_password']) ? $_SESSION['error_password'] : false;
}
?>
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

  <!-- Modal de Contraseña -->
  <div class="modal fade" id="modalPassword" tabindex="-1" aria-labelledby="modalPasswordLabel" aria-hidden="true" data-bs-backdrop="true" data-bs-keyboard="false" style="z-index: 9999;">
    <div class="py-4"></div>
      <div class="modal-dialog modal-dialog-centered">
          <div class="customSectionBox modal-content px-xl-5 p-3 rounded-3">
              <div class="modal-header border-0 p-0">
                  <h2 class="font-titulo fs-xl-1-md fs-2 text-secondary w-100 text-center" id="modalPasswordLabel">Welcome / Bienvenido</h2>
              </div>
              <div class="modal-body p-0 pb-3">
                  <form method="POST" id="formPassword">
                      <div class="mb-3 text-center">
                          <label for="password_access" class="d-block fs-xl-2 text-center text-secondary" style="line-height: 1.2">
                            Please enter the password below.
                            <span class="line line--medium my-3"></span>
                          </label>
                          <label for="password_access" class="d-block fs-xl-2 text-center text-secondary" style="line-height: 1.2">Por favor, ingrese la contraseña a continuación</label>
                          <div class="row mt-4">
                            <div class="col-12 col-xl-5 mx-auto">
                              <input type="password" 
                                    class="form-control bg-white rounded-0 border-0 mb-3 py-3 px-3" 
                                    id="password_access" 
                                    name="password_access" 
                                    required 
                                    autocomplete="off"
                                    placeholder="Cartagena2026">
                              <?php if (isset($error_password)): ?>
                                  <div class="text-danger mt-2"><?php echo $error_password; ?></div>
                              <?php endif; ?>
                            </div>
                          </div>
                      </div>
                      <div class="d-flex justify-content-center">
                          <button type="submit" class="btn btn-primary btn-medium border-0 bg-secondary text-white text-uppercase fs-xl-2" id="btnAcceder">
                              <span class="btn-text">Enter</span>
                              <span class="spinner-border spinner-border-sm d-none" role="status" aria-hidden="true"></span>
                          </button>
                      </div>
                  </form>
              </div>
          </div>
      </div>
  </div>

  <!-- Header -->
  <header class="position-fixed top-0 left-0 w-100 mt-3 bg-white-50">
    <div class="">
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
              <li class="d-flex justify-content-center align-items-center"><a class="fs-xl-5 text-primary letter-spacing-xl-4" href="/#wedding">WEDDING</a></li>
              <li class="d-flex justify-content-center align-items-center"><a class="fs-xl-5 text-primary letter-spacing-xl-4" href="/#events">EVENTS</a></li>
              <li class="d-flex justify-content-center align-items-center"><a class="font-titulo fs-xl-1-md fs-3 text-secondary" href="/">Monica & Eric</a></li>
              <li class="d-flex justify-content-center align-items-center"><a class="fs-xl-5 text-primary letter-spacing-xl-4" href="/#cartagena">CARTAGENA</a></li>
              <li class="d-flex justify-content-center align-items-center">
                <a class="fs-xl-5 text-primary letter-spacing-xl-4" href="/#rsvp">R.S.V.P.</a>
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
          <li class="d-flex justify-content-center align-items-center"><a class="fs-xl-5 text-primary letter-spacing-xl-4" href="/#wedding">WEDDING</a></li>
          <li class="d-flex justify-content-center align-items-center"><a class="fs-xl-5 text-primary letter-spacing-xl-4" href="/#events">EVENTS</a></li>
          <li class="d-flex justify-content-center align-items-center"><a class="font-titulo fs-2 text-primary" href="/">Monica & Eric</a></li>
          <li class="d-flex justify-content-center align-items-center"><a class="fs-xl-5 text-primary letter-spacing-xl-4" href="/#cartagena">CARTAGENA</a></li>
          <li class="d-flex justify-content-center align-items-center">
            <a class="fs-xl-5 text-primary letter-spacing-xl-4" href="/#rsvp">R.S.V.P.</a>
          </li>
        </ul>
      </div>
    </div>
  </section>

  <!-- Whatsapp -->
  <?php mostrar_boton_whatsapp(); ?>
  <!-- Fin Whatsapp -->

   <!-- Script para mostrar modal de contraseña automáticamente -->
   <?php if (!$usuario_autenticado): ?>
  <script>
    console.log('Usuario NO autenticado - debe mostrar modal');
    
    // Bloquear scroll del body cuando no está autenticado
    document.body.style.overflow = 'hidden';
    
    // Función para mostrar el modal
    function mostrarModalPassword() {
      console.log('Intentando mostrar modal de contraseña...');
      const modalElement = document.getElementById('modalPassword');
      
      if (modalElement) {
        console.log('Modal element encontrado');
        // Verificar si Bootstrap está disponible
        if (typeof bootstrap !== 'undefined') {
          console.log('Bootstrap disponible, usando bootstrap.Modal');
          const modalPassword = new bootstrap.Modal(modalElement);
          modalPassword.show();
        } else {
          console.log('Bootstrap no disponible, intentando jQuery...');
          // Fallback usando jQuery si Bootstrap no está disponible
          if (typeof $ !== 'undefined') {
            console.log('jQuery disponible, usando jQuery modal');
            $('#modalPassword').modal('show');
          } else {
            console.log('Ni Bootstrap ni jQuery disponibles, usando CSS directo');
            // Último recurso: mostrar usando clases CSS
            modalElement.classList.add('show');
            modalElement.style.display = 'block';
            modalElement.style.zIndex = '9999';
            document.body.classList.add('modal-open');
            // Agregar backdrop manualmente con z-index correcto
            const backdrop = document.createElement('div');
            backdrop.className = 'modal-backdrop fade show';
            backdrop.style.zIndex = '9998';
            backdrop.style.backgroundColor = 'rgba(0, 0, 0, 0.3)';
            document.body.appendChild(backdrop);
          }
        }
      }
    }

    // Función para manejar el envío del formulario
    document.addEventListener('DOMContentLoaded', function() {
      const form = document.getElementById('formPassword');
      if (form) {
        form.addEventListener('submit', function(e) {
          // Mostrar spinner
          const btnAcceder = document.getElementById('btnAcceder');
          const btnText = btnAcceder.querySelector('.btn-text');
          const spinner = btnAcceder.querySelector('.spinner-border');
          
          btnText.textContent = 'Loading...';
          spinner.classList.remove('d-none');
          btnAcceder.disabled = true;
        });
      }
    });

    // Intentar mostrar el modal cuando el DOM esté listo
    if (document.readyState === 'loading') {
      document.addEventListener('DOMContentLoaded', mostrarModalPassword);
    } else {
      // Si el DOM ya está listo, mostrar inmediatamente
      mostrarModalPassword();
    }

    // También intentar después de que la ventana se haya cargado completamente
    window.addEventListener('load', function() {
      setTimeout(mostrarModalPassword, 100);
    });
  </script>
  <?php else: ?>
  <script>
    // Usuario autenticado - restaurar scroll del body
    document.body.style.overflow = 'auto';
  </script>
  <?php endif; ?>

  <!-- TranslatePress Language Detection for RSVP -->
  <script>
    // Detectar idioma actual de TranslatePress
    <?php 
    global $TRP_LANGUAGE;
    $current_language = $TRP_LANGUAGE ? $TRP_LANGUAGE : 'en_US'; // fallback a inglés
    ?>
    window.rsvpLanguageData = {
      currentLanguage: '<?php echo $current_language; ?>',
      isSpanish: <?php echo ($current_language === 'es_CO') ? 'true' : 'false'; ?>,
      isEnglish: <?php echo ($current_language === 'en_US') ? 'true' : 'false'; ?>
    };
  </script>