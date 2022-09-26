<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManageCategory extends Controller
{
    public function home()
    {
        return view('admin/catogery/manage-catogery-list');
    }
}
