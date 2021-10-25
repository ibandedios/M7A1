<?php
require 'config.php';

    

        $gdb=new PDO($dsn,$dbuser,$dbpasswd);
        $gdb->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $gdb->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);

        
    