<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>students list</title>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>

<h1>Students list</h1>

<?php
require "stdArray.php";

foreach ($student as $key => $value) {
    echo "<a href='/student.php?id=$key'>$value[0] $value[1]</a><br>";
}
?>

</body>
</html>
