<?php include'header.php' ;?>
<?php include'connection.php' ;?>

 <div class="col-lg-12">
                <?php
                		$zz= $_POST['id'];
						$i= $_POST['START'];
					    $a= $_POST['END'];
						$b= $_POST['OUT_TIME'];
						$c= $_POST['DAY'];
				
					switch($_GET['action']){
						case 'add':			
								$query = "INSERT INTO schedule
								(BUS_ID, START, END, OUT_TIME, DAY)
								VALUES ('".$zz."','".$i."','".$a."','".$b."', '".$c." ')";
								mysqli_query($db,$query)or die (mysqli_error($db));
							
						break;
									
						}
				?>
    	<script type="text/javascript">
			alert("Successfully added.");
			window.location = "schedule.php";
		</script>
                    </div>