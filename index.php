<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Text Emotion Predictor</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>

<body>
    <div class="wrapper">
        <div class="sidebar">
            <h2>MENU</h2>
            <ul>
                <li><a href="index.php"><i class="fas fa-home"></i>Home</a></li>
                <li><a href="about.php"><i class="fas fa-address-card"></i>About</a></li>
                <li><a href="guide.php"><i class="fas fa-blog"></i>Guide</a></li>
                <li><a href="contact.php"><i class="fas fa-address-book"></i>Contact</a></li>
            </ul>
            <div class="social_media">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
        <div class="main_content">
            <div class="header">Welcome!! Have a nice day.</div>
            <div class="info">
                <form action="process.php" method="post">
                    <textarea name="text" id="text" placeholder="Enter your text here..." required></textarea>
                    <button type="submit">Predict Emotion</button>
                </form>

                <?php
                if (isset($_GET['result'])) {
                    $result = $_GET['result'];
                    echo '<div id="result" class="' . $result . '">Emotion: ' . ucfirst($result) . '</div>';
                }
                ?>
            </div>
        </div>
    </div>
</body>
</html>