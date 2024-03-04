<?php 
    include 'data.php';
    include 'database/database.php'; 
    include 'includes/utility.php'; 



    $production = false;
    $version = $production ? '1.0' : md5(time());  

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/fonts.min.css?v=<?=$version;?>" />
    <link rel="stylesheet" type="text/css" href="css/main.min.css?v=<?=$version;?>" />
    <link rel="stylesheet" type="text/css" href="css/timeline.min.css?v=<?=$version;?>" />
    <title>Siine E-Learning Launch Event</title>

</head>
<body>
    <?php view('header'); ?>
    <?php view('hero'); ?>
    <?php view('presentation'); ?>
    <?php view('guests'); ?>
    <?php view('timeline'); ?>
    <?php view('companies'); ?>
    
</body>
</html>