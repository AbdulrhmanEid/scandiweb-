<?php 


// Setup Variable To connect TO DB
$host = "localhost";
$user_name = "root";
$user_password ="";
$db_name = "scandiweb";

//Error Handling

try 
{
    $dsn = "mysql:host = $host ; dbname = $db_name";
    $connection = new PDO($dsn , $user_name, $user_password);
    return $connection ; 


}
catch(PDOException $err)
{
    echo "<h1>Error happens </h1>";
}

?>