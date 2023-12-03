<?php 

class Helper{

    public static function component($pathComponent){
        include_once __DIR__.'/components/'.$pathComponent;
    }
    
}   
