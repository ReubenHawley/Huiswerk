<?php
$host = "localhost";
$user = "root";
$pass = "";
$databasename = "sakila";
function MaakVerbinding()
{
    global $host, $user, $pass, $databasename;
    $connection = mysqli_connect($host, $user, $pass, $databasename);
    if (!$connection) die("Unable to connect to MySQL: " . mysqli_error($connection));
    return $connection;
}

function SluitVerbinding($connection)
{
    mysqli_close($connection);
}

function Select($sql)
{
    $connection = MaakVerbinding();
    $result = mysqli_fetch_all(mysqli_query($connection, $sql), MYSQLI_ASSOC);
    SluitVerbinding($connection);
    return $result;
}
//opdracht1
$result = Select("SELECT * FROM store");
print_r($result);

//opdracht 2

function Opvullen(string $tekst, int $lengte){
    while (strlen($tekst)<$lengte){
        $tekst=$tekst."_";
    }
    return $tekst;
}

