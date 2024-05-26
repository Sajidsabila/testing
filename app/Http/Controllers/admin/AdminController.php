<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Models\Configuration;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    //
    public function index()
    {
        $configurations = Configuration::all();
        $data = ([
            'title' => 'Data Perusahaan Website',
            'configurations' => $configurations
        ]);
        return view('super-admin.dashboard.index', $data);
    }
}
