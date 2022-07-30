<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class childservice extends Sximo  {
	
	protected $table = 'child_service';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT child_service.* FROM child_service  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE child_service.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
