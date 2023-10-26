<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->group('admin', ['filter' => 'authadmin'], function($routes){
    $routes->get('dashboard', 'UIAdminController::index');
    $routes->get('product/settings', 'UIAdminController::ui_product_settings');
    $routes->get('product/catalog','UIAdminController::ui_product_catalog');
    $routes->get('order/settings','UIAdminController::ui_order_settings');
    $routes->get('order/view','UIAdminController::ui_order_view');
    $routes->get('order/returns','UIAdminController::ui_return');
    $routes->get('customer/account','UIAdminController::ui_customer_account');
    $routes->get('user/account','UIAdminController::ui_user_account');
    $routes->get('inventory','UIAdminController::ui_inventory');
    $routes->get('promotions','UIAdminController::ui_promotions');
    $routes->get('settings','UIAdminController::ui_admin_settings');

    $routes->post('user/account/table', 'UIAdminController::ui_user_table');
    $routes->post('user/account/add', 'UIAdminController::ui_user_add');
});
$routes->group('login', function($routes){
    $routes->get('users', 'LoginUsersController::index');

    $routes->post('auth', 'LoginUsersController::auth');
    $routes->get('logout', 'LoginUsersController::logout');
});
$routes->group('cashier', ['filter' => 'authcashier'], function($routes){
    $routes->get('home', 'UICashierController::index');
    $routes->get('inventory', 'UICashierController::ui_cashier_inventory');
    $routes->get('orders', 'UICashierController::ui_cashier_orders');
    $routes->get('pos', 'UICashierController::ui_cashier_pos');
});

// $routes->get('pass', 'LoginUsersController::insertPassword');


