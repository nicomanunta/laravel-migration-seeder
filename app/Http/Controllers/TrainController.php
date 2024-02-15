<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Train;

class TrainController extends Controller
{
    public function index(){
        $today = '2024-02-15';
        $trains = Train::whereDate('departure_time', $today)->get();;
        return view('home', compact('trains'));
    }
}
