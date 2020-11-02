<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class pengguna extends MyModel
{
    public $table = 'penggunas';	
	
    protected $fillable = [
        'name', 'password'
    ];
	
	public function cekLogin($post_data=array()){
		unset($post_data->_token);
		return $this->DB::table($this->table)->where('username',$post_data->username)->where('password',$post_data->password)->first();
		//dd(DB::getQueryLog());
	}
	public function getPengguna($post_data=array()){
		return $this->DB::table($this->table)->get();
		//dd(DB::getQueryLog());
	}
	
	public function updateuser($post_data=array()){
		$data = $post_data->post();
		unset($data['_token']);
		return $this->DB::table($this->table)->where('id',$data['id'])->update($data);
		//dd(DB::getQueryLog());
	}
	public function saveuser($post_data=array()){
		$data = $post_data->post();
		unset($data['_token']);
		unset($data['id']);
		return $this->DB::table($this->table)->insert($data);
		//dd(DB::getQueryLog());
	}
}
