$(document).ready(function()
{
$("#login").click(function(){
		$.post("ajax.php",
			{
				menue: $(".menuea").val()
			},
			function(data){
				$("#content").html(data);
			}
		);
	});
$("#ergebnisse").click(function(){
		$.post("ajax.php",
			{
				menue: $(".menueb").val()
			},
			function(data){
				$("#content").html(data);
			}
		);
	});
$("#termine").click(function(){
		$.post("ajax.php",
			{
				menue: $(".menuec").val()
			},
			function(data){
				$("#content").html(data);
			}
		);
	});
$("#impressum").click(function(){
		$.post("ajax.php",
			{
				menue: $(".menued").val()
			},
			function(data){
				$("#content").html(data);
			}
		);
	});
$("#ergebnisse").click(function(){
		$.post("ajax.php",
			{
				menue: $(".menuee").val()
			},
			function(data){
				$("#content").html(data);
			}
		);
	});
$("#dateneingabe").click(function(){
		$.post("ajax.php",
			{
				menue: $(".menuef").val()
			},
			function(data){
				$("#content").html(data);
			}
		);
	});
$("#informationen").click(function(){
		$.post("ajax.php",
			{
				menue: $(".menueg").val()
			},
			function(data){
				$("#content").html(data);
			}
		);
	});
$("#logout").click(function(){
		$.post("ajax.php",
			{
				menue: $(".menueh").val()
			},
			function(data){
				$("#content").html(data);
			}
		);
	}); 
$("#create").click(function(){
		$.post("ajax.php",
			{
				menue: $(".menuei").val()
			},
			function(data){
				$("#content").html(data);
			}
		);
	});
$("#news").click(function(){
		$.post("ajax.php",
			{
				menue: $(".menuej").val()
			},
			function(data){
				$("#content").html(data);
			}
		);
	});
$("#runden").click(function(){
		$.post("ajax.php",
			{
				menue: $(".menuek").val()
			},
			function(data){
				$("#content").html(data);
			}
		);
	});
$("#rechte").click(function(){
		$.post("ajax.php",
			{
				menue: $(".menuel").val()
			},
			function(data){
				$("#content").html(data);
			}
		);
	});
$("#support").click(function(){
		$.post("ajax.php",
			{
				menue: $(".menuem").val()
			},
			function(data){
				$("#content").html(data);
			}
		);
	});
$("#enter_team").click(function(){
		$.post("ajax.php",
			{
				menue: $("#menue_a").val(),
				rounds: $("#rounds_a").val(),
				edit: $("#edit_a").val()
			},
			function(data){
				$("#content").html(data);
			}
		);
	});  
});