<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MyModel extends Model
{
	public $DB,$messages,$Auth,$Client,$Session,$Crypt,$code_area;
	
	
	function __construct()
	{
		 $this->messages['data_found'] = "Data Already Exists";
		 $this->messages['userOrPasswordWrong'] = "Incorrect Username Or Password";
		 $this->messages['AddSucceed'] = "Add Successfully";
		 $this->messages['LoginSucceed'] = "Login Successfully";
		 $this->messages['WrongToken'] = "Incorrect Token";
		 $this->DB = new \DB();	
		 $this->Auth = new \Auth();	
		 $this->Response = new \Response();
		 $this->Session = new \Session();
	}

}
