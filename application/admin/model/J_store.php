<?php
	
	namespace app\admin\model;
	
	use think\Db;
	use think\Model;
	use think\Request;
	
	class J_store extends Model
	{
		protected $model;
		
		public function check($id)
		{
			//return J_store::get($id)->getData();
			$store = Db::table('j_store s')
				//->alias('s')
				->join('j_store_business_info si','s.id=si.storeid')
				->where('s.id='.$id)
				->find();
			return $store;
		}
	}