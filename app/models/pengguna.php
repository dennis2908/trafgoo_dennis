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
}
