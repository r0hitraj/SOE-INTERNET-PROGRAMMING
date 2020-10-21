<?php

    $username=$_GET['username'];

    $myserv =new mysqli('localhost','root','acer','user_1');
    if($myserv->connect_error)
    {
        die("Connection Failed". $myserv->connect_error);
    }
    $sql="select * from student where username='$username'";
    $result=$myserv->query($sql);
    if($result->num_rows > 0)
    {
        echo "<pre>". " name "."  "." Username"."  "." password"."</pre>";
        while($row = $result->fetch_assoc())
        {
            
        echo "<pre>"."<br><b>".$row["name"]."    ".$row["username"]."      ". $row["password"]."</pre>";
        }
    }
    else{
        echo "<h1><br>NO match Found</h1>";
    }
     

     $myserv->close();
?>