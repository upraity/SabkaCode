<?php
    // print_r($_SERVER);
    // $request = $_SERVER['REQUEST_URI'];
    // echo $request;
    // $router = $request;
    
    $router = $_SERVER['REQUEST_URI'];

    // echo $router;
    if($router == '/index'){
        include('index.php');
    }
    elseif($router == '/logout' ){
        require('logout.php');
    } 
    elseif($router == '/contact' ||$router == '/contact?i=1'){
        include('contact.php');
    }
    elseif($router == '/forgotpassword' || $router == '/forgotpassword?i=1'){
        require('forgotpassword.php');
    } 
    elseif($router == '/search' ||$router == '/search?i=1'){
        include('search.php');
    }
    elseif($router == '/profile' ||$router == '/profile?i=1'){
        include('profile.php');
    }
    else{
        // header("location:https://dj.000.pe/talksta");
    }

?>
