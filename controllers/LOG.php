<?php namespace RegisterForm;

class LOG{
    private static $log_file_path = "/logs";

    public static function RegisterLog($message){
        $file_name  = $_SERVER['DOCUMENT_ROOT'].static::$log_file_path.'/Register_log.txt';
        $file       = fopen($file_name, 'a');

        fwrite($file, $message);
        fclose($file);
    }
}
class_alias('RegisterForm\LOG', 'LOG');