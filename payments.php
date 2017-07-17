<?php
    
    include ("dbconnection.php");

    $id=$_POST["id"];
    $class=$_POST["class"];
    $month=$_POST["month"];
    $fee=$_POST["fee"];



    //$link=mysqli_connect("localhost","root","201412699","testteacherdb");



    $sql="UPDATE ".$class." SET ".$month." = ".$fee." WHERE id =".$id." ";

    mysqli_query($link,$sql);

    //echo "Data submitted successfuly";
?> 