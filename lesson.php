<?php 
include "common/header.php"; 
?>



   <noscript>This site just doesn't work, period, without JavaScript</noscript>
   
   <h1>Algebra</h1>
   <h2>Lesson 1</h2>

   <!-- IF LOGGED IN -->

		<div class="whiteboardContainer">
			
			<p>Learning happens here.</p>
		</div>
        		
		<div class="buttonSet">
			
			<button type="button" class="button left buttonColors">Step Back</button>
			<button type="button" class="button middle buttonColors">Replay</button>
			<button type="button" class="button right buttonColors">Step Forward</button>
			
		</div>

   <!-- IF LOGGED OUT -->
	
		<!-- NO ACCESS-->



<?php 
include_once "common/sidebar.php"; 

include_once "common/footer.php"; 
?>