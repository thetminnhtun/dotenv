<?php

if(!function_exists('dotenv')) {
    function dotenv($file = '.env') {

        if (file_exists($file)) {
    
            $handle = fopen($file, 'r');
    
            while(!feof($handle)) {
    
                $str = fgets($handle);
                if(strlen(trim($str)) > 0) {
                    putenv($str);
                }
    
            }
            fclose($handle);
    
        }
    }
}

if(!function_exists('env')) {
    function env($key) {
        return getenv($key);
    }
}

