<?php

function loadClass($class){
    require('models/'. ucfirst($class) .'.php');
}
spl_autoload_register('loadClass');

require('controllers/controller.php');

if(isset($_GET['action'])){
    $action = $_GET['action'];
    if($action === 'home'){
        home();
    }
}
else{
    home();
}

?>