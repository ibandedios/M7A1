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
            case 'addTarea':
                return 'addTarea';
            case 'tareas':
                return 'tareas';
            case 'addTareaAction':
                return 'addTareaAction';
            case 'removeTarea':
                return 'removeTarea';
            case 'remTarea':
                return 'remTarea';
            case 'addTaskItem':
                return 'addTaskItem';
            case 'addItemAction':
                return 'addItemAction';
            case 'vistaTI':
                return 'vistaTI';
            case 'vistaTIAction':
                return 'vistaTIAction';
            case 'formTI':
                return 'formTI';
            case 'homeaction':
                return 'homeaction';
            default:
                return 'home';
        }
    }