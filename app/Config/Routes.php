<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->group('admin', function($routes){
    $routes->get('dashboard', 'UIAdminController::index');
    $routes->get('product/settings', 'UIAdminController::ui_product_settings');
    $routes->get('product/catalog','UIAdminController::ui_product_catalog');
    $routes->get('order/settings','UIAdminController::ui_order_settings');
    $routes->get('order/view','UIAdminController::ui_order_view');
    $routes->get('customer/account','UIAdminController::ui_customer_account');
    $routes->get('user/account','UIAdminController::ui_user_account');
    $routes->get('inventory','UIAdminController::ui_inventory');
});


