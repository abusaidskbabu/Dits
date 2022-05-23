<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class howworkdits extends Sximo  {
	
	protected $table = 'dit_how_work';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT dit_how_work.* FROM dit_how_work  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE dit_how_work.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
