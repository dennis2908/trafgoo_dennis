<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\models\customer_just_say;

use Redirect;

use Session;

class CustomerJustSayController extends Controller
{
    public function submit_customer_just_say(Request $request)
    {
		$customer_just_say	= new customer_just_say;
		//dd($request->post());
		$customer_just_say->insert_customer_just_say($request->post());
        return redirect()->back()->with('message', 'We will contact you soon!');
    }
}
