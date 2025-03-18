<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index()
    {

        $trains = Train::where('departure_time', '>=', now())->orderby('departure_time')->get();


        return view('home', compact('trains'));
    }
}
