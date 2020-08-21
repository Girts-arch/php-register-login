<?php

include_once 'source/session.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    
    <link rel="stylesheet" href="css/style2.css">
</head>

<body>
<div class="top">
<form class="form">
    <?php if(!isset($_SESSION['username'])): header("location: logout.php");?>

    <?php else: ?>

    <?php endif ?>

    <?php echo "<h1 > Welcome ".$_SESSION['username']." To Dashboard </h1>" ?>

    <button class="btn"><a href="logout.php">Logout</a></button>
    </div>
</form>
</body>
</html>