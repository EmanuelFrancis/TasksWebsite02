<?php

include_once 'globals.php';

$sql = "SELECT catagory FROM general_tasks";
if($result = mysqli_query($connect, $sql)){
  if(mysqli_num_rows($result) > 0){

    while($row = mysqli_fetch_array($result)){

        $SelCat = $row['catagory'];
        $noOfCats = count($catagories);

          if ($noOfCats == 0) {
                  $catagories[] = "All";

          }else {
            $duplicate = duplicate_test($SelCat, $catagories);
            if ($duplicate == 1){
            }else {
              $catagories[] = $SelCat;

            }
          }

        }
        ?>
        <script type="text/javascript">
var catagories = <?php echo json_encode($catagories); ?>;

</script>
<script type="text/javascript" src="/js/custom-scripts.js"></script>
<?php
    mysqli_free_result($result);
}
}
