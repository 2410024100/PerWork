<?php
namespace application\admin\ctrl;
use \core\lib\controller;
use \core\lib\log;
class indexCtrl extends controller{
  public function index(){
    $this->assign('data',C('route_alise')['/admin']);
    $this->display('index');
  }

  public  function test(){
    $this->assign('data','hello word');
    $this->display('test');
  }
}
