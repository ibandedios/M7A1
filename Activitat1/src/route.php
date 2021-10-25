<?php

    function getRoute():string{
        if(isset($_REQUEST['url'])){
            $url=$_REQUEST['url'];
        }else{
            $url="home";
        }
        switch ($url){
            case 'login':
                return 'login';
            case 'register':
                return 'register';
            case 'regaction':
                return 'regaction';
            case 'logaction':
                return 'logaction';
            case 'logout':
                return 'logout';
            case 'dashboard':
                return 'dashboard';
            case 'repitereg':
                return 'repitereg';
            case 'clearcookie':
                return 'clearcookie';
            default:
                return 'home';
        }
    }