<?php
include_once 'includes/globals.php';
include_once 'includes/db-connect.php';

//include_once 'view_catagory_tasks.php';
  // - - - snip - - -
//$chosenCat;
echo "yo5".$chosenCat;
if( empty( $chosenCat ) ) {
    $chosenCat = "Choose a catagory";
}
include_once 'includes/dropdownList.php';

//$chosenCat = "All";
//echo "yo".$numCats;

$chosenCat = $_POST['catagory'];
?>
<script type="text/javascript">var chosenCat = "<?= $chosenCat ?>";</script>
<script type="text/javascript" src="/js/custom-scripts.js"></script>
<?php
echo "yo4".$chosenCat;
?>
<script type="text/javascript">var tableID = "<?= $chosenCat ?>";</script>
<script type="text/javascript" src="/js/custom-scripts.js"></script>
<?php
  if(!empty($_POST['catagory']) )
  {
  //  if($All == 0){
//$chosenCat = $_POST['catagory'];
//echo "yo3".$chosenCat;
//include_once 'print_cat_list.php';
//    }
$SelectedDropdown == $chosenCat;
  // if($chosenCat === "All"){
      include_once 'print_cat_list.php';
//      $chosenCat = $_POST['catagory'];
  //  }else {

  //    echo "yo".$chosenCat;
    //  $errorMessage = "";
    //  if($chosenCat == "All"){
    //    $sql2 = "SELECT * FROM general_tasks";
    //  }else {
    //    $sql2 = "SELECT * FROM general_tasks WHERE catagory=$chosenCat";
    //  }
//  $All = 0;
//    $chosenCat = "All";
  //  include_once 'print_cat_list.php';

  //  }

//echo "</div>";
//echo "yoooo";
}else {
  $chosenCat = "All";
include_once 'print_cat_list.php';
//  echo "No, category is not set";

}
