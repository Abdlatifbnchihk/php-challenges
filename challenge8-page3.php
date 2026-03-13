<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 3</title>
</head>
<body>
    <?php 

        session_start();
        $userName = $_SESSION["username"] ?? null;
        $favoriteLang = $_SESSION["favoriteLang"];

    ?>
    <p>
        Hello, Youre User Name Is <span style="font-size: 20px; color: green"><?php echo $userName ?></span><br>
        you love <span style="font-size: 20px; color: green; margin-right: 3px"><?php echo $favoriteLang ?></span>! 
    </p>
</body>
</html>

