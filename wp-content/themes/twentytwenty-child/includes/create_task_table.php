<?php
include_once 'globals.php';

get_header();

if($result = mysqli_query($connect, $sql)){
  if(mysqli_num_rows($result) > 0){
$new_str = str_replace(' ', '', $chosenCat);
?>
<!-- <script type="text/javascript">var tableID = "<?//= $new_str ?>";</script>
<script type="text/javascript" src="/js/custom-scripts.js"></script>
-->
<?php
    echo "<table id=" . $new_str . ">";
        echo "<tr>";
            echo "<th>ID</th>";
            echo "<th>Priority</th>";
            echo "<th>Catagory</th>";
            echo "<th>Task</th>";
            echo "<th>Desc</th>";
            echo "<th>Status</th>";
        echo "</tr>";
        echo "<h3>" . $chosenCat . "</h3>";
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
      //  echo "</table>";
    //    echo "<br>";
//echo "<script>abc();</script>";
    }
    ?>
    <input type="button" class="deleteTask" value="Delete" name="Delete"   />
    <br>

<!--    <script type="text/javascript">var tableClass = "'.deleteTask'";</script>
    <script type="text/javascript" src="/js/custom-scripts.js"></script>
-->
<p id="demo"></p>
    <?php
    // Close result set
    mysqli_free_result($result);
    echo "squashed string is ".$new_str;

    // echo '<script type="text/javascript">abc();</script>';


}}
?>
<script type="text/JavaScript">

var tableID = "<?= $new_str ?>";

function abc(){
  var string = <?php echo "".$new_str ?>;
//  return "#"+String(tableID)+" tr";
  return "#<?php echo "".$new_str ?> tr";
}
document.getElementById("demo").innerHTML = abc();

$("#<?php echo "".$new_str ?> tr").click(function(){

   $(this).addClass('selected').siblings().removeClass('selected');
   var value=$(this).find('td:first').html();
   alert(value);
});

$('.deleteTask').on('click', function(e){
    alert($("#<?php echo "".$new_str ?> tr.selected td:first").html());
});


</script>
 <?php
