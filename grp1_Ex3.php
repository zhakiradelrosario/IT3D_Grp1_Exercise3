<?php
  $file_path = 'delrosariozhakira_ex3.txt';
  $content = "Greetings! We are Group 1, currently pursuing a Bachelor of Science in Information Technology at Pamantasang Lungsod ng Muntinlupa.\n\nWe are focused on developing our skills and knowledge in IT and are eager to apply what we've learned to new and exciting projects.";


  file_put_contents($file_path, $content);

  
  echo "<div style='font-family: Arial, sans-serif; padding: 20px;'>";
  
  if (file_exists($file_path)) {
    echo "<h2 style='color: green;'>File $file_path exists!</h2>";
  } else {
    echo "<h2 style='color: red;'>File $file_path does not exist!</h2>";
  }

  echo "<h2 style='color: blue;'>File contents:</h2>";
  $file_lines = file($file_path);
  echo "<div style='border: 1px solid #ddd; padding: 10px; background-color: #f9f9f9;'>";
  foreach ($file_lines as $line) {
    echo "<p>$line</p>";
  }
  echo "</div>";

 
  $file_contents = file_get_contents($file_path);
  echo "<h2 style='color: darkblue;'>File contents from the file:</h2>";
  echo "<div style='border: 1px solid #ddd; padding: 10px; background-color: #f0f8ff;'>";
  echo "<p>$file_contents</p>";
  echo "</div>";

  echo "</div>";  
?>

