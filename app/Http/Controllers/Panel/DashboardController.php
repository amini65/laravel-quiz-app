<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{

    public function dashboard()
    {

        return view('panel.index');
    }


}
