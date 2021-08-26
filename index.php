<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Answer no 7</title>
</head>
<body>
<?php
$str1= '092007'; 
echo substr(chunk_split($str1, 2, ':'), 0, -1)."\n";
?>
</body>
</html>