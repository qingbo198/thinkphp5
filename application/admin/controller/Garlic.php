<?php
	
	namespace app\admin\controller;
	
	use think\Db;
	use app\admin\model\J_store;
	use app\admin\model\Lzh_borrow_info;
	use app\admin\model\J_store_business_info;
	use \think\Request;
	use \think\Controller;
	
	class Garlic extends Controller
	{
		//大蒜信息
		public function index(Request $request)
		{
			if ($request->isPost()) {
			    $red_6_5['title'] = '杂交红蒜';
                $red_6_5['level'] = '6.5cm';
                $garlic['red_6_5']= Db::table('51garlic')
                    ->order('id asc')
                    ->where($red_6_5)
                    ->select();
                $red_6_0['title'] = '杂交红蒜';
                $red_6_0['level'] = '6.0cm';
                $garlic['red_6_0']= Db::table('51garlic')
                    ->order('id asc')
                    ->where($red_6_0)
                    ->select();

                $red_5_5['title'] = '杂交红蒜';
                $red_5_5['level'] = '5.5cm';
                $garlic['red_5_5']= Db::table('51garlic')
                    ->order('id asc')
                    ->where($red_5_5)
                    ->select();
                $red_5_0['title'] = '杂交红蒜';
                $red_5_0['level'] = '5.0cm';
                $garlic['red_5_0']= Db::table('51garlic')
                    ->order('id asc')
                    ->where($red_5_0)
                    ->select();



//                $white['title'] = '杂交白蒜';
////                $white['level'] = '6.5cm';
////                $garlic['white']= Db::table('51garlic')
////                    ->order('id desc')
////                    ->where($white)
////                    ->select();

                //echo 'debug<br><pre>'; print_r($garlic); exit;
                exit(json_encode($garlic));
			}
			$this->assign('title','hellow');
			return $this->fetch();
		}
	}
