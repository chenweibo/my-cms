<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {
    public function index(){


        $this->display();

                 
        
    }
     public function login(){

            if(!IS_POST)  E('页面不存在');
   
               $username= I('username');
               $pwd= I('password');

            
               $user=M('user')->where(array('username' => $username))->find();

               if(!$user || $user[password]!= $pwd){

                        $this->error('帐号或者密码错误');


               }

               session('uid' ,$user['id']);
                session('username' ,$user['username']);
                $this->redirect('Admin/Index/index');

             

     }


     public function logout(){
$_SESSION = array(); //清除SESSION值.
          if(isset($_COOKIE[session_name()])){  //判断客户端的cookie文件是否存在,存在的话将其设置为过期.
                setcookie(session_name(),'',time()-1,'/');
            }
                session_destroy();  //清除服务器的sesion文件
                $this->redirect('Login/index');
}


}