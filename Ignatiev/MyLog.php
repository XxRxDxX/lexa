<?php namespace Ignatiev;

use core\LogAbstract as LogAbstract;
use core\LogInterface as LogInterface;

Class MyLog extends LogAbstract implements LogInterface {
    public function _log($str){
        $this->log[]=$str;
    }
    public static function log($str){
        self::Instance()->_log($str);
    }
    public function _write(){
        foreach($this->log as $value){
            echo $value."\n";
        }

    }
    public static function write(){
        self::Instance()->_write();
    }
}
?>
