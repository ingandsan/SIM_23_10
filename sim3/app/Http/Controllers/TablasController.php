<?php

namespace sim\Http\Controllers;

use Illuminate\Http\Request;
use sim\Http\Requests;
use sim\Http\Controllers\Controller;

class TablasController extends Controller
{
    
    Public function tablas ($variable)
    {
    return view ('Tablas.tablas', compact('variable'));
    }
}
