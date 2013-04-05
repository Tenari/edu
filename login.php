<?php 
include "common/header.php"; 
?>

<div class="main">
	<h1 style="margin-bottom:90px;">ZapClass</h1>		
	<form enctype="multipart/form-data" action="login.php" method="POST">
		<table border="0">
			<tr>
				<td>Account Name:</td>
				<td><input type="text" id="name"></td>
			</tr>
			<tr>
				<td>Password:</td>
				<td><input type="password" id="pw"></td>
			</tr>
		</table>
		<input type="submit" value="Login" class="sexy-button">
	</form>
</div>
	
<?php 
include_once "common/sidebar.php"; 

include_once "common/footer.php"; 
?>