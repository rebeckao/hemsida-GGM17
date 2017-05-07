var currentDeadlineNumber = 0;
var now = new Date().getTime();
var currentDeadline = deadlines[currentDeadlineNumber];
var distance = currentDeadline.dateTime - now;

while ((distance <= 0) && (currentDeadlineNumber < deadlines.length-1)) {
	currentDeadlineNumber++;
	currentDeadline = deadlines[currentDeadlineNumber];
	distance = currentDeadline.dateTime - now;
}

setNextDeadline(currentDeadline);

// Update the count down every 1 second
var x = setInterval(function() {

    // Get todays date and time
    now = new Date().getTime();
    
    // Find the distance between now an the count down date
    distance = currentDeadline.dateTime - now;
        	
    // Output the result in an element with id="timer"
    document.getElementById("timer").innerHTML = getTimeRemaining(distance);
    
    // The count down is over
    if (distance <= 1000) {
		document.getElementById("timer").innerHTML = "NU";
    }
    if (distance <= 0) {
		currentDeadlineNumber++;
		if (currentDeadlineNumber < deadlines.length) {
			currentDeadline = deadlines[currentDeadlineNumber];
			document.getElementById("timer").innerHTML = getTimeRemaining(currentDeadline.dateTime - now);
			setNextDeadline(currentDeadline);
		} else {
			clearInterval(x);
			window.location.replace('http://www.nyan.cat/')
		}
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

function setNextDeadline(nextDeadline) {
	for (i = 1; i <= 3; i++) {
		setProgramItem(nextDeadline, i);
	}
}

function setProgramItem(nextDeadline, number) {
	var item = document.getElementById("item" + number);
	var numberOfItems = nextDeadline.items.length;
	if (numberOfItems >= number) {
		var item1 = nextDeadline.items[number - 1];
		document.getElementById("programItemName" + number).innerHTML = item1.itemName;
		if (typeof item1.speaker !== 'undefined') {
			document.getElementById("speaker" + number).innerHTML = item1.speaker;
		} else {
			document.getElementById("speaker" + number).innerHTML = "";
		}
		if (typeof item1.place !== 'undefined') {
			document.getElementById("place" + number).innerHTML = item1.place;
		} else {
			document.getElementById("place" + number).innerHTML = "";
		}
		item.style.display = "inline-block";
		item.style.maxWidth = (1/numberOfItems)*100 - 1 + "%";
	} else {
		item.style.display = "none";
	}
}

function twoDigits(n){
    return n > 9 ? "" + n: "0" + n;
}


