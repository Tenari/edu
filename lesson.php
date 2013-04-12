<?php 
include "common/header.php"; 
?>



   <noscript>This site just doesn't work, period, without JavaScript</noscript>
   
   <h1>Algebra</h1>
   <h2>Lesson 1</h2>

   <!-- IF LOGGED IN -->

		<div id="whiteboardContainer">
			<p id= "whiteboardContent">Learning happens here.</p>
		</div>
        		
		<div class="buttonSet">
			
			<button type="button" class="button left buttonColors" onclick="stepBackward()">Step Back</button>
			<button type="button" class="button middle buttonColors">Replay</button>
			<button type="button" class="button right buttonColors" onclick="stepForward()">Step Forward</button>
			
		</div>
		
		<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js?ver=1.3.2'></script>
		<script src="js/lessons.js"></script>
		<script>
			initialize();
		</script>

   <!-- IF LOGGED OUT -->
	
		<!-- NO ACCESS-->



<?php 
include_once "common/sidebar.php"; 

include_once "common/footer.php"; 
?>