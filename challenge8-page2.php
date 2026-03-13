<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 2</title>
</head>
<body>


    <?php
    
    session_start();
    $userName = $_SESSION["username"] ?? null;
    $FavoriteLang = $_POST["favoriteLang"] ?? null;
    $_SESSION["favoriteLang"] = $FavoriteLang;


    if($_SERVER["REQUEST_METHOD"] === "POST"){
        if($FavoriteLang){
            header("location: challenge8-page3.php");
        }
    }

    
    
    ?>


    <form method="POST">
        <label >Enter Youre Favorite Programming Language :</label>
        <br>
        <input style="margin-top: 15px" type="text" name="favoriteLang">
        <br>
        <button style="margin-top: 15px" type="submit">Next</button>
    </form>
</body>
</html>