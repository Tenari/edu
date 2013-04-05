<?php 
include "common/header.php"; 
?>

<div class="main">

   <noscript>This site just doesn't work, period, without JavaScript</noscript>
   
   <!-- IF LOGGED IN -->

        <p>How do you want to do this?
		
			<div class="buttonSet">
			
				<button type="button">Per Day</button>
				<button type="button">Per Lesson</button>
			
			</div>
			
		</p>
		
		<div id="payOptions">
			<p>Pick One:</p>
			<table border="1">
			
				<tr>
				
					<td>30 days</td>
					<td> $6.99</td>
					
				</tr>
				<tr>
				
					<td>60 days</td>
					<td> $12.99</td>				
					
				</tr>
				<tr>
				
					<td>120 days</td>
					<td> $24.99</td>				
					
				</tr>
				<tr>
				
					<td>240 days</td>
					<td> $44.44</td>				
					
				</tr>
				<tr>
				
					<td>480 days</td>
					<td> $79.99</td>				
					
				</tr>
				<tr>
				
					<td>forever</td>
					<td> $200</td>				
					
				</tr>
		
			</table>
			
		</div>
		
		<form action="">
		   <div>
			<p>Info:</p>
			  <select name="method" id="method">
					<option value="PayPal">PayPal</option>
					<option value="Check">Check</option>
					<option value="AmazonPay">AmazonPay</option>
					<option value="Trial" selected>Free Trial</option>
			  <label for="method">Method:</label>
			  
				<label for="cardnumber">Card Number:</label>
				<input type="text" name="cardnumber" id="cardnumber" />

			  <input type="submit" name="pay" id="pay" value="Pay!" class="button" />
		   </div>
		</form>

   <!-- IF LOGGED OUT -->
	
		<!-- NO ACCESS-->

</div>

<?php 
include_once "common/sidebar.php"; 

include_once "common/footer.php"; 
?>