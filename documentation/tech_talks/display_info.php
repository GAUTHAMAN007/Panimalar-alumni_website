<?php
// Retrieve and display information from the text file
$info_file = file("info.txt", FILE_IGNORE_NEW_LINES);

foreach ($info_file as $info) {
    list($title, $content, $image) = explode("|", $info);
    echo '<div class="info-item">';
    echo "<h2>$title</h2>";
    echo "<img src='images/$image' alt='$title'>";
    echo "<p>$content</p>";
    echo '</div>';
}
?>
