<?php namespace Codecourse\Filters;

class myfilter {
    
    public function __construct() {
        echo "filter";
    }
    
    public function hello(){
        
        echo __CLASS__;
    }
}