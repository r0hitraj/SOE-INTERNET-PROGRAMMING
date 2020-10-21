<?php

$conserv= new mysqli('localhost','root','acer','user_1');
if($conserv->connect_error)
{
    die("Connection Error".$conserv->connect_error);
}
    if (empty($_POST["username"])) {
       echo "<b>Username is required<br>";
    }
    if (empty($_POST['password'])) {
      echo "<b>password is required";
    }
     else {
         $user=$_POST['username'];
        $sql="select password from student where username='$user'";
         $result=$conserv->query($sql);
         $row = $result->fetch_assoc();
        test_pass($_POST,$row['password']);
    }

 function test_pass($enterpass,$fetchpass)
    {
        if($enterpass['password']===$fetchpass &&$fetchpass!=null)
        {
            echo "<h1><b>WELCOME "."   ".$enterpass['username'];
        }
        else{
            echo "<h1><b>PASSWORD INCORRECT</h1>";
        }
        
    }
$conserv->close();
?>
