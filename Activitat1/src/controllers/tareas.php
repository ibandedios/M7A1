<?php

    require APP.'/lib/render.php';
    require APP.'/src/controllers/funciones.php';
    require APP.'/conn.php';
    
    
    echo render('tareas',['nom'=>'dashboard/tareas']);
