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
            $garlic['red_6_5'] = Db::table('51garlic')
                ->order('id desc')
                ->where($red_6_5)
                ->select();
            $red_6_0['title'] = '杂交红蒜';
            $red_6_0['level'] = '6.0cm';
            $garlic['red_6_0'] = Db::table('51garlic')
                ->order('id desc')
                ->where($red_6_0)
                ->select();

            $red_5_5['title'] = '杂交红蒜';
            $red_5_5['level'] = '5.5cm';
            $garlic['red_5_5'] = Db::table('51garlic')
                ->order('id desc')
                ->where($red_5_5)
                ->select();
            $red_5_0['title'] = '杂交红蒜';
            $red_5_0['level'] = '5.0cm';
            $garlic['red_5_0'] = Db::table('51garlic')
                ->order('id desc')
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
        $this->assign('title', '大蒜价格数据采集');
        return $this->fetch();
    }

    public function lastSevenDay(Request $request)
    {
        if ($request->isPost()) {
            $red_6_5['title'] = '杂交红蒜';
            $red_6_5['level'] = '6.5cm';
            $garlic['red_6_5'] = Db::table('51garlic')
                ->order('id asc')
                ->where($red_6_5)
                ->limit(7)
                ->select();
            $red_6_0['title'] = '杂交红蒜';
            $red_6_0['level'] = '6.0cm';
            $garlic['red_6_0'] = Db::table('51garlic')
                ->order('id asc')
                ->where($red_6_0)
                ->limit(7)
                ->select();

            $red_5_5['title'] = '杂交红蒜';
            $red_5_5['level'] = '5.5cm';
            $garlic['red_5_5'] = Db::table('51garlic')
                ->order('id asc')
                ->where($red_5_5)
                ->limit(7)
                ->select();
            $red_5_0['title'] = '杂交红蒜';
            $red_5_0['level'] = '5.0cm';
            $garlic['red_5_0'] = Db::table('51garlic')
                ->order('id asc')
                ->where($red_5_0)
                ->limit(7)
                ->select();
            $garlic['red_6_5'] = array_reverse($garlic['red_6_5']);
            $garlic['red_6_0'] = array_reverse($garlic['red_6_0']);
            $garlic['red_5_5'] = array_reverse($garlic['red_5_5']);
            $garlic['red_5_0'] = array_reverse($garlic['red_5_0']);


//                $white['title'] = '杂交白蒜';
////                $white['level'] = '6.5cm';
////                $garlic['white']= Db::table('51garlic')
////                    ->order('id desc')
////                    ->where($white)
////                    ->select();

            //echo 'debug<br><pre>'; print_r($garlic); exit;
            exit(json_encode($garlic));
        }
        $this->assign('title', '大蒜数据采集');
        return $this->fetch();
    }

    public function localTest(Request $request){
        header("Access-Control-Allow-Origin: *");
        $array = [1,2,3];
        exit(json_encode($array));
    }

    public function check()
    {
        $signature = $_GET["signature"];
        $timestamp = $_GET["timestamp"];
        $nonce = $_GET["nonce"];
        $echostr = $_GET["echostr"];

        $token = 'weixin';
        $tmpArr = array($token, $timestamp, $nonce);
        sort($tmpArr, SORT_STRING);
        $tmpStr = implode($tmpArr);
        $tmpStr = sha1($tmpStr);

        if ($tmpStr == $signature) {
            return $echostr;
        } else {
            return false;
        }
    }
}
