
<!DOCTYPE HTML  >
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title>Untitled Document</title>
</head>
<body>
<?php 
require 'conekt.php';


$first_name = $_REQUEST['first_name'];
$last_name = $_REQUEST['last_name'];
$email = $_REQUEST['email'];
$Tel = $_REQUEST['Tel'];

$Marka = $_REQUEST['Marka'];
$Model = $_REQUEST['Model'];
$Date = $_REQUEST['Date'];
$Time = $_REQUEST['Time'];


$insert_sql = "INSERT INTO 
    'day1' (first_name, last_name, email, Tel, Marka, Model, Date1,Time1)
    VALUES('{$first_name}', 
    '{$last_name}','{$email}','{$Tel}',
    '{$Marka}','{$Model}','{$Date1}','{$Time1}')";
 $sql = ("SELECT * FROM users WHERE first_name='$first_name'");
    mysqli_query($insert_sql,$sql);
    echo "<p>Новая запись вставлена в базу!</p>";

?>
</body>
</html>






