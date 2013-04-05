<?php 
include "common/header.php"; 
?>

<div class="main">

   <noscript>This site just doesn't work, period, without JavaScript</noscript>
   
   <!-- IF LOGGED IN -->

        <h1>Profile</h1>
		
		<div id="badges">
			<p>Badges:</p>
			<!-- prodecuraly figure out what goes here-->
			
		</div>
		
		<p>Rank:</p>
		<table border="1">
			
			<tr>
			
				<th>Math</th>
				<th>Music</th>
				<th>Computer Science</th>
				<th>History</th>
				<th>Economics</th>
				
			</tr>
			<tr>
			<!-- prodecuraly figure out what goes in these-->
				<td>1st/39473</td>
				<td>1st/39473</td>
				<td>2nd/39473</td>
				<td>321st/39473</td>
				<td>4th/39473</td>				
				
			</tr>
		
		</table>
		
		<form action="">
		   <div>
			<p>Settings:</p>
			  <p>Display Personal Info?</p>
			  <br />
			  <input type="radio" name="display" value="yes">Yes<br>
			  <input type="radio" name="display" value="no">No Way
			  <a href="deleteAccount.php">Delete Account?</a>
		   </div>
		</form>

   <!-- IF LOGGED OUT -->
	
		<!-- NO ACCESS-->

</div>

<?php 
include_once "common/sidebar.php"; 

include_once "common/footer.php"; 
?>