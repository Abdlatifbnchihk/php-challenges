<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$products = [
    ["name"=>"Laptop","category"=>"tech"],
    ["name"=>"Phone","category"=>"tech"],
    ["name"=>"Tablet","category"=>"tech"],
    ["name"=>"Chair","category"=>"furniture"],
    ["name"=>"Desk","category"=>"furniture"],
];


$category = $_GET["category"] ?? null;
$sort = $_GET["sort"] ?? null;

if($category){
    // echo $category . "</br>";
    $products = array_filter($products, function($product) use ($category) {
        return $product["category"] === $category;
    });
};


if($sort == "asc") {
    // echo $sort . "</br>";
    usort($products, function ($key_a, $key_b) {
        return strcmp($key_a["name"], $key_b["name"]);
    });
}

if ($sort === "desc") {
    usort($products, function ($a, $b) {
        return strcmp($b["name"], $a["name"]);
    });
}


?>


<div>
    <h3>Pleace select a category of product you want</h3>
</div>

<div>
    <span>Select the products </span><a href="?category=tech&?sort=asc"> Tech</a>
    <br />
    <span>Select the products </span><a href="?category=tech&?sort=desc"> Tech</a>
    <br>
    <span>Select the products </span><a href="?category=furniture&?sort=asc">Furniture</a>
    <br>
    <span>Select the products </span><a href="?category=furniture&?sort=desc">Furniture</a>
</div>

<div>
    <h4>The category you has been selected is: <?= htmlspecialchars($category) ?></h4>
</div>

<h2>Products</h2>

<ul>

<?php foreach ($products as $product): ?>

    <li><?= $product["name"] ?></li>

<?php endforeach; ?>

</ul>

</body>
</html>