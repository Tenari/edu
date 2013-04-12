var step;

function initialize() {
	step = 0;
	doStep(step);
}
function getCurrentStep() {
	return step;
}
function stepForward() {
	step = step + 1;
	doStep(step);
}
function stepBackward() {
	step = step - 1;
	doStep(step);
}
function doStep(stepNumber) {
	switch(stepNumber){
		case 0:
			//stuff
			document.getElementById("whiteboardContent").innerHTML = "1 + 1 =";
			break;
		case 1:
			$("#whiteboardContent").append("<input id='answer' type='number' />");
			break;
		case 2:
			if(document.getElementById("answer").value != 2){
				step = 0;
				doStep(step);
			}
			else {
				document.getElementById("whiteboardContent").innerHTML = "correct!";
			}
			break;
		case 3:
			document.getElementById("whiteboardContent").innerHTML = "1 + 1 = 2";
			break;
		case 4:
			document.getElementById("whiteboardContent").innerHTML = "1 + 1 = ";
			$("#whiteboardContent").append("<img id='smiley' src='images/smiley.png' height=64 width=64/>");
			break;
		case 5:
			document.getElementById("whiteboardContent").innerHTML = "<img id='smiley' src='images/smiley.png' height=64 width=64/> = ";
			break;
		case 6:
			$("#whiteboardContent").append("<input id='answer' type='number' />");
			break;
		case 7:
			if(document.getElementById("answer").value != 2){
				step = 5;
				doStep(step);
			}
			else {
				document.getElementById("whiteboardContent").innerHTML = "correct!";
			}
			break;
		case 8:
			document.getElementById("whiteboardContent").innerHTML = "<img id='smiley' src='images/smiley.png' height=64 width=64/> = 2";
			break;
		case 9:
			document.getElementById("whiteboardContent").innerHTML = "";
			$("#whiteboardContent").append("<img id='smiley' src='images/smiley.png' height=64 width=64/>");
			break;
		case 10:
			document.getElementById("whiteboardContent").innerHTML = "1 + <img id='smiley' src='images/smiley.png' height=64 width=64/> = ";
			break;
		case 11:
			$("#whiteboardContent").append("<input id='answer' type='number' />");
			break;
		case 12:
			if(document.getElementById("answer").value != 3){
				step = 10;
				doStep(step);
			}
			else {
				document.getElementById("whiteboardContent").innerHTML = "correct!";
			}
			break;
		default:
			//stuff
	}
}