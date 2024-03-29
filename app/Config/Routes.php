<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
// $routes->get('/', 'Home::index');
$routes->get('/', 'Welcome::welcome_page');
$routes->get('/register', 'Welcome::register_page');
$routes->post('/register', 'Usuario::register');
$routes->get('/login', 'Welcome::login_page');
$routes->post('/login', 'Usuario::login');

// $routes->get('/prueba', 'Welcome::prueba');


$routes->post('/productos/form_registrar', 'Producto::registrar');
$routes->get('/productos/form_registrar', 'Producto::form_registro');





$routes->get('/main', 'Home::index');
$routes->get('/mi_perfil', 'Perfil::perfil');
$routes->get('/tienda', 'Tienda::tienda_main');

$routes->get('/tienda/herramientas_manuales', 'Tienda::main_hm');
$routes->get('/tienda/herramientas_manuales/alicates_y_pinzas', 'H_Manuales::alicates_pinzas');
$routes->get('/tienda/herramientas_manuales/destornilladores', 'H_Manuales::destornilladores');
$routes->get('/tienda/herramientas_manuales/martillos', 'H_Manuales::martillos');


$routes->get('/tienda/equipo_de_soldadura', 'Tienda::main_es');
$routes->get('/tienda/equipo_de_soldadura/accesorios', 'E_Soldadura::accesorios');
$routes->get('/tienda/equipo_de_soldadura/arco_manual', 'E_Soldadura::arco_manual');
$routes->get('/tienda/equipo_de_soldadura/mig', 'E_Soldadura::mig');


$routes->get('/tienda/herramientas_electricas', 'Tienda::main_he');
$routes->get('/tienda/herramientas_electricas/atornilladores', 'H_Electricas::atornilladores');
$routes->get('/tienda/herramientas_electricas/taladros', 'H_Electricas::taladros');


$routes->get('/tienda/equipo_jardineria', 'Tienda::main_ej');
$routes->get('/tienda/equipos_medicion_nivelacion', 'Tienda::main_emn');


$routes->get('/Acerca_de', 'Acercade::acercade');


/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
