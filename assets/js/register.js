function validate() {
    var msg;
    var div1 = document.getElementById('div1');
    var str = document.getElementById("mdp").value; 
    if (str.match( /[0-9]/g) && 
            str.match( /[A-Z]/g) && 
            str.match(/[a-z]/g) && 
            str.match( /[^a-zA-Z\d]/g) &&
            str.length >= 9)
        msg = "<p style='color:green'>Mot de passe fort.</p>";
    else if (str.match( /[0-9]/g) &&
                str.match(/[A-Z]/g)&&
                str.match(/[a-z]/g)&&
                str.length >= 9){ 
        msg ="<div style='color: red'>test</div>";
        msg = "<p style='color:orange'>Mot de passe moyen.</p>";
        div1.clientWidth ='200px';}

    else
    msg = "<div style='background-  color:red'>Mot de passe faible.</div>";
    document.getElementById("msg").innerHTML= msg; 
} 

//test/