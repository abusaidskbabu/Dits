<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class optimalsolutions extends Sximo  {
	
	protected $table = 'dit_optimal_solutions';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT dit_optimal_solutions.* FROM dit_optimal_solutions  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE dit_optimal_solutions.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
