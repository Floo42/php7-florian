<?php

$dsn = 'mysql:dbname=php;host=127.0.0.1';
$user= 'root';
$password = '';

$connection = new PDO($dsn, $user, $password);

$statement = $connection->prepare("
    SELECT * FROM fruit;
");
$statement->execute();

$fruits = $statement->fetchAll();

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
<h1>Liste de fruits</h1>
<pre>
<?php var_dump($fruits)?>
</pre>
    </body>
</html>
