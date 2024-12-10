function validateForm() {
    let isValid = true;
    
    
    document.querySelectorAll('.error').forEach(function(errorElement) {
        errorElement.innerHTML = '';
    });
    document.querySelectorAll('input').forEach(function(inputElement) {
        inputElement.classList.remove('invalid');
    });

    
    const name = document.getElementById("name").value;
    const email = document.getElementById("email").value;
    const password = document.getElementById("password").value;
    const mobile = document.getElementById("mobile").value;
    const check1 = document.getElementById("check1").value;

    if (name === "") {
        document.getElementById("nameError").innerHTML = "Full name is required.";
        document.getElementById("name").classList.add('invalid');
        isValid = false;
    }
    if (email === "") {
        document.getElementById("emailError").innerHTML = "Email id is required.";
        document.getElementById("email").classList.add('invalid');
        isValid = false;
    }
    if (password === "") {
        document.getElementById("passwordError").innerHTML = "Password is required.";
        document.getElementById("password").classList.add('invalid');
        isValid = false;
    }
    if (mobile === "") {
        document.getElementById("mobileError").innerHTML = "Mobile number is required.";
        document.getElementById("mobile").classList.add('invalid');
        isValid = false;
    }

    if (check1 === "") {
        document.getElementById("check1Error").innerHTML = "Click the check box is required.";
        document.getElementById("check1").classList.add('invalid');
        isValid = false;
    }

    return isValid; 
}