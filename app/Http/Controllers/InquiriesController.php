<?php

namespace App\Http\Controllers;

use App\Events\UserSubmitsAnInquiry;
use App\Http\Requests;
use App\Inquiry;
use Illuminate\Http\Request;

class InquiriesController extends Controller
{
    public function store(Request $request)
    {
    	$inquiry = Inquiry::create($request->all());
    	event( new UserSubmitsAnInquiry($inquiry) );

    	flash()->success('You query has been successfully sent. We will get back to you soon. Thanks!')
    	return back();
    }
}
