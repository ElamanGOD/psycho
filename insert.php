<?php
session_start();
try {
if (isset($_POST['Name'])) { $Name = $_POST['Name']; if ($Name == '') { unset($Name);} }
if (isset($_POST['Surname'])) { $Surname=$_POST['Surname']; if ($Surname =='') { unset($Surname);} }
if (isset($_POST['email'])) { $email=$_POST['email']; if ($email =='') { unset($email);} }
if (isset($_POST['datetime'])) { $datetime=$_POST['datetime']; if ($datetime =='') { unset($datetime);} }
if (isset($_POST['phone'])) { $phone=$_POST['phone']; if ($phone =='') { unset($phone);} }
//заносим введенный пользователем product в переменную $product, если он пустой, то уничтожаем переменную


if (empty($Name) or empty($Surname)or empty($email)or empty($datetime)or empty($phone)) //если пользователь не ввел f_Name или product, то выдаем ошибку и останавливаем скрипт
{
exit ("Вы ввели не всю информацию, венитесь назад и заполните все поля!");


}
//если данные введены,то обрабатываем их
$Name = stripslashes($Name);
$Name = htmlspecialchars($Name);
$Surname = stripslashes($Surname);
$Surname = htmlspecialchars($Surname);
$email = stripslashes($email);
$email = htmlspecialchars($email);
$datetime = stripslashes($datetime);
$datetime = htmlspecialchars($datetime);


//удаляем лишние пробелы
$Name= trim($Name);
$email = trim($email);
$Surname= trim($Surname);
$datetime = trim($datetime);


// подключаемся к базе
require 'bd.php';// файл bd.php должен быть в той же папке, что и все остальные, если это не так, то просто измените путь

// проверка на существование пользователя с таким же логином
//$result = mysql_query("SELECT Name FROM zhayikselstroy WHERE Name='$Name'",$db);
//$myrow = mysql_fetch_array($result);
//if (!empty($myrow['Name'])) {
//exit ("Use another Name. This Name is under use!");
//}

//если такого нет, то сохраняем данные
//$result2 = mysql_query ("INSERT INTO zhayikselstroy (Name,lname,email,telephone,punkt,type) VALUES('$Name','$product','$email','$telephone','$punkt','$type')");

$stmt = $db->prepare("INSERT INTO clients (Name,Surname,Phonenumber,email,datetime) VALUES('$Name','$Surname','$phone','$email','$datetime')");
$stmt->bindParam("Name", $Name,PDO::PARAM_STR) ;

$sql = "SELECT * FROM clients WHERE Name='Zarina'";


$stmt->bindParam("Surname", $Surname,PDO::PARAM_STR) ;
$stmt->execute();
$uid=$db->lastInsertId(); // Last inserted row id
$db = null;
//$_SESSION['uid']=$uid;

//return true;
echo "Great! Your data is in the database. <a href='appoint.php'>Return</a>";
}
catch(PDOException $e) {
echo '{"error":{"text":'. $e->getMessage() .'}}';
}
