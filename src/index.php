<?php
// Simple PHP + Docker sample
echo "<!doctype html><html><head><meta charset='utf-8'><title>PHP Docker Sample</title></head><body>";
echo "<h1>PHP + Docker — Sample App</h1>";
echo "<p>Current PHP version: " . phpversion() . "</p>";
echo "<p>Server software: " . (isset($_SERVER['SERVER_SOFTWARE']) ? $_SERVER['SERVER_SOFTWARE'] : 'n/a') . "</p>";
echo "<hr>";
echo "<p>Edit <code>src/index.php</code> and your changes will appear immediately if you use the docker-compose volume.</p>";
echo "</body></html>";
?>