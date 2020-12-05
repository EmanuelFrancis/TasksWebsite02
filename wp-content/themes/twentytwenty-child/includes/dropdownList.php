<?php
echo "<script>document.writeln(chosenCat);</script>";

//echo "vvvvvv".$chosen;
?>
<form id="catagory" method = "POST" >
  <label for="catagory">Choose a catagory:</label>
  <select name="catagory" onchange="this.form.submit()">
<option value="test"><?php echo "<script>document.writeln(chosenCat);</script>";?></option>
<?php


$itemsVal = array();
foreach ($catagories as $value) {
  // code...<?php
 echo "".$value;

 ?>


    <option value="<?php echo "".$value; ?>"><?php echo "".$value; ?></option>


    <?php
}

?>
  </select><br><br>

</form>


  <?php
