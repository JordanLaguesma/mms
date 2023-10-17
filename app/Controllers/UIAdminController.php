<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class UIAdminController extends BaseController
{
    public function index()
    {
        return view('frontend/admin/index');
    }
    public function ui_product_settings(){
        return view('frontend/admin/product/product_settings');
    }
    public function ui_product_catalog(){
        return view('frontend/admin/product/product_catalog');
    }
    public function ui_order_settings(){
        return view('frontend/admin/orders/order_settings');
    }
    public function ui_order_view(){
        return view('frontend/admin/orders/order_view');
    }
    public function ui_customer_account(){
        return view('frontend/admin/user/customers');
    }
    public function ui_user_account(){
        return view('frontend/admin/user/users');
    }
    public function ui_inventory(){
        return view('frontend/admin/inventory/inventory');
    }
}
