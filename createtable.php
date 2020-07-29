<?php

$query = "SELECT id FROM users";

$result = mysqli_query($link, $query);

if(empty($result)) {

                $query = "CREATE TABLE `test`.`users` ( 

                    `id` INT NOT NULL AUTO_INCREMENT ,

                    `email` TEXT NOT NULL ,

                    `password` TEXT NOT NULL ,

                    `diary` TEXT NOT NULL ,
                    
                     PRIMARY KEY (`id`)) ENGINE = InnoDB;";

                $result = mysqli_query($link, $query);
}
?>