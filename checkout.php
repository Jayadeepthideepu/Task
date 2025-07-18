<?php
session_start();

echo "<h1>Checkout</h1>";

if (!empty($_SESSION['cart'])) {
    $total = 0;
    foreach ($_SESSION['cart'] as $item) {
        $total += $item['price'];
    }
    echo "<p>Thank you for your purchase!</p>";
    echo "<h3>Total Paid: ₹$total</h3>";
    $_SESSION['cart'] = []; // Clear cart
} else {
    echo "<p>Your cart is empty. Please add items first.</p>";
}

echo '<a href="index.html">← Back to Shop</a>';
?>
