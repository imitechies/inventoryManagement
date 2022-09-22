<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class manageCategory extends Controller
{
    public function home()
    {
        // return view('admin.catogery.manage-catogery');
        return view('admin/layout/master-dashboard');
    }

    public function ManageCatrgory()
    {
        // return view('admin.catogery.manage-catogery');
        return view('admin/catogery/manage-catogery');
    }

}
