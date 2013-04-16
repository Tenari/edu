var step;
var board;
var currentLesson;

function initialize() {
	step = 1;
	board= 0;
	currentLesson = new algebraLesson1();
	
	doBoard();
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
function getCurrentBoard() {
	return board;
}
function nextBoard() {
	board = board + 1;
	step = 0;
	doBoard(board);
}
function previousBoard() {
	board = board - 1;
	step = 0;
	doBoard(board);
}


function doBoard() {
	switch(board){
		case 0:
			currentLesson.board0();
			break;
		/*case 1:
			currentLesson.board1();
			break;
		case 2:
			currentLesson.board2();
			break;
		case 3:
			currentLesson.board3();
			break;
		case 4:
			currentLesson.board4();
			break;
		case 5:
			currentLesson.board5();
			break;
		case 6:
			currentLesson.board6();
			break;
		case 7:
			currentLesson.board7();
			break;
		case 8:
			currentLesson.board8();
			break;
		case 9:
			currentLesson.board9();
			break;
		case 10:
			currentLesson.board10();
			break;
		case 11:
			currentLesson.board11();
			break;*/
		default:
			break;
	}
}

function doStep(stepNumber) {
	switch(stepNumber){
		case 0:
			document.getElementById("whiteboardContent").innerHTML = "1 + 1 =";
			break;
		case 1:
			$("#whiteboardContent").append("<input id='answer' type='number' />");
			break;
		case 2:
			answerElement = document.getElementById("answer");
			if (answerElement != null && answerElement.value == 2){
				writeBoard("correct!");
			}
			else{
				step = 0;
				doStep(step);
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


function algebraLesson1(){
	this.board0=board0;
	function board0(){
		document.getElementById("lessonVoice").innerHTML="<audio id='lessonVoice' autoplay height='0' width='0'> <source src='sounds/A_L1_LINE1.mp3' type='audio/mpeg' /> <source src='sounds/A_L1_LINE1.wav' type='audio/wav' /> <embed height='50' width='100' src='sounds/A_L1_LINE1.mp3' /> </audio>";
		setTimeout(function(){writeBoard("1")}, 2200);
		setTimeout(function(){addStringToBoard(" + ")}, 2450);
		setTimeout(function(){addStringToBoard("1 ")}, 2700);
		setTimeout(function(){addStringToBoard("= ")}, 2950);
		setTimeout(function(){addNumberInputToBoard()}, 3200);
		$(document).keypress(function(event){
			if(event.which == 13){
				stepForward();
			}
		})
	}
}

function writeBoard(stringToWrite){
	document.getElementById("whiteboardContent").innerHTML = stringToWrite;
}
function addStringToBoard(stringToAdd){
	document.getElementById("whiteboardContent").innerHTML = document.getElementById("whiteboardContent").innerHTML + stringToAdd;
}
function addNumberInputToBoard(){
	$("#whiteboardContent").append("<input id='answer' type='number'' />");
}
