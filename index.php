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
    if($action === 'portfolios'){
        portfolios();
    }
    if($action === 'portfolioPro'){
        portfolioPro();
    }
    if($action === 'portfolioPerso'){
        portfolioPerso();
    }
    if($action === 'cv'){
        cv();
    }
    if($action === 'shifumi'){
        shifumi();
    }
    if($action === 'contact'){
        contact();
    }
    if($action === 'sendMail'){
        sendMail();
    }
}
else{
    home();
}

?>