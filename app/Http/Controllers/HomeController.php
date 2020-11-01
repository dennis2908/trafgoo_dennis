<?php

namespace App\Http\Controllers;
use App;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use View;
use Redirect;
use Yajra\Datatables\Datatables;
use App\models\pengguna;

class HomeController extends Controller
{
	public function __construct()
    {
		$this->user = new \App\models\pengguna();
    }
	
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
	
	public function saveuser(Request $request)
    {
		return response()->json($this->user->saveuser($request));
    }
	
	public function dologin(Request $request)
    {
		
		if($this->user->ceklogin($request))
			$this->user->Session::put('user', $request->username);
        return Redirect()->route('index');
    }
	
	public function login()
    {
		
        return view('login');
    }
	
	
	public function adminsite(Request $request)
    {
		
        return view('template/index');
    }
	
	public function dmadmin(Request $request)
    {
		
        return view('datauser');
    }

	public function userData()
    {
        return Datatables::of($this->user->getPengguna())->make(true);
    }
	
	public function logout()
    {
	   $this->user->Session::forget('user');
	   return redirect()->back();
    }

}	