<?php

    function home(){
        require('views/homeView.php');
    }

    function portfolios(){
        require('views/pages/portfolios.php');
    }

    function portfolioPro(){
        require('views/pages/portfolioPro.php');
    }

    function portfolioPerso(){
        require('views/pages/portfolioPerso.php');
    }

    function cv(){
        require('views/pages/cv.php');
    }

    function shifumi(){
        require('views/pages/shifumi.php');
    }

    function contact(){
        require('views/pages/contact.php');
    }

    function sendMail(){
        ini_set( 'display_errors', 1 );
 
        error_reporting( E_ALL );

        $to      =  "valerian.dufrene@gmail.com";
        $subject = $_POST['nom'] . "-" . $_POST['sujet'];
        $message = $_POST['message'];
        $headers = array(
            'From' => $_POST['mail'],
            'Reply-To' => 'valerian.dufrene@gmail.com',
            'X-Mailer' => 'PHP/' . phpversion()
        );

        mail($to, $subject, $message, $headers);

        echo("Le mail a été envoyé !");

        header('Location: index.php');
    }

?>