<?php 
include "common/header.php"; 
?>

<div class="main">

   <noscript>This site just doesn't work, period, without JavaScript</noscript>
   
   <h1>ZapClass</h1>
   <h2>Like school, but better.</h2>

   <!-- IF LOGGED IN -->

          <!-- Content here -->

   <!-- IF LOGGED OUT -->
	<div class="bigButtonSpace">
		<a href="new.php" title="Make an Account" class="button big buttonColors">Join</a>
		<a href="login.php" title="Login" class="button big buttonColors">Login</a>
	</div>
	<p>Now teaching lesson #[NUMBER].</p>

</div>

<?php 
include_once "common/sidebar.php"; 

include_once "common/footer.php"; 
?>