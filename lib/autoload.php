<?php

 function autoload($class){

    $filename = $class .'.class.php';
    if(file_exists('./lib/' . $filename)){

        require './lib/' . $filename;

    }elseif (file_exists('./controllers/' . $filename)) {
        require './controllers/' . $filename;
    }else{
        die('Error #01 : class not found');
    }


}

spl_autoload_register("autoload");

?>