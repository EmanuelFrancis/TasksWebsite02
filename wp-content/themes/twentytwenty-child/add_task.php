<?php /* Template Name: Add Task */ ?>

<?php
get_header();
?>

<div class="wrap">
			<header class="page-header">
			<h1 class="page-title"></h1>
		</header>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
	    

<form id="addTaskForm" method="POST" onsubmit="return false">
	<h2>Add Task</h2>
	<br>
	<label for="taskName">Task Name: <span class="requiredStar">*</span></label> <input id="taskName" name="taskName" type="text">
	<br>
	<label for="taskNotes">Task Notes: <span class="requiredStar">*</span></label> <input id="taskNotes" name="taskNotes" type="text">
	<br>
	<label for="taskPriority">Task Priority: <span class="requiredStar">*</span></label> <input id="taskPriority" name="taskPriority" type="text">
	  
  <br>
      <button name="addTaskButton" onclick="submitAddTaskForm()">Add Task</button>
</form>

</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer();