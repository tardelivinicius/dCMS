<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CMSController extends Controller
{       
    public function index()
    {
        return view('admin/cms');
    }

    public function users()
    {
        return view('admin/users');
    }
}
