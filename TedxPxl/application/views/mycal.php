<<<<<<< .mine
<!DOCTYPE html>
<html>
<head>
<title>Event Kalendar</title>
<meta charset="UTF-8" />
<style type="text/css">
.calendar{
		font-family: Arial; font-size:12px;
		position:absolute;
		float:left;
		margin-top:2%;
		margin-left:5%;
}

table.calendar{
		margin: auto; border-collapse: collapse;
}

.calendar .days td{
		width: 20px; 
		height:20px; 
		padding: 4px;
		border: 1px solid #f02727;
		vertical-align: top;
		background-color: white;
	}
	
.calendar .days td:hover{
		background-color: #f02727;
}

.calendar .highlight{
		font-weight: bold;
		color: #f02727;
}
</style>

<script type="text/javascript" 
src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js">
</script>

</head>
<body>
=======
>>>>>>> .r95
	<?php echo $calendar; ?>
	<script type="text/javascript">
		$(document).ready(function(){
			$('.calendar .day').click(function(){
			day_num = $(this).find('.day_num').html(); // checken welke dag geselecteerd is.
			day_data = prompt('Enter Stuff');

			});
		});
	</script>
