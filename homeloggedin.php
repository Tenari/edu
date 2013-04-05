<?php include "common/header.php"; ?>

<div class="main">

   <noscript>This site just doesn't work, period, without JavaScript</noscript>
   
   <h1><a href="homeloggedin.php">[USERNAME]</a></h1>

   <!-- IF LOGGED IN -->

        <p>Hey, [TITLES] [NAME].</p><br />
		
		<p>You have [POINTS]total points.</p><br />
		
		<p>And [PAY-credits | PAY-days] left.</p><br />
		
		<a href="accountDetails.php">Account Details</a>
		
		<a href="pay.php">Buy More School!</a>
		
		<a href="lesson.php">[SUGGESTED NEXT LESSON]</a>
		
		<table border="1">
			
			<tr>
			
				<th>Algebra</th>
				<th></th>
				<th></th>
				<th></th>
				<th></th>
				
			</tr>
			<tr>
			
				<td>Lesson 1</td>
				<td>Lesson 2</td>
				<td>Lesson 3</td>
				<td>Lesson 4</td>
				<td>Lesson 5</td>				
				
			</tr>
			<tr>
			
				<td>Lesson 6</td>
				<td>Lesson 7</td>
				<td>Lesson 8</td>
				<td>Lesson 9</td>
				<td>Lesson 10</td>				
				
			</tr>
		
		</table>
		
		<table border="1">
			
			<tr>
			
				<th>Economics</th>
				<th></th>
				<th></th>
				<th></th>
				<th></th>
				
			</tr>
			<tr>
			
				<td>Lesson 1</td>
				<td>Lesson 2</td>
				<td>Lesson 3</td>
				<td>Lesson 4</td>
				<td>Lesson 5</td>				
				
			</tr>
			<tr>
			
				<td>Lesson 6</td>
				<td>Lesson 7</td>
				<td>Lesson 8</td>
				<td>Lesson 9</td>
				<td>Lesson 10</td>				
				
			</tr>
		
		</table>

   <!-- IF LOGGED OUT -->
		  <!-- content -->

</div>

<?php 
include_once "common/sidebar.php"; 

include_once "common/footer.php"; ?>