<?php
$serverName = "jackerydb.database.windows.net";
$connectionOptions = array{
"Database" => "jackeryDb",
"Uid" => "jackery",
"PwD" => "Jiashen123");
//Establishes  the connection
$conn = sqlsrv_connect($serverName, $connectionOptions);
if (!$conn)
{
  die("Error connection: ".sqlsrv_errors());
  }
  echo "Db Server: Connected!!!!";
  }
?>
