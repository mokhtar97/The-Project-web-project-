<?php
include ('database.php');

$tbl="CREATE TABLE IF NOT EXISTS car(
      id int(11) not null auto_increment primary key,
      name varchar(50) not null,
      model varchar(50) not null,
      color varchar(50) not null);";

      $db->myExec($tbl);

$insert="INSERT INTO car(id,name,model,color) VALUES
         (1,'asd1','mok1','red'),
         (2,'asd2','mok2','blue'),
         (3,'asd3','mok3','black'),
         (4,'asd4','mok4','green');";

        $db->myExec($insert);

