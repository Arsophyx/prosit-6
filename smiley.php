<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smiley</title>
</head>
<body>
    <div>
        <?php
        if ($_GET["page"] == null){
            $page = 0;
        }
        else{
            $page = $_GET["page"];
        }
        for ($i = 0; $i < 256; $i++){
            $emoji = 128512 + $i + $page * 256;
            $emoji = "&#" . strval($emoji);
            echo(mb_convert_encoding($emoji, 'UTF-8', 'HTML-ENTITIES'));
        }
        ?>
        <br>
        <a href = <?php echo('smiley.php?page=' . strval($page + 1));?>><button>La suite</button></a>
    </div>
</body>
<footer>
    <?php
    echo("Site créé par Alexis, il habite à Eysines, il n'a pas d'entreprise.");
    ?>
</footer>
</html>