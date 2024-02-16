<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Train;

class TrainController extends Controller
{
    public function index(){
        
        $trains = Train::where('departure_time', '=', now())->get();;
        return view('home', compact('trains'));
    }
}
