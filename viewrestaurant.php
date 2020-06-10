<?php
  $serverName = "jackerydb.database.windows.net";

  $connectionOptions = array(
    "Database" => "jackerydb",
    "Uid" => "jackery",
    "PwD" => "Jiashen123");

    //Establishes  the connection
    $conn = sqlsrv_connect($serverName, $connectionOptions);
    if (!$conn)
    {
        die("Error connection: ".sqlsrv_errors());
    }
    echo "Db Server: Connected!!!!";
    
    $tsql = "SELECT * FROM [dbo].[restaurant]";
    $getResults = sqlsrv_query($conn,$tsql);
    if  ($getResults == FLASE)
    {
        die(sqlsrv_errors());
    }
    while ($row = sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC))
    {
      echo "<tr>";
      echo "<td>".$row['r_id']."</td>";
      echo "<td>".$row['r_name']."</td>";
      echo "<td>".$row['r_address']."</td>";
      echo "<td>".$row['r_phone']."</td>";
      echo "</tr>";
    }
    sqlsrv_free_stmt($getResults);
?>
