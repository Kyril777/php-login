<?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "london444";
$dbName = "test_site";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

try
{
    if ($conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName))
    {
      echo 'We\'re in!';
    }
    else
    {
        throw new Exception('Unable to connect');
    }
}
catch(Exception $e)
{
    echo $e->getMessage();
}
