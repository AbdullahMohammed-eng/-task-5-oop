<?php

require_once 'classes/Cart.php';

$cart = new Cart();

$productData = [
    'name' => 'PHP Book',
    'price' => 250
];

$cart->add(1, $productData);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Shopping Cart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container my-5">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Shopping Cart Items</h4>
        </div>
        <div class="card-body">
            <pre class="bg-light p-3 border rounded"><?php print_r($cart->getCart()); ?></pre>
        </div>
    </div>
</div>

</body>
</html>