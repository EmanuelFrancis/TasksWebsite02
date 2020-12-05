<?php
session_start();

include_once 'db-connect.php';

if (isset($_POST['addTaskButton'])){
echo "dhfddfbdfbfdsbd";
}

$taskName = mysqli_real_escape_string($connect, $_POST['task']);
$taskNotes = mysqli_real_escape_string($connect, $_POST['task_desc']);
$taskPriority = mysqli_real_escape_string($connect, $_POST['priority']);

//Error handlers
//Check for empty field
if(empty($taskName) || empty($taskNotes) || empty($taskPriority)){
 echo "invalid0";
  exit();
}
  
      else{

        //Insert the user into the database
        $sql = "INSERT INTO general_tasks (task,task_desc,priority) VALUES ('$taskName','$taskNotes','$taskPriority')";

        if(!mysqli_query($connect,$sql)){
          echo 'Not Inserted';
        }         
		
    
        
                        echo 'Account successfully created, logging you in...';
                        exit();
                        }
                     

break;
