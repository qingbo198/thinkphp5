<?php
/**
 * Created by PhpStorm.
 * User: Matthew_man
 * Date: 2020/5/12
 * Time: 9:40
 */

namespace app\index\controller;

use think\Controller;


class Angular extends Controller
{
    public function index(){
        if($this->request->isPost()){
            $da = $this->request->post();
            echo 'debug<br><pre>'; print_r($da); exit;
            $data = [
                'name'=>'小米'
            ];
            echo json_encode($data);exit;
        }

        return $this->view->fetch();
    }

}