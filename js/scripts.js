function login() {
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;

    if (username === "usuario" && password === "contraseña") {
        alert("Inicio de sesión exitoso");
    } else {
        alert("Credenciales incorrectas. Inténtalo de nuevo.");
    }
}