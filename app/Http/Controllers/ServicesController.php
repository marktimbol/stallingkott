<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ServicesController extends Controller
{
    public function index()
    {
    	return view('public.services.index');
    }
}
