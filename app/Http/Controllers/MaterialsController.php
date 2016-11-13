<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class MaterialsController extends Controller
{
    public function index()
    {
    	return view('public.materials.index');
    }
}
