let passwordInput1 = document.getElementById("password");
let toggleButton = document.getElementById("togglePassword");
let visible = false;

// Add event listener to the toggle button
toggleButton.addEventListener("click", function () {
    // Toggle visibility
    if (visible) {
        passwordInput1.type = "password";
        toggleButton.textContent = "Show";
        visible = false;
    } else {
        passwordInput1.type = "text";
        toggleButton.textContent = "Hide";
        visible = true;
    }
});

let strengthMeter = document.getElementById("strengthMeter");
function checkPasswordStrength() {
    let password = document.getElementById("password").value;
    let strengthText = document.getElementById("strengthText");
    let timeToCrack = document.getElementById("timeToCrack");

    // Set the strength and time to crack based on password criteria
    let strength = calculateStrength(password);
    strengthMeter.style.width = strength + "%";
    strengthText.textContent = "Strength: " + getPasswordStrengthLabel(strength);

    // Calculate time to crack
    let crackTime = calculateTimeToCrack(password, strength);
    timeToCrack.textContent = "Time to crack: " + crackTime;
}

function calculateStrength(password) {
    let upperCase = /[A-Z]/g;
    let lowerCase = /[a-z]/g;
    let numbers = /[0-9]/g;
    let symbols = /[^A-Za-z0-9]/g; // Anything that is not a letter or number is considered a symbol

    let strength = 0;
    if (password.match(upperCase)) strength += 30;
    if (password.match(lowerCase)) strength += 30;
    if (password.match(numbers)) strength += 20;
    if (password.match(symbols)) strength += 20;

    // Apply penalties for too short passwords
    if (password.length < 8) strength -= 20;
    if (password.length < 6) strength -= 30;

    // Ensure strength is within 0 to 100 range
    strength = Math.max(0, Math.min(strength, 100));
    return strength;
}

function getPasswordStrengthLabel(strength) {
    if (strength < 25) {
        strengthMeter.classList.add();
        return "Very Weak";
    } else if (strength < 50) {
        strengthMeter.classList.add("weak");
        strengthMeter.classList.remove("moderate");
        strengthMeter.classList.remove("strong");
        return "Weak";
    } else if (strength < 75) {
        strengthMeter.classList.add("moderate");
        strengthMeter.classList.remove("weak");
        strengthMeter.classList.remove("strong");
        return "Good";
    } else {
        strengthMeter.classList.add("strong");
        strengthMeter.classList.remove("moderate");
        strengthMeter.classList.remove("weak");
        return "Strong";
    }
}

function calculateTimeToCrack(password, strength) {
    // This is a simple example, you can modify this function
    // to calculate more accurate time estimates based on strength
    let seconds = Math.pow(26, password.length) / 1e6; // Assume brute force at 1 million tries per second

    // Adjust crack time based on strength
    if (strength < 25) {
        seconds *= 0.001; // Very Weak: Decrease time to crack
    } else if (strength < 50) {
        seconds *= 1; // Weak: Normal time
    } else if (strength < 75) {
        seconds *= 10; // Good: Increase time
    } else {
        seconds *= 100; // Strong: Much higher time
    }

    if (seconds < 1) {
        return "less than a second";
    } else if (seconds < 10) {
        return "1 second";
    } else if (seconds < 60) {
        return Math.round(seconds) + " seconds";
    } else if (seconds < 3600) {
        return Math.round(seconds / 60) + " minutes";
    } else if (seconds < 86400) {
        return Math.round(seconds / 3600) + " hours";
    } else if (seconds < 31536000) {
        return Math.round(seconds / 86400) + " days";
    } else {
        return "centuries";
    }
}
