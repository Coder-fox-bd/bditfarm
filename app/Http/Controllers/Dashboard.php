<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Dashboard extends Controller
{   
    public function dashboardView()
    {
        $current = time();
        $initial_date = strtotime("2021-1-1"); //You will have to fix this
        $datediff = $current - $initial_date;
        $num_of_days = floor($datediff / (60 * 60 * 24));
        return view('dashboard')->with('days', $num_of_days);
    }
}
