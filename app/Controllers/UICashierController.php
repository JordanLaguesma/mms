<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class UICashierController extends BaseController
{
    public function index()
    {
        return view('frontend/cashier/index');
    }
    public function ui_cashier_inventory(){
        return view('frontend/cashier/inventory/inventory');
    }
    public function ui_cashier_orders(){
        return view('frontend/cashier/orders/orders');
    }
    public function ui_cashier_pos(){
        return view('frontend/cashier/pos/pos');
    }
}
