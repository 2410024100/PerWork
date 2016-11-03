<?php
namespace core\lib;
class route{
     public $ctrl;
     public $action;
     public function __construct(){
        if(isset($_SERVER['REQUEST_URI']) && $_SERVER['REQUEST_URI']!='/'){
           $path = $_SERVER['REQUEST_URI'];
           $patharr= explode('/',trim($path,'/'));
           if(isset($patharr[0])){
             $this->ctrl=$patharr[0];
           }
           if(isset($patharr[1])){
             $this->action=$patharr[1];
           }
            $count=count($patharr);
            $i=2;
            while($i<$count){
              if(isset($patharr[$i+1])){
                 $_GET[$patharr[$i]]=$patharr[$i + 1];
              }
              $i+=2;
            }
        }else{
            $this->ctrl = 'index';
            $this->action='index';
        }
         //增加日記記錄
         $log = log::getLogger();
         $log->set_Info_log('请求为'. $this->ctrl.'/'.$this->action);
     }
}
