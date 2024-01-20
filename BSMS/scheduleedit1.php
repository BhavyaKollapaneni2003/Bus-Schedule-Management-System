<?php include 'connection.php';
include 'topnav.php'; ?>
<body>
<?php
			$zz = $_POST['id'];
			$i = $_POST['START'];
		    $a = $_POST['END'];
			$b= $_POST['OUT_TIME'];
			
			
		
	 			$query = 'UPDATE schedule set START ="'.$i.'", END ="'.$a.'", OUT_TIME="'.$b.'"
				 WHERE BUS_ID ="'.$zz.'"';
					$result = mysqli_query($db, $query) or die(mysqli_error($db));
							
?>	
	<script type="text/javascript">
			alert("Update Successfull.");
			window.location = "schedule.php";
		</script>
 <?php include 'footer.php'; ?>