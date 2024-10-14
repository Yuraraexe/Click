<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Click</title>
</head>
<body>
<?php
setcookie("click", 0, time()+60*60*24*7);
setcookie("click", $_COOKIE["click"] + 1, time()+60*60*24*7);
?>
    <p><?php echo $_COOKIE["click"]; ?></p>
    <form action="index.php" method="post">
        <input type="submit" value="click">
    </form>
</body>
</html>