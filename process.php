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
            <h2 class="header" style=" color: #717171;">Emotion Prediction Result</h2>
            <div class="info" style="align-items: center;">

                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $text = $_POST['text'];
                    // Use Python script to generate plot
                    $command = escapeshellcmd("python3 run.py " . escapeshellarg($text));
                    shell_exec($command);
                    echo '<img src="result_plot.png" alt="Emotion Plot">';
                    echo '<br><br>';
                    echo '<a href="guide.php">Guide After Result</a>';
                }
                ?>
            </div>
        </div>
    </div>
    </div>
</body>

</html>