<?php
include_once 'globals.php';
include_once 'db-connect.php';

//$numCats = count_catagories($catagories);
//if(empty($chosenCat) ){
//  $chosenCat = "All";
//}
if($chosenPriority === "F"){
//  for($x=0;$x<$numCats;$x++)
//    {
//  $chosenCat = $catagories[$x];
//  echo "yo".$chosenCat;
  $sql = "SELECT * FROM general_tasks";
  //  print_cat_list($sql, $connect, $chosenCat);
  include_once 'create_priority_table.php';
//}
  }else {
    $sql = "SELECT * FROM general_tasks  WHERE priority='".$chosenPriority."'" ;
  //  print_cat_list($sql, $connect, $chosenCat);
  include_once 'create_priority_table.php';
  }


echo "yo2".$chosenPriority;
//echo "<br>";



function print_priority_list($sql, $connect, $chosenPriority){



      if($result = mysqli_query($connect, $sql)){
        if(mysqli_num_rows($result) > 0){
//$new_str = str_replace(' ', '', $chosenPriority);

    //      echo "<table id="'A'">";
    //      echo "<table id=" . $new_str . ">";
    echo "<table id=" . $chosenPriority . ">";
              echo "<tr>";
                  echo "<th>ID</th>";
                  echo "<th>Priority</th>";
                  echo "<th>Catagory</th>";
                  echo "<th>Task</th>";
                  echo "<th>Desc</th>";
                  echo "<th>Status</th>";
              echo "</tr>";
            //  echo "<h3>" . $chosenCat . "</h3>";
          //    echo "<h3>  chosenCat  </h3>";
          while($row = mysqli_fetch_array($result)){
            //  echo "<h3>" . $row['catagory'] . "</h3>";
              echo "<tr>";
                  echo "<td>" . $row['id'] . "</td>";
                  echo "<td>" . $row['priority'] . "</td>";
                  echo "<td>" . $row['catagory'] . "</td>";
                  echo "<td>" . $row['task'] . "</td>";
                  echo "<td>" . $row['task_desc'] . "</td>";
                  echo "<td>" . $row['status'] . "</td>";
              echo "</tr>";
echo "</table>";
?>
        <!--  echo "<input type=""button"" class=""deleteTask"" value=""Delete" "name=""Delete" "onclick=""fnselect()" "/>";-->

<?php

          }

          // Close result set
          mysqli_free_result($result);
      }}


}
