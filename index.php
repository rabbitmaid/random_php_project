<?php
    require_once __DIR__ . "/config.php";
    require_once __DIR__ . "/products.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Home - <?php echo STORE_NAME ?> </title>
    <link rel="stylesheet" href="assets/style.css">
    <script src="assets/script.js" defer> </script>
</head>
<body> 

    <h1>All Store Products</h1>
    
    <div class="products">

        <?php foreach($products as $product): ?>

        <div class="product">
            <h2 class="title"><?php echo $product['name'] ?></h2>
            <p class="cpu">CPU: <?php echo $product['cpu'] ?></p>
            <p class="graphics_card">Graphics Card: <?php echo $product['graphicsCard'] ?></p>
            <p class="price"><?php echo $product['price'] ?> XAF</p>
            <button class="buy_button">Buy Product</button>
        </div>

        <?php endforeach ?>
         
    </div>
    
</body>
</html>