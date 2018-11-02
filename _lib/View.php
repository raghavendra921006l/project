<?php
class View{
    protected $view;
    protected $vars=array();

    function __construct($view){
        $this->view= $view;
    }
    function __get($k){
        return $this->vars[$k];
    }

    function __set($k, $v){
        return $this->vars[$k]= $v;
    }
    function __toString(){
        extract($this->vars);
        chdir(dirname($this->view));
        ob_start();
        include basename($this->view);
        return ob_get_clean();
    }
}