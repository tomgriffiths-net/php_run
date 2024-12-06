<?php
class php_run{
    public static function command($line):void{
        $line = str_replace("\\","\\\\",$line);
        eval($line);
    }
}