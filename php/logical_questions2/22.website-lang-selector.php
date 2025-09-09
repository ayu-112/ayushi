<!-- 22. Website Language Selector -->
<!-- Switch based on language code (en, fr, hi) and display message. -->










<?php

$lang = 'en'; // change this to 'en', 'fr', 'hi' to test

switch ($lang) {
    case 'en':
        $message = "Hello! Welcome to our website.";
        break;
    case 'fr':
        $message = "Bonjour! Bienvenue sur notre site web.";
        break;
    case 'hi':
        $message = "नमस्ते! हमारी वेबसाइट पर आपका स्वागत है।";
        break;
    default:
        $message = "Hello! Welcome to our website."; // default to English
}
?>

<!DOCTYPE html>
<html lang="<?php echo htmlspecialchars($lang); ?>">
<head>
    <meta charset="UTF-8" />
    <title>Language Selector</title>
</head>
<body>
    <h1><?php echo $message; ?></h1>
</body>
</html>
