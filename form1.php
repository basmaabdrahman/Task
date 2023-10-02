<?php
session_start();
global $name;
if (isset($_POST['sublog'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];


}

else{
    include ('task.html');
}
$_SESSION['name']=$name;
header("location:info.html")->with($name);

?>
