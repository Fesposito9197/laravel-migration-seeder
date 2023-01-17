<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        // $trains = Train::all(); //stampo tutta la lista dei treni
        
        $trains = Train::whereDay('time_of_departure','=' , date('d'))->get();

        return view('welcome', compact('trains'));

    }
}
