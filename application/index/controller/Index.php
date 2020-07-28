<?php
namespace app\index\controller;


use think\Controller;
class Index extends Controller
{
    public function index()
    {
        if($this->request->isPost()){
            echo 'debug<br><pre>'; print_r($_POST); exit;
        }

        return $this->view->fetch();
    }



    public function shop(){
        if($this->request->isPost()){
            echo 'debug<br><pre>'; print_r($_POST); exit;
        }

        return $this->view->fetch();
    }
}
