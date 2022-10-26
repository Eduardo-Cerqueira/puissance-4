const password_checker = document.querySelector('password-checker');
const password = document.querySelector('#password');
const progress_bar = document.querySelector('.bar');

password.onkeyup = () =>{
    //console.log(password.value)
    checkPasswordStrength(password.value);
}

function checkPasswordStrength(password) {
    let strength = 0;

    if (password.match(/(?=.*[A-Z])/)) strength++; // Si Contient une majusucle

    if (password.match(/(?=.*[a-z])/)) strength++; // Si Contient une majusucle

    if (password.match(/(?=.*[0-9])/)) strength++; // Si Contient une majusucle

    if (password.match(/(?=.*[`!@#$%&*])/)) strength++; // Si Contient une majusucle

    if (password.match(/(?=.{9})/)) strength++; // Si Contient une majusucle

    console.log(strength);

    switch(strength){
        case 0:
            progress_bar.style.cssText = `width  : ${(strength / 5)*100}%; background-color: unset;`;
            break;
        case 1:
            progress_bar.style.cssText = `width  : ${(strength / 5)*100}%; background-color: red;`;
            break;
        case 2:
            progress_bar.style.cssText = `width  : ${(strength / 5)*100}%; background-color: orangered;`;
            break;
        case 3:
            progress_bar.style.cssText = `width  : ${(strength / 5)*100}%; background-color: gold;`;
            break;
        case 4:
            progress_bar.style.cssText = `width  : ${(strength / 5)*100}%; background-color: blue;`;
            break;
        case 5:
            progress_bar.style.cssText = `width  : ${(strength / 5)*100}%; background-color: green;`;
            break;
    }
}