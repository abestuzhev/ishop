<?php


namespace ishop;


trait TSingltone{

    private static $instance;
//    заполняем это свойство объектом, если его там нет

    public static function instance(){
        if(self::$instance === null) {
            self::$instance = new self;
        }
        return self::$instance;
    }
}