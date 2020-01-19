<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\models\customer_talk_project;

use Redirect;

use Session;

class CustomerTalkProjectController extends Controller
{
    public function submit_customer_talk_project(Request $request)
    {
		$customer_talk_project	= new customer_talk_project;
		//dd($request->post());
		$customer_talk_project->insert_customer_talk_project($request->post());
        return redirect()->back()->with('message', 'We will contact you soon!');
    }
}
