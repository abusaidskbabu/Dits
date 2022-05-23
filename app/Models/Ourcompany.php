<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class ourcompany extends Sximo  {
	
	protected $table = 'dit_sacrifices';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT dit_sacrifices.* FROM dit_sacrifices  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE dit_sacrifices.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
