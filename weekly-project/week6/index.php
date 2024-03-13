<?php
$title = "Session 06 Index";
//Define database configuration
define('DB_TYPE',"mysql");
const DB_HOST = "127.0.0.1";
const DB_PORT = "3306";
const DB_NAME = "si_saas_fed";
const DB_USER = "si_saas_fed";
const DB_PASS = "Password1";

//Create database connection (Database Source Name)
$dsn = DB_TYPE.':host='. DB_HOST. ';port='.DB_PORT.
    "dbname=".DB_NAME.'charset=utf8';
$pdo = new PDO($dsn, DB_USER,DB_PASS);

try {
//Error mode will be exception based
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Retrieve data as associative array
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $message = "Connected to DB";
}catch (PDOException $error){
    $message = "ERROR: Could not connect to DB";
}

/*add the close PHP tag after the close tag, on a new line, type HTML:5 and press the TAB key*/
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title ?></title>
</head>
<body>
<?php
echo "<p>{$message}</p>";
if(isset($error)){
    echo "<p>".$error->getMessage()."</p>";
}

if(isset($pdo)){
    $statement = $pdo->prepare('SELECT * FROM users');
    $statement ->execute();
    $results = $statement->fetchAll();

    foreach($results as $user){
        echo "<p>{$user['given_name']}</p>";
    }
}



?>

</body>
</html>
