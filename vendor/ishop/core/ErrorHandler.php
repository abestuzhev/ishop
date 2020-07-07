<?php


namespace ishop;


class ErrorHandler{

    public function __constructor(){
        if(DEBUG){
            error_reporting(-1);
        }else {
            error_reporting(0);
        }
        //$this - указатель на данный класс
        // функция set_exception_handler передает обраобтку данной ошибки
        set_exception_handler('exceptionHandler');
        echo "Errooooooor";
    }

    // вызываем функции обработки ошибок
    public function exceptionHandler($e){
        $this->logErrors($e->getMessage(), $e->getFile(), $e->getLine());
        $this->displayError('Исключение', $e->getMessage(), $e->getFile(), $e->getLine(), $e->getCode());
    }

    protected function logErrors($message = "", $file="", $line = "" ){
        error_log("[" . date("Y-m-d H:i:s") . "] текст ошибки: {$message} | Файл: {$file} | Строка: {$line} \n=========================\n", 3, ROOT . "/tmp/errors.log");
    }

    protected function displayError($errorno, $errstr, $errfile, $errline, $responce = 404){
        http_response_code($responce);
        // если 404 код и отладка выключена
        if($responce == 404 && !DEBUG){
            require WWW . "/errors/404.php";
            die;
        }

        if(DEBUG){
            require WWW . "/errors/dev.php";
        }else {
            require WWW . "/errors/prod.php";
        }
        die;

    }
}