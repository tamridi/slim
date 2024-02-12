<?php
class Home extends Mustache_Engine{

    protected $data = [];

    function render ($templates = "./templates/ciaoMondo.html",$data = []){
        $template = file_get_contents($templates);
        return parent::render($template, $this->data);
    }

    function setData($data){
        $this->data = $data;
    }
}