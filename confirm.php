<?php 
    include 'data.php';
    include 'includes/utility.php'; 

    $production = false;
    $version = $production ? '1.0' : md5(time());  

    $url = "https://siine.net/confirm.php?id=";
    $code = trim($_GET['id']);

    $db = new SQLite3('./planning/database.sqlite', SQLITE3_OPEN_CREATE | SQLITE3_OPEN_READWRITE);
    $db->enableExceptions(true);
    $statement = $db->prepare('SELECT * FROM "guests_data" WHERE code = ?; ');
    $statement->bindValue(1, $code);
    $result = $statement->execute();
    $guest = $result->fetchArray(SQLITE3_ASSOC);
    $db->close();
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
    <div class="section" id="hero">
    <div class="overlay invitation">
        <div class="invitation-guest">
            <h4><?=$guest['name'];?> - <?=$guest['title'];?></h4>
        </div>
        <div class="invitation-message">
            <h4 dir="<?=$event['invitation_message_1']['dir'];?>"><?=$event['invitation_message_1']['text'];?></h4><br>
            <h4 dir="<?=$event['event_name']['dir'];?>"><?=$event['event_name']['text'];?></h4><br>
            <h4 dir="<?=$event['invitation_message_2']['dir'];?>"><?=$event['invitation_message_2']['text'];?></h4><br>
            <h4 dir="<?=$event['event_date']['dir'];?>"><?=$event['event_date']['text'];?>
            <br><?=$event['event_place']['text'];?></h4>            

            <a dir="<?=$event['invitation_confirm']['dir'];?>" href="#" class="cta"><?=$event['invitation_confirm']['text'];?></a>


        </div>


        <div class="marquee">
            <p dir="<?=$event['marquee']['dir'];?>">
                <?= $event['marquee']['text']; ?>
            </p>
        </div>
    </div>
</div>
    
</body>
</html>