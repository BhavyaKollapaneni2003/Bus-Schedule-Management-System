<?php
require 'connection.php';
require 'sessionadmin.php';

session_destroy();
?>
<script type="text/javascript">
	alert("Successfully logout!");
	window.location = "adminlogin.php";
</script>
