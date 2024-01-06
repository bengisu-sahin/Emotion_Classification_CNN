<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Text Emotion Predictor</title>
</head>
<body>
    <h1>Text Emotion Predictor</h1>

    <form action="process.php" method="post">
        <label for="text">Enter Text:</label>
        <input type="text" name="text" id="text" required>
        <button type="submit">Predict Emotion</button>
    </form>

    <?php
    if (isset($_GET['result'])) {
        echo $_GET['result'];
    }
    ?>
</body>
</html>
