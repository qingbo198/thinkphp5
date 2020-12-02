<?php
/**
 * Created by PhpStorm.
 * User: Matthew_man
 * Date: 2020/11/12
 * Time: 13:13
 */

namespace app\admin\controller;


use think\Controller;
use think\Db;

class Word extends Controller
{
    public function findEmptyStr(){
        $where['lesson_id'] = array('eq',259);
        $word = Db::table('t_words')
            //->where($where)
            ->select();
        echo 'debug<br><pre>'; print_r($word); exit;
        $arr = [];
        foreach ($word as $k=>$v){
            if(preg_match('/\s/',$v['say'])){
                $word[$k]['say'] = str_replace(' ','%20',$v['say']);
                $say = str_replace(' ','%20',$v['say']);
                Db::table('t_words')->where('id', $v['id'])->update(['say' => $say]);
            }
        }
        echo 'debug<br><pre>'; print_r($word); exit;
    }
}