<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Profile</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">
    <link rel="Stylesheet" href="<?php echo base_url('css/home/style.css'); ?>">
</head>
<body>
    <p id="title">Profil</p>
    <div id="dane">
        <?php
            echo $data 
        ?>
    </div>

    <div id="footer"><p>Aplikacja stworzona na potrzeby rekrutacji do CUI</p></div>
</body>
</html>