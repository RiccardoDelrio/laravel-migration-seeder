<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;

class PageController extends Controller
{
    public function index()
    {
        $trains = Train::orderBy('orario_arrivo')->get();
        return view("welcome", compact("trains"));
    }

}
