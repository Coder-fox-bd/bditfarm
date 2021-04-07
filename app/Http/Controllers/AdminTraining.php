<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminTraining extends Controller
{
    public function trainingView()
    {
        return view('admin-training');
    }
}
