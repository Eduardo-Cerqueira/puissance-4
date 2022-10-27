/* var globale */
var allCard = []
var themes = document.getElementById('theme')
var mode = document.getElementById('menu')
var difficulty, theme, griltete;
var gril = document.getElementById('gril')
var jeu = document.getElementById('nilou')
var button = document.getElementById('jouer');

/* chronometre */

var startTime = 0
var start = 0
var end = 0
var diff = 0
var timerID = 0
function chrono() {
    end = new Date()
    diff = end - start
    diff = new Date(diff)
    var msec = diff.getMilliseconds()
    var sec = diff.getSeconds()
    var min = diff.getMinutes()
    var hr = diff.getHours() - 1
    if (min < 10) {
        min = "0" + min
    }
    if (sec < 10) {
        sec = "0" + sec
    }
    if (msec < 10) {
        msec = "00" + msec
    }
    else if (msec < 100) {
        msec = "0" + msec
    }
    document.getElementById("chrono").innerHTML = hr + ":" + min + ":" + sec + ":" + msec
    timerID = setTimeout("chrono()", 10)
}
function chronoStart() {
    start = new Date()
    chrono()
}

/* algo pour la gril */

themes.addEventListener('change', function () {
    theme = themes.value
})

mode.addEventListener('change', function () {
    difficulty = mode.value;

    if (difficulty == 'easy') {
        difficulty = 6
    }
    else if (difficulty == 'medium') {
        difficulty = 8
    }
    else if (difficulty == 'hard') {
        difficulty = 12
    }
    else if (difficulty == 'impossible') {
        difficulty = 20
    }
})

function fillCardArray() {
    var randCard = Math.floor(Math.random() * (201 - 1)+1)
        if (allCard.includes(randCard) == false) {
            allCard.push(randCard);
            allCard.push(randCard);
        } else fillCardArray();
}

button.addEventListener('click', function () {

    // On remplit AllCard pour sélectionner par la suite une valeur random à l'intérieur
    for (let index = 0; index < (difficulty**2) /2; index++) {
        fillCardArray();
    }


    if (griltete != undefined) jeu.removeChild(griltete);
       
    if (difficulty == undefined || theme == undefined) {

        var para = document.createElement("p")
        var erreur = document.createTextNode('faut choisir un thème avant gros con')
        para.appendChild(erreur)
        gril.appendChild(para)

    } else {

        chronoStart();

        griltete = document.createElement('table')
        var grilcorp = document.createElement('tbody')

        for (let index = 0; index < difficulty; index++) {
            var row = document.createElement('tr')
            for (let i = 0; i < difficulty; i++) {
                var random = Math.floor(Math.random() * (allCard.length-1)+1);
                var imgSrc = `./assets/images/themes/${themes.value}/${themes.value}${allCard[random - 1]}.jpeg`
                var cas = document.createElement("td")
                var img = document.createElement('img')
                img.src = imgSrc

                allCard.splice(random-1,1);

                cas.appendChild(img)
                row.appendChild(cas)

            }
            grilcorp.appendChild(row)
        }
        console.log(allCard);
        griltete.appendChild(grilcorp);
        jeu.appendChild(griltete)

    }

})












