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
$routes->get('/', 'Home::index');
$routes->get('registrarse', 'Home::signUp');
$routes->get('reset', 'Home::resetPasword');
$routes->post('enviarCorreo','Home::enviarEmail');

$routes->get('autores','Autores::index');
$routes->get('capturarAutor','Autores::formularioRegistro');
$routes->get('editarAutor','Autores::formularioEditar');

$routes->get('editoriales','Editoriales::index');
$routes->get('capturarEditorial','Editoriales::formularioRegistro');
$routes->get('editarEditorial','Editoriales::formularioEditar');


$routes->get('libros','Libros::index');
$routes->get('capturarlibro','Libros::formularioRegistro');
$routes->get('editarlibro','Libros::formularioEditar');

$routes->get('temas','Temas::index');
$routes->get('capturarTema','Temas::formularioRegistro');
$routes->get('editarTema','Temas::formularioEditar');


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
