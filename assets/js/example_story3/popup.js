/*
Enregistrer le temps d’une partie dans le tableau des scores

Vous utiliserez de l’AJAX pour enregistrer en base de données le score de l’utilisateur une fois sa partie terminée

Un message sous forme de popup s’affiche à l’écran informant l’utilisateur de son score. Un bouton lui permettre de rejouer s’affichera aussi dans la popup

Le bouton « Rejouer » est fonctionnel
*/

var open_closed = false;

function retryornot() {
    window.location.pathname = "home/empeurman/Coding/puissance-4/memory.php"
}


function opencloseForm() {
    if (open_closed == false) {
        document.getElementById("popupForm").style.display = "block";
        open_closed = true;
    } else {
        document.getElementById("popupForm").style.display = "none";
        open_closed = false;
    }
}