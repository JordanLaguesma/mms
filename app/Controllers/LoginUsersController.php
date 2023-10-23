<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Users;

class LoginUsersController extends BaseController
{
    public function index()
    {
        helper(['form']);
        $data = [];
        return view("frontend/auth/login_users.php", $data);
    }

    public function auth()
    {
        $error = 1;

        $session = session();
        $model = new Users();

        $usermail = $this->request->getVar('authusem');
        $password = $this->request->getVar('authpass');

        $data = $model->where('username', $usermail)->orWhere('email', $usermail)->first();

        if ($data) {
            $pass = $data['password'];
            $verify_pass = password_verify($password, $pass);

            if ($verify_pass) {
                $error = 0;

                $ses_data = [
                    'username' => $data['username'],
                    'password' => $data['password'],
                    'role' => $data['role'],
                    'logged_in' => TRUE,
                ];
                $session->set($ses_data);

                return redirect()->to('admin/dashboard');
            } else {
                $session->setFlashdata('msg', 'Incorrect Password');
                return redirect()->to('login/users');
            }
        } else {
            $session->setFlashdata('msg', 'Incorrect Username or Email');
            return redirect()->to('login/users');
        }

        $output = array(
            'error' => $error,
        );

        echo json_encode($output);
    }
    public function insertPassword()
    {
        $model = new Users();

        $pass = password_hash('admin@admin.com', PASSWORD_DEFAULT);
        $data = [
            'password' => $pass
        ];
        $model->save($data);

        redirect('users');
    }

    public function logout()
    {
        $session = session();

        $session->destroy();
        return redirect()->to('login/users');
    }
}
