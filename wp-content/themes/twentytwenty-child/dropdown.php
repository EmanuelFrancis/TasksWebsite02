<?php
include_once 'db-connect.php';
include_once 'globals.php';

echo "<table>".$chosenCat;
echo "<table>";

if(isset($_POST["catagory"]) )
{
  $chosenCat = $_POST["catagory"];
  $errorMessage = "";
echo "<table>".$chosenCat;
  if($chosenCat === "All"){
    $sql2 = "SELECT * FROM general_tasks";
  }else {
    $sql2 = "SELECT * FROM general_tasks WHERE catagory=$chosenCat";
  }
$sql = $sql2;
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
  // - - - snip - - -
}
