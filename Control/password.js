function togglePasswordVisibility() {
    var passwordInput = document.getElementById("password-in");
    if (passwordInput.type === "password") {
        passwordInput.type = "text";
    } else {
        passwordInput.type = "password";
    }
}

function PasswordVisibility() {
    var passwordInput = document.getElementById("password");
    if (passwordInput.type === "password") {
        passwordInput.type = "text";
    } else {
        passwordInput.type = "password";
    }
}

function nc() {
    var passwordInput = document.getElementById("password-nc");
    var btn = document.getElementById("vp");
    if (passwordInput.type === "password") {
        passwordInput.type = "text";
        btn.innerText = "Ocultar contraseña";
    } else {
        passwordInput.type = "password";
        btn.innerText = "ver contraseña";
    }
}