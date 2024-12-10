function togglePassword() {
    var passwordField = document.getElementById("password");
    var showPassword = document.getElementById("showPassword");
    
    if (passwordField.type === "password") {
        passwordField.type = "text";
        showPassword.innerHTML = "Hide";
    } else {
        passwordField.type = "password";
        showPassword.innerHTML = "Show";
    }
}

function validateForm() {
event.preventDefault();

document.querySelector('.errorBox').style.display = "none";
document.querySelector('.emailErr').style.display = "none";
document.querySelector('.passErr').style.display = "none";
document.querySelector('.wrongCredentials').style.display = "none";

var email = document.getElementById("email").value;
var password = document.getElementById("password").value;

var hasError = false;
if (!email) {
    document.querySelector('.emailErr').style.display = "block";
    hasError = true;
}

if (!password) {
    document.querySelector('.passErr').style.display = "block";
    hasError = true;
}

if (!hasError) {
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "login.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            var response = xhr.responseText;
            if (response === "wrong_email") {
                document.querySelector('.wrongCredentials').innerHTML = "There was an error with your E-mail. Please try again.";
                document.querySelector('.wrongCredentials').style.display = "block";
            } else if (response === "wrong_password") {
                document.querySelector('.wrongCredentials').innerHTML = "There was an error with your password. Please try again.";
                document.querySelector('.wrongCredentials').style.display = "block";
            } else if (response === "success") {
                window.location.href = "../../home.html";
            }
            document.querySelector('.errorBox').style.display = "block";
        }
    };
    xhr.send("email=" + email + "&password=" + password); 
} else {
    document.querySelector('.errorBox').style.display = "block";
}

return false; 
}
