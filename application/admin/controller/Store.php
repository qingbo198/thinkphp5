<?php
	
	namespace app\admin\controller;
	
	use think\Db;
	use app\admin\model\J_store;
	use app\admin\model\Lzh_borrow_info;
	use app\admin\model\J_store_business_info;
	use \think\Request;
	use \think\Controller;
	
	class Store extends Controller
	{
		//门店信息
		public function index(Request $request)
		{
			//$user = Db::table('lzh_borrow_info')->where('id',1)->select();
			//实例调用
			
			if ($request->isPost()) {
				
				// $id = $request->param('id');
				// echo 'debug<br><pre>'; print_r($name); exit;
				// $this->assign('name',$name);
				$store = new J_store();
				$result = $store->check(5);
				//echo 'debug<br><pre>'; print_r($result); exit;
				
				$result['matched_info_json'] = (array)json_decode($result['matched_info_json']);
				$result['age_compose_per_json'] = (array)json_decode($result['age_compose_per_json']);
				$result['age_expense_per_json'] = (array)json_decode($result['age_expense_per_json']);
				$result['pandect_info_json'] = (array)json_decode($result['pandect_info_json']);
				$keys = array_keys($result['pandect_info_json']);
				if(!in_array('dri_to_metro_time',$keys)){
					$result['pandect_info_json']['dri_to_metro_time'] = '--';
				}
				if(!in_array('dri_to_lightrail_time',$keys)){
					$result['pandect_info_json']['dri_to_lightrail_time'] = '--';
				}
				exit(json_encode($result));
				
				
			}
			
			
			$this->assign('title','hellow');
			return $this->fetch();
			
			
			
			
			
			
			
			
			$borrow = $borrowInfo->where('id=1')->find()->getData();
			echo 'debug<br><pre>';
			print_r($borrow['borrow_name']);
			//静态调用
			$result = Lzh_borrow_info::get(2)->getData();
			
			
			echo '<br>debug<pre>';
			print_r($result['borrow_name']);
			exit;
		}
		
		
		
	}
