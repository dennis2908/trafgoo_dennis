<?php

namespace App\Http\Controllers;
use App;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use View;
use Session;
use Redirect;

class HomeController extends Controller
{
	
    public function index(Request $request)
    {
        return view('index');
    } 
	
	public function aboutus(Request $request)
    {
			
        return view('aboutus');
    }
	
	public function buypin(Request $request)
    {
			
        return view('buypin');
    }
	
	public function tq(Request $request)
    {
		
        return view('tq');
    }
	public function tutorial(Request $request)
    {
		
        return view($request->post('page'));
    }
	
	public function ebook(Request $request)
    {
		
        return view('ebook');
    }
	
	public function contactus(Request $request)
    {
		
        return view('contactus');
    }
	
	public function adminsite(Request $request)
    {
		
        return view('template/index');
    }
	
	public function lang($locale)
    {
	   Session::put('locale', $locale);
	   return redirect()->back();
    }

}	