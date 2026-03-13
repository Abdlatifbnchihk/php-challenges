<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 1</title>
</head>
<body>


    <?php
    
    session_start();
    $userName = $_POST["username"] ?? null;
    $_SESSION["username"] = $userName;

    if($_SERVER["REQUEST_METHOD"] === "POST"){
        if($userName){
            header("location: challenge8-page2.php");
        }
    }

    
    
    ?>


    <form method="POST">
        <label >Enter youre username :</label>
        <br>
        <input style="margin-top: 15px" type="text" name="username">
        <br>
        <button type="submit" style="margin-top: 15px">Next</button>
    </form>
</body>
</html>