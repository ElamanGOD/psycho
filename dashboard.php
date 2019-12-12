<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Админ панель</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style>
        table{
            margin: 10px;
        }
    </style>
</head>
<body>
    <table border="1">
    <caption>Заказы</caption>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Surname</th>
        <th>Phone number</th>
        <th>Email</th>
        <th>Date - Time</th>
    </tr>
    <?php 
        session_start();
        require_once "config.php";
        if($_SESSION["admin"]){
            $sql = "SELECT * FROM clients";
            $result = mysqli_query($link, $sql);
            if($result){
                if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_array($result)){
                        echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td><td>".$row[4]."</td><td>".$row[5]."</td></tr>";
                    }
                }
            }
        }
    ?>
    </table>
</body>
</html>