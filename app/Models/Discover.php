<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class discover extends Sximo  {
	
	protected $table = 'dit_discover';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT dit_discover.* FROM dit_discover  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE dit_discover.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
