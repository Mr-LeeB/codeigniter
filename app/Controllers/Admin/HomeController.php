<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class HomeController extends BaseController
{
    public function dashboard(): string
    {
        $data = [];

        $data = $this->loadMasterLayout($data);

        $data['title'] = 'Dashboard';

        return view('admin/pages/dashboard', $data);
    }
}
