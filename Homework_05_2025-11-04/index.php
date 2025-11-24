<?php //Підключити файл data.php та створити змінні 
?>
<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Фруктова Вітрина</title>
    <!-- Підключаємо Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet" />
    <!-- Підключаємо іконки Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <!-- Підключаємо наші стилі -->
    <link rel="stylesheet" href="assets/css/styles.css" />
</head>
<body>
    <header class="site-header">
        <div class="header-top">
            <div class="header-container">
                <div class="site-title">
                    <a href="#">Фруктова Вітрина</a>
                </div>
                <nav class="site-nav">
                    <ul>
                        <li><a href="#">Головна</a></li>
                        <li><a href="#">Товари</a></li>
                        <li><a href="#">Акції</a></li>
                        <li><a href="#">Контакти</a></li>
                    </ul>
                </nav>
                <div class="cart-icon">
                    <a href="#"><i class="fas fa-shopping-cart"></i> Кошик</a>
                </div>
            </div>
        </div>
        <div class="header-banner">
            <div class="header-container">
                <div class="banner-content">
                    <h1>Свіжі Фрукти просто до вашого столу</h1>
                    <p>Широкий вибір найсмачніших фруктів за доступними цінами</p>
                    <a href="#products" class="buy-button">Переглянути товари</a>
                </div>
            </div>
            <div class="floating-blobs"></div>
        </div>
    </header>

    <!-- Flash Deals секція -->
    <section class="section flash-deals">
        <h2 class="section-title">Flash Deals</h2>
        <div class="flash-deals-container">
            <!-- додати сюди код для $flash_deals -->
        </div>
    </section>

    <!-- Products секція -->
    <section class="section products">
        <h2 class="section-title">Discover Our Products</h2>
        <div class="products-container">
            <!-- додати сюди код для $products -->
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-container">
            <div class="footer-section">
                <h3>Про нас</h3>
                <ul>
                    <li><a href="#">Наша історія</a></li>
                    <li><a href="#">Команда</a></li>
                    <li><a href="#">Кар'єра</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>Клієнтам</h3>
                <ul>
                    <li><a href="#">Доставка</a></li>
                    <li><a href="#">Оплата</a></li>
                    <li><a href="#">Повернення</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>Контакти</h3>
                <ul>
                    <li><a href="tel:+380123456789">+38 (012) 345-67-89</a></li>
                    <li><a href="mailto:info@fruitshop.com">info@fruitshop.com</a></li>
                    <li><a href="#">Адреса магазину</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 Фруктова Вітрина. Всі права захищені.</p>
        </div>
    </footer>

    <!-- GSAP Animation -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="assets/js/scripts.js"></script>
</body>
</html> 