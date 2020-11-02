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
		if($request->id == ""){
			$result = $this->user->saveuser($request);
		}
		else{
			$result = $this->user->updateuser($request);
		}
		return response()->json($result);
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
	
	public function getDataById(Request $request)
    {
		return response()->json($this->user::find($request->post('id')));
		
        return view('datauser');
    }

	public function userData()
    {
        return Datatables::of($this->user->getPengguna())->addColumn('action',function ($data){
                return $this->getActionColumn($data);
            })->make(true);
    }
	
	protected function getActionColumn($data): string
    {
        return "<i class='btn btn-info' onclick=getData('$data->id')>Edit</i>&nbsp;<i class='btn btn-danger' onclick=deleteData('$data->id')>Delete</i>";
    }
	
	public function logout()
    {
	   $this->user->Session::forget('user');
	   return redirect()->back();
    }

}	