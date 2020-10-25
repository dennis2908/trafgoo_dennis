<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

use DB;

class customer_just_say extends Model
{
	protected $table = 'customer_just_says';
    protected $fillable = [
        'full_name', 'email','phone','company_name','description'
    ];
	
	public function ceklogin($post_data=array()){
		unset($post_data['_token']);
		return DB::table($this->table)->insert($post_data);
		//dd(DB::getQueryLog());
	}
}
