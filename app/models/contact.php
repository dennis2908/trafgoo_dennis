<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class contact extends MyModel
{
    public $table = 'contacts';	
	
    protected $fillable = [
        'fname', 'lname' ,'email' ,'subject' , 'message'
    ];
	
	public function getMessage($post_data=array()){  
		return $this->DB::table($this->table)->get();
		//dd(DB::getQueryLog());
	}
	
	public function deleteDataMessage($post_data=array()){
		return $this->DB::table($this->table)->delete($post_data->id);
		//dd(DB::getQueryLog());
	}
	
	public function savemessage($post_data=array()){
		$data = $post_data->post();
		unset($data['_token']);
		unset($data['id']);
		return $this->DB::table($this->table)->insert($data);
		//dd(DB::getQueryLog());
	}
	
	public function updatemessage($post_data=array()){
		$data = $post_data->post();
		unset($data['_token']);
		return $this->DB::table($this->table)->where('id',$data['id'])->update($data);
		//dd(DB::getQueryLog());
	}
}
