<?php

namespace application\core;
use application\core\View;

class View {
    
    public $path;
    public $route;
    public $layout = 'default';
    
    public function __construct($route) {
        $this->route = $route;
        $this->path = $route['controller'].'/'.$route['action'];
        
    }
    
    public function render($title, $vars = []) {
        extract($vars);
        if(file_exists('application/views/'.$this->path.'.php')) {
            ob_start();
            require 'application/views/'.$this->path.'.php';
            $content = ob_get_clean();
            require 'application/views/layouts/'.$this->layout.'.php';
        } else {
            echo 'ВИД НЕ НАЙДЕН '. $this->path; 
        }
        
    }
    
    public static function errorCode($code) {
        http_response_code($code);
        require 'application/views/errors/'.$code.'.php';
        exit;
    }
    
    public function redirect($url) {
        header('location: '.$url);
        exit;
    }
    
}