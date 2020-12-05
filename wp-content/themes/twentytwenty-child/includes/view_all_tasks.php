<?php

$sql = "SELECT * FROM general_tasks";
if($result = mysqli_query($connect, $sql)){
  if(mysqli_num_rows($result) > 0){
    echo "<table>";
        echo "<tr>";
            echo "<th>ID</th>";
            echo "<th>Priority</th>";
            echo "<th>Catagory</th>";
            echo "<th>Task</th>";
            echo "<th>Desc</th>";
            echo "<th>Status</th>";
        echo "</tr>";
    while($row = mysqli_fetch_array($result)){
        echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['priority'] . "</td>";
            echo "<td>" . $row['catagory'] . "</td>";
            echo "<td>" . $row['task'] . "</td>";
            echo "<td>" . $row['task_desc'] . "</td>";
            echo "<td>" . $row['status'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    // Close result set
    mysqli_free_result($result);
}}
