// JavaScript Document
$(document).ready(function(){
	
$(".title_menu").mouseenter(function(){
	var id=$(this).attr("id");
	$.get("./html/"+id+".php",function(data){$(".side_bar").html(data);})
	$.get("./html/"+id+".php?q=1",function(data){$(".content").html(data);});
});

$(".content").mCustomScrollbar();


});