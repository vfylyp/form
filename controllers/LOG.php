<?php namespace RegisterForm;

class LOG{
    private static $log_folder = "/logs";

    public static function RegisterLog($message){
        $log_path   = $_SERVER['DOCUMENT_ROOT'].static::$log_folder;
        $file_name  = $log_path.'/Register_log.txt';

        static::prepareFolder($log_path);
        static::prepareFile($file_name);

        $file = fopen($file_name, 'a');

        if($file){
            fwrite($file, $message);
            fclose($file);
        }

    }

    public static function prepareFolder($folder){
        if(!is_dir($folder)){
            mkdir($folder, 0777);
        }
    }

    public static function prepareFile($file_name){
        if(!file_exists($file_name)){
            $file = fopen($file_name, 'w');
            fclose($file);
        }
    }
}
class_alias('RegisterForm\LOG', 'LOG');