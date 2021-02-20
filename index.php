<?php

use Ignatiev\IgnatievException;
use Ignatiev\MyLog;
use Ignatiev\QuEquation;

require __DIR__ . '/vendor/autoload.php';

ini_set("display_errors", 1);
error_reporting (-1);

MyLog::log("Версия программы ".file_get_contents("./version"));

try{
    $b = new QuEquation();
    $values = array();

    for($i=1; $i<4; $i++){
        echo "Введите ".$i." аргумент: ";
        $values[]=readline();
    }
    $va = $values[0];
    $vb = $values[1];
    $vc = $values[2];

    MyLog::log("Введено уравнение ".$va."x^2 + ".$vb."x + ".$vc." = 0");
    $x = $b->solve($va,$vb,$vc);

    $str = implode(", ", $x);
    MyLog::log("Корни уравнения: ".$str);
}catch(IgnatievException $e){
    MyLog::log($e->getMessage());
}
MyLog::write();
?>