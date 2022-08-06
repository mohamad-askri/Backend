<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form action="main.php" method="POST">
    <input  type="text"   name="temp"  autocomplete="off">

    <input  type="submit"  value="submit">

</form>
<?php



$temp =null;

echo "temp :"  .$_POST['temp'] .'<br>';

if ($_POST['temp'] < 15) {
    echo " turn off";
} else {
    echo " turn on";
}


?>
</body>
</html>