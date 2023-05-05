

function sendMail() {
    // SMTP JS
    // Mail : pointisapp@gmail.com
    // Password : Admin@123
    // CDN : https://smtpjs.com/v3/smtp.js
    // MDP : 12D339B32604D7C60676878A5DFAD104AD7B
    // Token : 193b80ea-7547-40a3-bafa-b8eb082adeb5

    const submitConst = document.getElementById('myForm'),
        emailAdminConst = document.getElementById('email-admin'),
        prenomAdminConst = document.getElementById('prenom-admin'),
        nomAdminConst = document.getElementById('nom-admin'),
        telAdminConst = document.getElementById('tel-admin'),
        entrepriseConst = document.getElementById('raison-sociale'),
        defaultMDPConst = "bdgfe!";

    // format text 
    let ebody = `
    <b>Chez </b> ${prenomAdminConst.value}
    <br />
    <b>L'enregistrement votre entreprise sur Pointis à été un succès</>
    <br />
    <b>Vous indentifiants de connexion sont :<b />
        <br />
        <b>Login : </b> ${emailAdminConst.value}
        <br />
        <b>Mot de passe : </b> ${defaultMDPConst}
        <br /> `

    // Use token method
    Email.send({
        SecureToken: "193b80ea-7547-40a3-bafa-b8eb082adeb5",
        To: emailAdminConst.value,
        From: 'pointisapp@gmail.com',
        Subject: "Enregistrement " + entrepriseConst.value + " sur POINTIS",
        Body: ebody
    }).then(
        message => alert(message)
    );
}

function ajouter() {
    // console.log('Test');

    var locEnt = document.getElementById("localisation-entreprise").value;
    var telEnt = document.getElementById("tel-entreprise").value;
    var raisonSo = document.getElementById("user_name").value;
    var rccm = document.getElementById("RCCM").value;
    var emailEnt = document.getElementById("email-entreprise").value;
    var preAd = document.getElementById("prenom-admin").value;
    var nomAd = document.getElementById("nom-admin").value;
    var telAd = document.getElementById("tel-admin").value;
    var sexAd = document.getElementById("sex-admin").value;
    var matAd = document.getElementById("matricule-admin").value;
    var fnAd = document.getElementById("fn-admin").value;
    var emailAd = document.getElementById("email-admin").value;

    var dataAj = {
        RaisonSociale: raisonSo,
        RCCM: rccm,
        Email: emailEnt,
        Telephone: telEnt,
        Localisation: locEnt,
        Nom: nomAd,
        Prenom: preAd,
        Email: emailAd,
        Telephone: telAd,
        Sexe: sexAd,
        Titre: fnAd,
        Matricule: matAd
    };

    // console.log(dataAj);

    // var url = 'https://face.activactions.net/api/Societe/Inscription/' + log + '/' + pas;
    var url = 'https://face.activactions.net/api/Societe/Inscription';

    console.log(dataAj);
    fetch(url, {
        method: 'POST',
        headers: {
            'content-type': 'application/json'
        },
        body: JSON.stringify(dataAj)

    })
        .then(res => res.json())
        .then(data => {
            console.log(data);
        });
    // location.replace('./succes.php');

}

function ajouterLog() {

    var log = document.getElementById("login").value;
    var pas = document.getElementById("password").value;
    var pasConf = document.getElementById("password-confirm").value;

    var so = document.getElementById("raison-sociale").value;
    var rc = document.getElementById("RCCM").value;
    var tel = document.getElementById("telephone-entreprise").value;
    var id;

    /*
    var datas = {
            Login: log,
        Password: pas,
        SocieteID: id,
        Role: "Administrateur"
    }
        */


    // console.log(data);

    fetch('https://face.activactions.net/api/Societe/Get/')
        .then(res => res.json())
        .then(dataLog => {

            for (let item of dataLog) {
                console.log(item.RaisonSociale);
                // if ( so == `${item.RaisonSociale}` && rc == `${item.RCCM}` && tel == `${item.Telephone}`) {
                // if ( so == item.RaisonSociale && rc == item.RCCM && tel == item.Telephone) {
                if (act == item.RaisonSociale) {
                    id = item.SocieteID;

                    var datas = {
                        Login: log,
                        Password: pas,
                        SocieteID: id,
                        Role: "Administrateur"
                    }

                    fetch('https://face.activactions.net/api/Connexion/Post/', {
                        method: 'POST',
                        headers: {
                            'content-type': 'application/json'
                        },
                        body: JSON.stringify(datas)
                    });

                } else {
                    console.log("Informations ne correspondent pas");
                }
            }
        })

}


document.getElementById("myForm").addEventListener("submit", function (e) {
    document.getElementById("submit_button").addEventListener("click", function (e) {
        var response = grecaptcha.getResponse();
        if (response.length == 0) {
            //reCaptcha not verified
            alert("Merci de confirmer que vous etes un humain. SVP !!");
            e.preventDefault();
            return false;
        } else {
            sendMail();
            ajouter();
            return true;
            // location.replace('./succes.php');

        }

        //captcha verified
        //do the rest of your validations here

    });
})
