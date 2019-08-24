<?php

namespace TMH;

Class Dotenv {

    public static function create($file = '.env') {

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

