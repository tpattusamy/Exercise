<!DOCTYPE html>
<html>
    <head>
        <title>PHP Test</title>
            <?php require_once('logic.php'); ?>
        <style type='text/css'>
            body {
                background-color:<?=$background_color?>
            }
        </style>
    </head>

<body>
    <p>Current Date and Time is <?=$d?>
    <p>Current Time is  <?=$t?>
</body>
</html>