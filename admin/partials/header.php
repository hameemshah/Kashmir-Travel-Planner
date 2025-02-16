<?php include 'config/db.php' ?>
<?php include 'config/login_functions.ini.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    <?php // Get the current script filename (like "index.php")
    $current_page = basename($_SERVER['SCRIPT_NAME']);

    // Define an array of pages where CSS should NOT be applied
    $exclude_css_pages = ['login.php', 'signup.php', 'change.php']; // Add pages you want to exclude

    // Only include CSS if the current page is NOT in the $exclude_css_pages array
    if (!in_array($current_page, $exclude_css_pages)) {
        echo '<link rel="stylesheet" href="css/style.css">';
        echo '<link rel="stylesheet" href="css/bootstrap.css">';
    } else {
        echo '<link rel="stylesheet" href="css/login.css">';
    }
?>
</head>
<body>