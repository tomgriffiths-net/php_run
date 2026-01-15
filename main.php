<?php
class php_run{
    public static function command($line):void{
        trim($line);

        $options = [];

        while(substr($line, 0, 1) === "-"){
            $nextSpace = strpos($line, " ", 1);
            $options[] = strtolower(substr($line, 1, $nextSpace -1));
            $line = substr($line, $nextSpace +1);
        }

        $giveJson = false;
        $timer = false;
        $addSemicolon = true;

        foreach($options as $option){
            if($option === "bs"){
                $line = str_replace("\\","\\\\",$line);
            }
            elseif($option === "json"){
                $giveJson = true;
            }
            elseif($option === "timer"){
                $timer = true;
            }
            elseif($option === "noend"){
                $addSemicolon = false;
            }
        }

        if($addSemicolon){
            $line = $line . ";";
        }

        if($timer){
            $timer = microtime(true);
        }

        if($giveJson){
            echo "Return: " . json_encode(eval("return " . $line), JSON_PRETTY_PRINT) . "\n";
        }
        else{
            eval($line);
        }

        if(is_float($timer)){
            $timer = microtime(true) - $timer;
            echo "Time taken: " . round($timer, 6) . "s\n";
        }
    }
}