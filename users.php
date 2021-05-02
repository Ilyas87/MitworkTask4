<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "users_table";

$connection = mysqli_connect($host, $username, $password, $dbname);

if(!$connection){
    die("Нет подключение к базе данных: ".mysqli_connect_error());
}

$query = "SELECT u.*, r.name as 'role' FROM users as u LEFT JOIN roles as r ON u.id = r.user_id";
$db = mysqli_query($connection, $query);

while($data = mysqli_fetch_assoc($db)){
    $users[] = $data;
}

header("content-type: application/json");
echo json_encode($users, JSON_PRETTY_PRINT);

mysqli_close($connection);
exit;