var timerInterval;
var timeRemaining = 600; // 10 minutes in seconds

function startTimer() {
    updateTimer(); // Display initial time

    timerInterval = setInterval(function() {
        timeRemaining--;

        if (timeRemaining < 0) {
            stopTimer();
            alert("Timer has ended!");
            return;
        }

        updateTimer();
    }, 1000);
}



function updateTimer() {
    var minutes = Math.floor(timeRemaining / 60);
    var seconds = timeRemaining % 60;

    // Format the time string with leading zeros
    var formattedTime = formatTime(minutes) + ":" + formatTime(seconds);

    // Update the timer element
    document.getElementById("timer").textContent = formattedTime;
}

function formatTime(time) {
    return time.toString().padStart(2, '0');
}

startTimer();
