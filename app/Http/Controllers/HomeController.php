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
	
	public function portfolio(Request $request)
    {
		
        return view('portfolio');
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