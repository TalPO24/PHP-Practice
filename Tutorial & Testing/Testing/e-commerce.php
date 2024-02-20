<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple E-commerce Website</title>
    <style>
        /* CSS Styles */
        .product {
            border: 1px solid #ccc;
            padding: 10px;
            margin: 10px;
            width: 200px;
            float: left;
        }
        .product img {
            max-width: 100%;
            height: auto;
        }
        .btn {
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }
        .btn:hover {
            background-color: #45a049;
        }
        #cart {
            border: 1px solid #ccc;
            padding: 10px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <h2>Products</h2>
    <?php
    // Sample products
    $products = [
        ['id' => 1, 'name' => 'Product 1', 'price' => 10, 'image' => 'product1.jpg'],
        ['id' => 2, 'name' => 'Product 2', 'price' => 20, 'image' => 'product2.jpg'],
        ['id' => 3, 'name' => 'Product 3', 'price' => 30, 'image' => 'product3.jpg']
    ];

    // Display products
    foreach ($products as $product) {
        echo "<div class='product'>";
        echo "<img src='images/{$product['image']}' alt='{$product['name']}'><br>";
        echo "<strong>{$product['name']}</strong><br>";
        echo "<span>\${$product['price']}</span><br>";
        echo "<input type='number' id='quantity_{$product['id']}' value='1' min='1'>";
        echo "<button class='btn' onclick='addToCart({$product['id']})'>Add to Cart</button>";
        echo "</div>";
    }
    ?>
    <div id="cart">
        <h2>Shopping Cart</h2>
        <ul id="cart-items"></ul>
        <p>Total: $<span id="total">0</span></p>
        <button class="btn" onclick="checkout()">Checkout</button>
    </div>

    <script>
        var cart = [];

        // JavaScript function to add items to the cart
        function addToCart(productId) {
            var quantity = document.getElementById("quantity_" + productId).value;
            var product = {
                id: productId,
                quantity: parseInt(quantity)
            };
            cart.push(product);
            updateCart();
        }

        // JavaScript function to remove items from the cart
        function removeFromCart(index) {
            cart.splice(index, 1);
            updateCart();
        }

        // JavaScript function to update the cart and total price
        function updateCart() {
            var cartList = document.getElementById("cart-items");
            var totalPrice = 0;
            cartList.innerHTML = "";
            cart.forEach(function (product, index) {
                var item = "<li>" + product.quantity + " x Product " + product.id + " - $" + (product.quantity * getProductPrice(product.id)) +
                    "<button class='btn' onclick='removeFromCart(" + index + ")'>Remove</button></li>";
                cartList.innerHTML += item;
                totalPrice += product.quantity * getProductPrice(product.id);
            });
            document.getElementById("total").innerHTML = totalPrice.toFixed(2);
        }

        // JavaScript function to get the price of a product by ID
        function getProductPrice(productId) {
            switch (productId) {
                case 1:
                    return 10;
                case 2:
                    return 20;
                case 3:
                    return 30;
                default:
                    return 0;
            }
        }

        // JavaScript function to simulate checkout
        function checkout() {
            alert("Checkout functionality would be implemented here.");
        }
    </script>
</body>
</html>
