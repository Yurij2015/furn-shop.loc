<?php
/**
 * Created by PhpStorm.
 * File: InstantiateTrait.php
 * Date: 2019-05-10
 * Time: 12:40
 */
namespace common\models;
trait InstantiateTrait {
    private static $_prototype;
    public static function instantiate($row){
        if (self::$_prototype === null) {
            $class = get_called_class();
            self::$_prototype = unserialize(sprintf('0:%d:"%s":0:{}', strlen($class), $class));
        }
        $model = clone self::$_prototype;
        $model->init();
        return $model;
    }
}