document.addEventListener("DOMContentLoaded", function() {
    var vseHeartButton = document.getElementById('red1');
    var isRed = false;
    
    vseHeartButton.addEventListener('click', function() {
        if (isRed) {
            vseHeartButton.style.color = 'black';
        } else {
            vseHeartButton.style.color = 'red';
        }
        isRed = !isRed; // Toggle the state
    });
});
document.addEventListener("DOMContentLoaded", function() {
    var vseHeartButton = document.getElementById('red2');
    var isRed = false;
    
    vseHeartButton.addEventListener('click', function() {
        if (isRed) {
            vseHeartButton.style.color = 'black';
        } else {
            vseHeartButton.style.color = 'red';
        }
        isRed = !isRed; // Toggle the state
    });
});
document.addEventListener("DOMContentLoaded", function() {
    var vseHeartButton = document.getElementById('red3');
    var isRed = false;
    
    vseHeartButton.addEventListener('click', function() {
        if (isRed) {
            vseHeartButton.style.color = 'black';
        } else {
            vseHeartButton.style.color = 'red';
        }
        isRed = !isRed; // Toggle the state
    });
});
document.addEventListener("DOMContentLoaded", function() {
    var vseHeartButton = document.getElementById('red4');
    var isRed = false;
    
    vseHeartButton.addEventListener('click', function() {
        if (isRed) {
            vseHeartButton.style.color = 'black';
        } else {
            vseHeartButton.style.color = 'red';
        }
        isRed = !isRed; // Toggle the state
    });
});

        document.addEventListener("DOMContentLoaded", function() {
            var followButton = document.getElementById('follow');
            followButton.addEventListener('click', function() {
                if (followButton.textContent === 'Follow') {
                    followButton.textContent = 'Following';
                } else {
                    followButton.textContent = 'Follow';
                }
            });
        });
