var now = new Date().getTime();
var currentDeadlineNumbers = [0, 0, 0];

for (i = 0; i < 3; i++) {
	var currentDeadline = deadlines_rooms[i][currentDeadlineNumbers[i]];
	var distance = currentDeadline.dateTime - now;

	while ((distance <= 0) && (currentDeadlineNumbers[i] < deadlines_rooms[i].length-1)) {
		currentDeadlineNumbers[i]++;
		currentDeadline = deadlines_rooms[i][currentDeadlineNumbers[i]];
		distance = currentDeadline.dateTime - now;
	}

	setNextDeadline(currentDeadline, i);
}

// Update the count down every 1 second
var x = setInterval(function() {

    now = new Date().getTime();
    
	for (i = 0; i < 3; i++) {
		
		if (currentDeadlineNumbers[i] < deadlines_rooms[i].length) {
		
			currentDeadline = deadlines_rooms[i][currentDeadlineNumbers[i]];		
			var distance = currentDeadline.dateTime - now;				
			setTimeRemaining(getTimeRemaining(distance), i);
			
			if (distance <= 1000) {
				setTimeRemaining("NU", i);;
			}
			if (distance <= 0) {
				currentDeadlineNumbers[i]++;
				if (currentDeadlineNumbers[i] < deadlines_rooms[i].length) {
					currentDeadline = deadlines_rooms[i][currentDeadlineNumbers[i]];
					setTimeRemaining(getTimeRemaining(currentDeadline.dateTime - now), i);
					setNextDeadline(currentDeadline, i);
				} else {
					clearRoom(i);
				}
			}
		}
	}
	
	if (
		currentDeadlineNumber[0] >= deadlines_rooms[0].length &&
		currentDeadlineNumber[1] >= deadlines_rooms[1].length &&
		currentDeadlineNumber[2] >= deadlines_rooms[2].length
	) {
		clearInterval(x);
		window.location.replace('http://www.nyan.cat/');
	}
	
}, 1000);

function getTimeRemaining(distance) {    
    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
	var timeRemaining = twoDigits(minutes) + ":" + twoDigits(seconds);
	if (days > 0 || hours > 0) {
		timeRemaining = twoDigits(hours) + ":" + timeRemaining;
	}
	if (days > 0){
		timeRemaining = twoDigits(days) + ":" + timeRemaining;
	}
	
	return timeRemaining;
}

function setNextDeadline(nextDeadline, number) {
	var item = document.getElementById("item" + number);
	document.getElementById("programItemName" + number).innerHTML = nextDeadline.itemName;
	if (typeof nextDeadline.speaker !== 'undefined') {
		document.getElementById("speaker" + number).innerHTML = nextDeadline.speaker;
	} else {
		document.getElementById("speaker" + number).innerHTML = "";
	}
	item.style.display = "inline-block";
}

function setTimeRemaining(timeRemaining, number) {
	document.getElementById("timer" + number).innerHTML = timeRemaining;
}

function clearRoom(number) {
	document.getElementById("item" + number).innerHTML = "";
}

function twoDigits(n){
    return n > 9 ? "" + n: "0" + n;
}
