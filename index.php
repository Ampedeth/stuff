<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Store</title>
    <link rel="stylesheet" href="styles/main-styles.css">
</head>
<body>
    <!-- Header -->
    <header>
        <div class="container">
            <h1>My Online Store</h1>
            <nav>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#" id="about-us-btn">About Us</a></li>
                        <?php
                        if (!isset($_COOKIE['user']) || $_COOKIE['user'] == ''):
                         ?>

                        <li><a href="index_logIn.html">Login</a></li>

                        <?php else:?>
                            
                            <li><a href="#">Account</a></li>
                            <li><a href="php/exit.php">Sign out</a></li>
                            
                        <?php endif;?>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    <main>
        <div class="container main-container">
            <h2>Featured Products</h2>
            <div class="products-grid">
                <div class="product-item">
                    <img src="product1.jpg" alt="Product 1">
                    <h3>Product 1</h3>
                    <p>$25.00</p>
                    <button>Add to Cart</button>
                </div>
                <div class="product-item">
                    <img src="product2.jpg" alt="Product 2">
                    <h3>Product 2</h3>
                    <p>$30.00</p>
                    <button>Add to Cart</button>
                </div>
                <div class="product-item">
                    <img src="product3.jpg" alt="Product 3">
                    <h3>Product 3</h3>
                    <p>$40.00</p>
                    <button>Add to Cart</button>
                </div>
                <div class="product-item">
                    <img src="product4.jpg" alt="Product 4">
                    <h3>Product 4</h3>
                    <p>$50.00</p>
                    <button>Add to Cart</button>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer>
        <div class="container">
            <p>&copy; 2024 My Online Store. All rights reserved.</p>
            <p>Follow us: 
                <a href="#">Facebook</a> 
                <a href="#">Twitter</a> 
                <a href="#">Instagram</a>
            </p>
        </div>
        <div id="about-us-modal" class="modal">
            <div class="modal-content">
                <span class="close" id="close-about">&times;</span>
                <h2>About Us</h2>
                <p>We are an online store offering the best products at great prices.</p>
            </div>
        </div>
    </footer>
    <script src="scripts/mainScript.js"></script>
</body>
</html>
