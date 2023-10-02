
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>success page</title>
</head>
<body>
<h4>Thanks For Filling Our Form <?php
session_start();
$name =$_SESSION['name'];
    echo $name ?></h4>


</body>
</html>