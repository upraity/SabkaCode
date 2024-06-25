<?php
    // print_r($_SERVER);
    $request = $_SERVER['REQUEST_URI'];
    // echo $request;
    $router = str_replace('/talksta', '', $request);
    // echo $router;
    if($router == '/home1'){
        include('home1.php');
    }
    elseif($router == '/home2'){
        include('home2.php');
    } 
    elseif($router == '/home3'){
        include('home3.php');
    }
    elseif($router == '/threads' || preg_match("/threads\/[0-9]/i", $router)){
        include('threads.php');
    }
    elseif($router == '/chat'){
        include('chat');
    }
    elseif($router == '/grp'){
        include('grp.php');
    }
    else{
        include('404.php');
    }
?>
