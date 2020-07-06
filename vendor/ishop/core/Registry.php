<?php


namespace ishop;

//Trait - кусок кода, который можно copy/paste
//Паттерн Singlton (нельзя создавать больше одного объекта данного класса)
class Registry{

    use TSingltone;
    public static $properties = [];

    public function setProperty($name, $value){
        self::$properties[$name] = $value;
    }

    public function getProperty($name){
        if(isset(self::preperties[$name])){
            return self::preperties[$name];
        }
        return null;
    }

    public function getProperties(){
        return self::$properties;
    }
}