<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Shooping card</title>
</head>
<body>
    <?php
    $products = [
        ["name" => "Laptop"],
        ["name" => "Phone"],
        ["name" => "Tablet"],
    ];

    session_start();


// 2 create cart if it doesn't exist
if(!isset($_SESSION["cart"])) {
    $_SESSION["cart"] = [];
}


// 3 get product name from URL
$productName = $_GET["name"] ?? null;


// 4 if user clicked a product
if($productName){

    // 5 check if product already in cart
    if(!in_array($productName, $_SESSION["cart"])){

        // 6 add product to cart
        $_SESSION["cart"][] = $productName;
    }

    header("location: challenge9.php");
    exit();
}


// 7 count items in cart
$count = count($_SESSION["cart"]);

?>

<h3>Cart : <?php echo $count ?> items</h3>


<ul>

<?php foreach ($products as $product): ?>

    <?php $item_name = $product["name"]; ?>

    <li style="display:flex; gap:10px">

        <?php echo $item_name ?>

        <a href="?name=<?php echo $item_name ?>">➕ Add</a>

    </li>

<?php endforeach; ?>

</ul>


<h4>Cart Content:</h4>

<?php print_r($_SESSION["cart"]); ?>
</html>