<?php
namespace app\admin\model;

use think\Model;
use think\Request;

class Lzh_borrow_info extends Model
{
	protected $model;
	
	public function check(){
		$request = Request::instance();
		$this->model = $request->controller();
		return Lzh_borrow_info::get(10)->getData();
	
	}
}