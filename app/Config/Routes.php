<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

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
$routes->get('/', 'ControladorLogin::IniciarSesion');
//libros
$routes->get('/ListarLibros', 'ControladorLibros::ListarLibros');
$routes->get('/CrearLibros', 'ControladorLibros::CrearLibros');
$routes->post('/ingresar', 'ControladorLibros::ingresar');
$routes->get('/obtenerNombre/(:any)', 'ControladorLibros::obtenerNombre/$1');
$routes->get('/eliminar/(:any)', 'ControladorLibros::eliminar/$1');
$routes->post('/actualizar', 'ControladorLibros::actualizar');
//para la tabla intermedia
$routes->get('/generarLibro', 'ControladorReportes::generarLibro');
$routes->post('/solicitar', 'ControladorReportes::solicitar');
$routes->get('/SolicitarLibros', 'ControladorReportes::SolicitarLibros');
$routes->get('/generarLibro2', 'ControladorReportes::generarLibro2');
//para ver estudiantes
$routes->get('/VerEstudiante', 'ControladorEstudiantes::VerEstudiante');
$routes->get('/CrearEstudiante', 'ControladorEstudiantes::CrearEstudiante');
$routes->post('/ingresarEst', 'ControladorEstudiantes::ingresarEst');
$routes->get('/obtenerNombreEst/(:any)', 'ControladorEstudiantes::obtenerNombreEst/$1');
$routes->get('/eliminarEst/(:any)', 'ControladorEstudiantes::eliminarEst/$1');
$routes->post('/actualizarEst', 'ControladorEstudiantes::actualizarEst');
//para ver el login
$routes->get('/inicio', 'ControladorLogin::inicio');
$routes->get('/inicio2', 'ControladorLogin::inicio2');
$routes->get('/IniciarSesion', 'ControladorLogin::IniciarSesion');
$routes->post('/login', 'ControladorLogin::login');
$routes->get('/salir', 'ControladorLogin::salir');

//controlador de apis
$routes->get('/datos', 'ControladorDatos::mostrarDatos');
$routes->get('/Apipees', 'ControladorApi::index');
$routes->resource('controladorApi');//para agarrrar la api creada con metodo get
//para ver el css y js
$route['profiler']="Profiler_controller";
$route['profiler/disable']="Profiler_controller/disable";
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
