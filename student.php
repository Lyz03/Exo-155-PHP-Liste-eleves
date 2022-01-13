<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/assets/css/style.css">
    <title>students</title>
</head>
<body>

<?php
require "stdArray.php";

$studentId = $_GET["id"];
$studentId = (int) $studentId;

function printStudentInfo($id, $array) {
    if (key_exists($id, $array)) {
        foreach ($array[$id] as $value) {
            if (is_array($value)) {
                foreach ($value as $item) {
                    echo "<p>$item</p><br>";
                }
            } else {
                echo "<p>$value</p><br>";
            }
        }
    }

}

printStudentInfo($studentId, $student);

echo "<a href='index.php'>back to list</a>";
?>

</body>
</html>
