const password = document.querySelector('#password');
const progress_bar = document.querySelector('.bar');

password.onkeyup = () => {
    checkPasswordStrength(password.value);
}

function checkPasswordStrength(password) {
    let strength = 0;

    if (password.match(/(?=.*[A-Z])/)) strength++; // Contient une majusucle

    if (password.match(/(?=.*[a-z])/)) strength++; // Contient une minuscule

    if (password.match(/(?=.*[0-9])/)) strength++; // Contient des chiffres

    if (password.match(/(?=.*[`!@#$%&?.])/)) strength++; // Contient des caractères spécials

    if (password.match(/(?=.{8})/)) strength++; // Contient 8 caractères

    if (strength == 0) {
        progress_bar.style.cssText = `width  : ${(strength / 5)*100}%; background-color: unset;`;
        document.getElementById("p1").innerHTML = "";
    } else if (strength == 1) {
        progress_bar.style.cssText = `width  : ${(strength / 5)*100}%; background-color: red;`;
        document.getElementById("p1").innerHTML = "weak";
    } else if (strength == 3) {
        progress_bar.style.cssText = `width  : ${(strength / 5)*100}%; background-color: yellow;`;
        document.getElementById("p1").innerHTML = "medium";
    } else if (strength == 5) {
        progress_bar.style.cssText = `width  : ${(strength / 5)*100}%; background-color: green;`;
        document.getElementById("p1").innerHTML = "strong";
    }
}