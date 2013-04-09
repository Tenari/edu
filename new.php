<?php 
include "common/header.php"; 
?>

<div class="main">
	<h1>New Account</h1>		
	<form>
		<table border="0">
			<tr>
				<td>Account Name:</td>
				<td><input type="text" id="name"></td>
			</tr>
			<tr>
				<td>Password:</td>
				<td><input type="password" id="pw"></td>
			</tr>
			<tr>
				<td>Confirm Password:</td>
				<td><input type="password" id="cpw"></td>
			</tr>
			<tr>
				<td>Email: (optional)</td>
				<td><input type="email" id="name"></td>
			</tr>
			<tr>
				<td>Pay Method:</td>
				<td>
					<select name="method">
						<option value="PayPal">PayPal</option>
						<option value="Check">Check</option>
						<option value="AmazonPay">AmazonPay</option>
						<option value="Trial" selected>Free Trial</option>
				</td>
			</tr>
		</table>
		<input type="submit" value="Looks Good" class="sexy-button">
	</form>
</div>
	
<?php 
include_once "common/sidebar.php"; 

include_once "common/footer.php"; 
?>