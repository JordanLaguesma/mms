<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Users;
use monken\TablesIgniter;

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
    // Users
    public function ui_user_account(){
        return view('frontend/admin/user/users');
    }
    public function ui_user_table(){
        $model = new Users();
        $table = new TablesIgniter($model->initTable());
        return $table->getDatatable();
    }
    public function ui_user_add(){
        $error = 1;
        $model = new Users();
        $fullname_error = '';
        $role_error     = '';
        $username_error = '';
        $email_error    = '';
        $password_error = '';
        $rules = $this->validate([
            'fullname' => 'required',
            'role'     => 'required',
            'username' => 'required',
            'email'    => 'required|is_unique[users.email]',
            'password' => 'required',
        ]);
        if(!$rules) {
            $validation = \Config\Services::validation();
            if($validation->getError('fullname')) {
                $fullname_error = $validation->getError('fullname');
            }
            if($validation->getError('role')) {
                $role_error = $validation->getError('role');
            }
            if($validation->getError('username')) {
                $username_error = $validation->getError('username');
            }
            if($validation->getError('email')) {
                $email_error = $validation->getError('email');
            }
            if($validation->getError('password')) {
                $password_error = $validation->getError('password');
            }
        } else {
            $error = 0;
            $data = [
                'fullname' => $this->request->getVar('fullname'),
                'role'     => $this->request->getVar('role'),
                'username' => $this->request->getVar('username'),
                'email'    => $this->request->getVar('email'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
            ];
            $model->save($data);
        }
        $output = array (
            'error'          => $error,
            'fullname_error' => $fullname_error,
            'role_error'     => $role_error,
            'username_error' => $username_error,
            'email_error'    => $email_error,
            'password_error' => $password_error,
        );
        echo json_encode($output);
    }
    // Inventory
    public function ui_inventory(){
        return view('frontend/admin/inventory/inventory');
    }
    public function ui_promotions(){
        return view('frontend/admin/promotions/promotions');
    }
    public function ui_return(){
        return view('frontend/admin/orders/returns');
    }
    public function ui_admin_settings(){
        return view('frontend/admin/settings/settings');
    }

}
