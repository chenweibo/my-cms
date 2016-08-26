<?php
namespace Admin\Controller;
use Think\Controller;
class CommenController extends Controller {


 public function _initialize () {

        if(!isset($_SESSION['uid']) || !isset($_SESSION['username']))
        {
                 $this->redirect('Login/index');

        }
    }
}