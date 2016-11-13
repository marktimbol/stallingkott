<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ProductsController extends Controller
{
    public function index()
    {
    	return view('public.products.index');
    }

    public function vortex()
    {
 		return view('public.products.vortex');
    }
}
