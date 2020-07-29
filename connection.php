<?php

$link = mysqli_connect("localhost", "root", "", "test");
        
        if (mysqli_connect_error()) {
            
            die ("Database Connection Error");
            
        }
        include("createtable.php");
?>