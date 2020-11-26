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
        return view('index2');
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
	
	public function goToPage(Request $request)
    {
		//dd($this->user->Session::has('user'));
		$page = $request->post('page');
		$arr = ['courses2','teacher2','ebook2','blog2','2Dadobeanimation2','3Dadobeanimation2','mathstut2','mathstut1','mathstut3'
		,'about2','affiliatemarketing2','amazonkindle2','anti-agingspa2','autocad2','baking2','barbing2','mathstut12','mathstut22'
		,'blogging2','chinese2','computerhardware2','coreldraw2','courses2','css2','customclothing2','mathematics_102'
		,'dropshipping2','ebook2','fitnessinstructor2','fitnessinstructor2','html2','interiordecor2','makeup2','mathematics_201'
		,'mathstut32','officemanagement2','photographer2','photoshop2','productionperfume2','professional_photographer','programming_html'
		,'shoemanufacturing2','solarenergy2','teacher2','title','videoediting2','wallpaper2','youtuber2'];
		if($page){
			if (in_array($request->post('page'),$arr))
			{
				if($this->user->Session::has('user')){
				   return view($page);	
				}else{
				   return view('login');	
				}
				
			}
			else{
			   return view($page);	
			}
			
		}
		else
			return redirect()->route('index');
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
	
	public function deleteData(Request $request)
    {
		return response()->json($this->user->deleteData($request));
    }
	
	public function dologin(Request $request)
    {
		
		if($this->user->ceklogin($request)){
			$this->user->Session::put('user', $request->username);
			$this->user->Session::put('password', $request->password);
		}
		
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