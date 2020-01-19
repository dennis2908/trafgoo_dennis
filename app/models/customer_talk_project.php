<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

use DB;

class customer_talk_project extends Model
{
    protected $table = 'customer_talk_projects';
    protected $fillable = [
        'full_name', 'email','phone','company_name','description' , 'where_find_us' ,'budget' , 'website_url'
    ];
	
	public function insert_customer_talk_project($post_data=array()){
		unset($post_data['_token']);
		return DB::table($this->table)->insert($post_data);
		//dd(DB::getQueryLog());
	}
}
