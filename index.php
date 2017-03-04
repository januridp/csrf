<?php
require_once("config.php");
?>
<form action="output.php" method="post">
	<input type="hidden" name="csrf_name" value="<?php echo createToken();?>"/>
	<input type="text" name="nama"/>
	<button type="submit">Kirim</button>
</form>