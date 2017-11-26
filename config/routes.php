<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different URLs to chosen controllers and their actions (functions).
 *
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

use Cake\Core\Plugin;
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;
use Cake\Routing\Route\DashedRoute;

/**
 * The default class to use for all routes
 *
 * The following route classes are supplied with CakePHP and are appropriate
 * to set as the default:
 *
 * - Route
 * - InflectedRoute
 * - DashedRoute
 *
 * If no call is made to `Router::defaultRouteClass()`, the class used is
 * `Route` (`Cake\Routing\Route\Route`)
 *
 * Note that `Route` does not do any inflections on URLs which will result in
 * inconsistently cased URLs when used with `:plugin`, `:controller` and
 * `:action` markers.
 *
 */
Router::defaultRouteClass(DashedRoute::class);

Router::scope('/', function (RouteBuilder $routes) {
    /**
     * Here, we are connecting '/' (base path) to a controller called 'Pages',
     * its action called 'display', and we pass a param to select the view file
     * to use (in this case, src/Template/Pages/home.ctp)...
     */
    //$routes->connect('/', ['controller' => 'Pages', 'action' => 'display', 'home']);

    $routes->connect('/', ['controller' => 'Users', 'action' => 'login']);
    $routes->connect('/login', ['controller' => 'Users', 'action' => 'login']);
    $routes->connect('/signup', ['controller' => 'Users', 'action' => 'signup']);
    $routes->connect('/logout', ['controller' => 'Users', 'action' => 'logout']);
    $routes->connect('/delete', ['controller' => 'Users', 'action' => 'delete']);
    $routes->connect('/users/add', ['controller' => 'Users', 'action' => 'add']);
    $routes->connect('/users/view', ['controller' => 'Users', 'action' => 'view']);
    $routes->connect('/users/index', ['controller' => 'Users', 'action' => 'index']);
    $routes->connect('/users/emergency', ['controller' => 'EmergencyContacts', 'action' => 'index']);
	$routes->connect('/users/emergency/add', ['controller' => 'EmergencyContacts', 'action' => 'add']);
	$routes->connect('/users/emergency/delete', ['controller' => 'EmergencyContacts', 'action' => 'delete']);
    $routes->connect('/users/markers', ['controller' => 'Markers', 'action' => 'index']);
    $routes->connect('/users/locations', ['controller' => 'Locations', 'action' => 'index']);
    $routes->connect('/view', ['controller' => 'Markers', 'action' => 'view']);
    $routes->connect('/dashboard',['controller' => 'Users', 'action' => 'dashboard']);
    $routes->connect('/weather', ['controller' => 'Users','action' => 'weather']);
    $routes->connect('/forecast', ['controller' => 'Users','action' => 'forecast']);
    $routes->connect('/storagemarkers/view', ['controller' => 'Storagemarkers', 'action' => 'view']);
    $routes->connect('/checklist', ['controller' => 'Users', 'action' => 'Emergencychecklist']);
    $routes->connect('/emergencychecklist', ['controller' => 'Emergencychecklist', 'action' => 'index']);
    $routes->connect('/saferoute', ['controller' => 'Users','action' => 'saferoute']);
    $routes->connect('/resources', ['controller' => 'Resources','action' => 'index']);

	$routes->connect('/admin', ['controller' => 'Admin','action' => 'adminlogin']);

    /**
     * ...and connect the rest of 'Pages' controller's URLs.
     */
    $routes->connect('/pages/*', ['controller' => 'Pages', 'action' => 'display']);

    /**
     * Connect catchall routes for all controllers.
     *
     * Using the argument `DashedRoute`, the `fallbacks` method is a shortcut for
     *    `$routes->connect('/:controller', ['action' => 'index'], ['routeClass' => 'DashedRoute']);`
     *    `$routes->connect('/:controller/:action/*', [], ['routeClass' => 'DashedRoute']);`
     *
     * Any route class can be used with this method, such as:
     * - DashedRoute
     * - InflectedRoute
     * - Route
     * - Or your own route class
     *
     * You can remove these routes once you've connected the
     * routes you want in your application.
     */
    $routes->setExtensions(['json']);
    $routes->fallbacks(DashedRoute::class);
});

/**
 * Load all plugin routes. See the Plugin documentation on
 * how to customize the loading of plugin routes.
 */
Plugin::routes();

