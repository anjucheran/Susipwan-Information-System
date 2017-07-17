 <?php
    $name=$_POST["name"];
    $dob=$_POST["dob"];
    $nic=$_POST["nic"];
    $address=$_POST["address"];
    $contact=$_POST["contact"];
    $email=$_POST["email"];
    $subject=$_POST["class"];

    

    $link=mysqli_connect("localhost","root","201412699","testteacherdb");

    $sql="INSERT INTO studenttable (name,dob,nic,address,contact,email,classes) VALUES ('".$name."','". $dob."', '".$nic."','".$address."','".$contact."','".$email."','".$subject."')";
    
    mysqli_query($link,$sql);
    echo "Data submitted successfuly";

?> 