<?php
namespace app\admin\model;

use think\Model;
use think\Request;

class J_store_business_info extends Model
{
	protected $model;
	
	public function check(){
		$request = Request::instance();
		$this->model = $request->controller();
		return J_store::get(10)->getData();
	
	}
}