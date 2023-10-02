<?php
session_start();
 if (isset($_POST['sublog'])){
     $age=$_POST['age'];
     $loc=$_POST['location'];
     $uni=$_POST['uni'];
}
 header('location:success.php');