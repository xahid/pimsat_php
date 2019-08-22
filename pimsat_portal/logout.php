<?php 

include_once("config.php");


session_destroy();

unset($_SESSION['id']);

unset($_SESSION['name']);

?>
<script type="text/javascript">
	window.location="index.php";</script>
	