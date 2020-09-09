<?php
$db = mysqli_connect("localhost", "root", "", "mydb"); /* server name,
 * username, password, database name */

/*
 * $sql="INSERT INTO `user`(`firstname`, `lastname`, `email`, `password`) VALUES ('ahah','esee','jnjsn@gmail.com','gvg1324')" ;
 
 
$result= mysqli_query($db, $sql) or die("Bad quuery:  $sql");

echo 'good';*/ // Per provare se inserisci i dati nel databse

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

//echo 'Connected successfully';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

