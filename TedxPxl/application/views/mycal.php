	<?php echo $calendar; ?>
	<script type="text/javascript">
		$(document).ready(function(){
			$('.calendar .day').click(function(){
			day_num = $(this).find('.day_num').html(); // checken welke dag geselecteerd is.
			day_data = prompt('Enter Stuff');

			});
		});
	</script>
