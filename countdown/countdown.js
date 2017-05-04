var currentDeadlineNumber = 0;
setNextDeadline(deadlines[currentDeadlineNumber]);

// Update the count down every 1 second
var x = setInterval(function() {

    // Get todays date and time
    var now = new Date().getTime();
    
    // Find the distance between now an the count down date
    var distance = deadlines[currentDeadlineNumber].dateTime - now;
        	
    // Output the result in an element with id="timer"
    document.getElementById("timer").innerHTML = getTimeRemaining(distance);
    
    // The count down is over
    if (distance <= 1000) {
		document.getElementById("timer").innerHTML = "NU";
    }
    if (distance <= 0) {
		currentDeadlineNumber = currentDeadlineNumber + 1;
		if (currentDeadlineNumber < deadlines.length) {
			document.getElementById("timer").innerHTML = getTimeRemaining(deadlines[currentDeadlineNumber].dateTime - now);
			setNextDeadline(deadlines[currentDeadlineNumber]);
		} else {
			clearInterval(x);
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
	setProgramItem(nextDeadline, 1);
	
	if (nextDeadline.items.length > 1) {
		setProgramItem(nextDeadline, 2);
		
		if (nextDeadline.items.length > 2) {
			setProgramItem(nextDeadline, 3);
		} else {
			document.getElementById("item3").style.display = "none";
		}
	} else {
		document.getElementById("item2").style.display = "none";
		document.getElementById("item3").style.display = "none";
	}
}

function setProgramItem(nextDeadline, number) {
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
	document.getElementById("item" + number).style.display = "inline-block";
}

function twoDigits(n){
    return n > 9 ? "" + n: "0" + n;
}
