<?php include 'connection.php';
include 'topnav.php'; ?>
<body>
<?php
			$zz = $_POST['id'];
			$bname = $_POST['BUS_ID'];
		    $btype = $_POST['BUS_NAME'];
			$did= $_POST['DRIVER_ID'];
			
		
	 			$query = 'UPDATE bus set BUS_NAME ="'.$bname.'",DRIVER_ID="'.$did.'" WHERE
					BUS_ID ="'.$zz.'"';
					$result = mysqli_query($db, $query) or die(mysqli_error($db));
							
?>	
	<script type="text/javascript">
			alert("Update Successfull.");
			window.location = "bus.php";
		</script>
 <?php include 'footer.php'; ?>