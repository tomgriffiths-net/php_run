<?php
//Your Settings can be read here: settings::read('myArray/settingName') = $settingValue;
//Your Settings can be saved here: settings::set('myArray/settingName',$settingValue,$overwrite = true/false);
class php_run{
    public static function command($line):void{
        $line = str_replace("\\","\\\\",$line);
        eval($line);
    }//Run when base command is class name, $line is anything after base command (string). e.g. > [base command] [$line]
    //public static function init():void{}//Run at startup
}