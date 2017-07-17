    <?php
    include ("dbconnection.php");
    $table =$_POST["select_table"];
    echo $table;

    $sqlget = "SELECT * FROM ".$table." ";
    $sqldata = mysqli_query($link,$sqlget);
    
 	//echo ("No of students");
 	echo mysqli_num_rows($sqldata);
    ?>