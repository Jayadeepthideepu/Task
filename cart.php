<?php
session_start();

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $product = $_POST['product'];
    $price = $_POST['price'];
    $_SESSION['cart'][] = ['product' => $product, 'price' => $price];
}

echo "<h1>Your Cart</h1>";
$total = 0;

if (!empty($_SESSION['cart'])) {
    foreach ($_SESSION['cart'] as $item) {
        echo "<p>{$item['product']} - ₹{$item['price']}</p>";
        $total += $item['price'];
    }
    echo "<h3>Total: ₹$total</h3>";
} else {
    echo "<p>Your cart is empty.</p>";
}

echo '<a href="index.html">← Back to Shop</a>';
echo ' | <a href="checkout.php">Proceed to Checkout</a>';
?>
