<?php

namespace App\Http\Controllers;
use App\Models\Trainings;

use Illuminate\Http\Request;

class Training extends Controller
{
    public $datas;
    public function show()
    {
        $datas = Trainings::all();
        return view('training',['datas'=>$datas]);
    }
}
