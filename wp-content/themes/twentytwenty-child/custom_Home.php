<?php /* Template Name: CustomHome */ ?>


<?php
get_header();
?>
<div id="mainContent">
<button onclick="window.location.href='http://emanuelfrancis.co.uk/add-task/'">Add a Task</button>

  <?php
include_once 'includes/globals.php';
include_once 'includes/db-connect.php';

$All=1;

echo "<div id="."priorityTable".">";
include_once 'includes/print_priority_list.php';
echo "</div>";
include_once 'includes/upcoming_deadlines.php';
include_once 'includes/create_catagories_list.php';
echo "<div id="."tasksTable".">";
include_once 'includes/dropdown.php';
include_once 'includes/dropdownList.php';

echo "</div>";

?>
<?php
//include_once 'footer.php';
?>


<?php //get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php// get_footer(); ?>
</div>
