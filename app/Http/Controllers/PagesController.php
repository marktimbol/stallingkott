<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function home()
    {
    	return view('public.home');
    }

    public function about()
    {
    	return view('public.about');
    }

    public function president()
    {
    	return view('public.president');
    }

    public function company()
    {
    	return view('public.company');
    }

    public function contact()
    {
        return view('public.contact');
    }
}
