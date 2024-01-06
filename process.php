<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $text = $_POST['text'];

    // Use Python script to generate plot
    $command = escapeshellcmd("python3 run.py " . escapeshellarg($text));
    shell_exec($command);

    // Display the generated plot from the file
    echo '<h2>Emotion Prediction Result:</h2>';
    echo '<p>' . htmlspecialchars($text) . '</p>';
    echo '<img src="result_plot.png" alt="Emotion Plot">';
    echo '<br><br>';
    echo '<a href="index.php">Go Back</a>';
}
?>
