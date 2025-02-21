const form = document.getElementById("auth-form");
const formTitle = document.getElementById("form-title");
const formButton = document.getElementById("form-button");
const toggleForm = document.getElementById("toggle-form");

// Track if it's a login or register form
let isLogin = true;

// Toggle between login and register
toggleForm.addEventListener("click", (e) => {
    e.preventDefault();
    isLogin = !isLogin;

    if (isLogin) {
        formTitle.textContent = "Login";
        formButton.textContent = "Login";
        toggleForm.textContent = "Nog geen account? Registreren";
    } else {
        formTitle.textContent = "Registreren";
        formButton.textContent = "Account aanmaken";
        toggleForm.textContent = "Heb je al een account? Login";
    }
});

// Form submission logic
form.addEventListener("submit", (e) => {
    e.preventDefault();

    const username = document.getElementById("username").value;
    const password = document.getElementById("password").value;

    if (isLogin) {
        // Login logic
        const storedUsers = JSON.parse(localStorage.getItem("users")) || [];
        const user = storedUsers.find(
            (user) => user.username === username && user.password === password
        );

        if (user) {
            alert("Succesvol ingelogd!");
            window.location.href = "startpagina.php"; // Redirect to start page
        } else {
            alert("Ongeldige inloggegevens. Probeer opnieuw.");
        }
    } else {
        // Register logic
        let storedUsers = JSON.parse(localStorage.getItem("users")) || [];
        if (storedUsers.some((user) => user.username === username)) {
            alert("Gebruikersnaam bestaat al. Kies een andere.");
        } else {
            storedUsers.push({ username, password });
            localStorage.setItem("users", JSON.stringify(storedUsers));
            alert("Account succesvol aangemaakt! Log nu in.");
            isLogin = true;
            formTitle.textContent = "Login";
            formButton.textContent = "Login";
            toggleForm.textContent = "Nog geen account? Registreren";
        }
    }
});
function validatePasswords() {
    const password = document.getElementById("password").value;
    const repeatPassword = document.getElementById("repeat-password").value;

    if (password !== repeatPassword) {
        alert("Passwords do not match. Please try again.");
        return false; // Voorkomt het indienen van het formulier
    }
    return true;
}