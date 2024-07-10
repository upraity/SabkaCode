<?php
require 'Router.php';

$router = new Router();

// Example route for user profile
$router->addRoute('GET', '#^/([a-zA-Z0-9_-]+)$#', function($username) {
    $profileDir = "profiles/" . $username;
    $profileFile = $profileDir . "/index.php";

    // Check if the directory and file exist
    if (!file_exists($profileDir)) {
        mkdir($profileDir, 0777, true);
    }

    // Check if the profile file exists
    if (!file_exists($profileFile)) {
        // Create a basic profile file
        $profileContent = "<?php\n";
        $profileContent .= "echo 'This is the profile page for " . htmlspecialchars($username) . "';\n";
        file_put_contents($profileFile, $profileContent);
    }

    // Serve the profile file
    include $profileFile;
});

// Dispatch the request
$router->dispatch($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);
?>
