<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <?php
    $name = $_POST["name"] ?? null;
    $email = $_POST["email"] ?? null;
    $message = $_POST["message"] ?? null;
    $emailForm = $email;
    $emailMessage = "";
    $successMessage = "";

    if(isset($_GET['success'])){
        $successMessage = "Form submitted successfully!";
        $name = "";
        $email = "";
        $message = "";
    }


    if($_SERVER["REQUEST_METHOD"] === "POST") {

        if(filter_var($emailForm, FILTER_VALIDATE_EMAIL)) {
            header("Location: challenge7.php?success=1");
            exit;
        } else {
            $emailMessage = "Pleace Enter the right email";
        }

    } 

    ?>


    <form method="POST" action="challenge7.php">
        <div style="margin-bottom: 5px">
            <label>name:</label>
            <input value="<?php echo htmlspecialchars($name); ?>" name="name" type="text">
        </div>
        <br>
        <div style="margin-bottom: 5px">
            <label>email:</label>
            <input type="text" name="email">
            <p style="color: red;"><?php echo $emailMessage; ?></p>
        </div>
        <br>
        <div style="margin-bottom: 5px">
            <label>message:</label>
            <textarea name="message"><?php echo htmlspecialchars($message); ?></textarea>
        </div>
        <button type="submit" style="margin: 10px 0">Submit</button>

        <div>
            <p style="color: green"><?php echo htmlspecialchars($successMessage); ?></p>
        </div>
        
    </form>
</body>
</html>