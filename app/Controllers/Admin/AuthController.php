<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class AuthController extends BaseController
{
    public function login()
    {
        $data = [];

        $data = $this->loadMasterLayout($data);

        $data['title'] = 'Login';

        return view('admin/pages/auth/sign-in', $data);
    }

    public function signUp()
    {
        $data = [];

        $data = $this->loadMasterLayout($data);

        $data['title'] = 'Sign Up';

        return view('admin/pages/auth/sign-up', $data);
    }

    public function logout()
    {
        return true;
    }

}
