
<?php
       
       include('connection.php');
       include('header.php');
       
        ?>  

<?php

	

			if (!isset($_GET['do']) || $_GET['do'] != 1) {
								
	
			switch ($_GET['type']) {
				case 'stop':
					$query = 'DELETE FROM stop
							WHERE
							LOCATION_ID = ' . $_GET['id'];
						$result = mysqli_query($db, $query) or die(mysqli_error($db));
						
?>
			<script type="text/javascript">
				alert("Successfully Deleted.");
				window.location = "stop.php";
			</script>				
				
			<?php
			//break;
				}
			}
			?>

