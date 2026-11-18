<?php
$name = '';
$greeting = 'Hello';

if ($name !== '') {
    $greeting = 'Welcome back, ' . $name;
}
?>
<!DOCTYPE html>
<html>
<head> ... 
    <title>if statement</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <h1>The Candy Store</h1>
    <h2><?= $greeting ?></h2>
</body>
</html>