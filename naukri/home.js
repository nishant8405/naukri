var loginPanel = document.getElementById("loginPanel");
var closePanel = document.getElementById("closePanel");
loginBtn.onclick = function() {
    loginPanel.classList.add("expanded"); 
}
closePanel.onclick = function() {
    loginPanel.classList.remove("expanded"); 
}
window.onclick = function(event) {
    if (event.target == loginPanel) {
        loginPanel.classList.remove("expanded");
    }
}



function togglePassword() {
    const passwordField = document.getElementById('password');
    const showPasswordText = document.getElementById('showPassword');
    const type = passwordField.type === 'password' ? 'text' : 'password';
    passwordField.type = type;
    showPasswordText.textContent = type === 'password' ? 'Show' : 'Hide';  // Toggle text
}