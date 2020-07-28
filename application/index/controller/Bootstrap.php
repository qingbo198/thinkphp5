<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/5/11
 * Time: 10:54
 */
namespace app\index\controller;
use think\Controller;

class Bootstrap extends Controller{

    public function index(){
        return $this->view->fetch();
    }

    
}