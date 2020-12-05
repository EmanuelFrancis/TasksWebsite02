
//var tableID = _document.getElementById("$new_str").getAttribute("id");
var catagories;
var chosenCat;

function submitAddTaskForma(){

 _document.getElementById("addTaskForm").onsubmit = "p1()";
 _document.getElementById("addTaskForm").method = "POST";
 _document.getElementById("addTaskForm").action = "wp-content/themes/twentytwenty-child/includes/insert.php";
 _document.getElementById("addTaskForm").submit();


}


function submitAddTaskForm(){

alert("Hello! I am an alert box!!");

}


function p1(){
alert("Hello! I am an alert box!!");
}

function _(x){
	return document.getElementById(x);
}

function selectDropdown(){
  alert("Hello! I am an alert box!!");
  _document.getElementById("catagory").onsubmit = "p1()";
  _document.getElementById("catagory").method = "POST";
  //_document.getElementById("catagory").action = "wp-content/themes/twentytwenty-child/includes/insert.php";
  _document.getElementById("catagory").submit();

//_("NickWork").style.display = "none";
}

function countCatas(){
  return catagories.length;
}

function getCat(x){
  var cat = catagories[x];
  return cat;
}

//function abc(){
//  alert("#"+tableID+" tr");
//}

//$("#"+tableID+" tr").click(function(){
//   $(this).addClass('selected').siblings().removeClass('selected');
//   var value=$(this).find('td:first').html();
//   alert(value);
//});

//$("#"+tableID+" tr").click(function(){
//   $(this).addClass('selected').siblings().removeClass('selected');
//   var value=$(this).find('td:first').html();
//   alert(value);
//});

//$(tableClass).on('click', function(e){
  //alert($("#"+tableID+" tr.selected td:first").html());
//  alert($("#"+tableID+" tr").html());
  //  alert($("#<?php echo "".$new_str ?> tr.selected td:first").html());
//});
