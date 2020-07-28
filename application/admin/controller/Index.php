<?php
	
	namespace app\admin\controller;
	
	use think\Db;
	use app\admin\model\Lzh_borrow_info;
	use \think\Request;
	use \think\Controller;
	
	class Index extends Controller
	{
		public function index(Request $request)
		{
			
			//$user = Db::table('lzh_borrow_info')->where('id',1)->select();
			//实例调用
			$borrowInfo = new Lzh_borrow_info();
			$borrow = $borrowInfo->where('id=1')->find()->getData();
			echo 'debug<br><pre>';
			print_r($borrow['borrow_name']);
			//静态调用
			$result = Lzh_borrow_info::get(2)->getData();
			
			
			echo '<br>debug<pre>';
			print_r($result['borrow_name']);
			exit;
		}
		
		public function self(Request $request)
		{
			//echo 'debug<br><pre>'; print_r(222); exit;
			if ($request->isPost()) {
				$name = $request->param('name');
				echo 'debug<br><pre>'; print_r(333); exit;
				$this->assign('name',$name);
		
			}
			
			// $borrowInfo = new Lzh_borrow_info();
			// echo 'debug<br><pre>';
			// print_r($borrowInfo->check());
			// exit;
			// $request = Request::instance();
			// echo 'debug<br><pre>'; print_r($request->module());
			// echo 'debug<br><pre>'; print_r($request->action());
			// echo 'debug<br><pre>'; print_r($request->controller());
			$this->assign('title','hellow');
			return $this->fetch();
		}
		
		public function name(Request $request)
		{
			//echo 'debug<br><pre>'; print_r(222); exit;
			
				$name = $request->param('name');
				echo 'debug<br><pre>'; print_r($name); exit;
				
				
			
			
			
			
		}
	}
