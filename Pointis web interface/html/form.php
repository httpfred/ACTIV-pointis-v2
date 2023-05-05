<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="">
    <link rel="shortcut icon" href="" type="image/x-icon">
    <link rel="stylesheet" href="./style.css">

    <title></title>

   
<script type="text/javascript">
        var onloadCallback = function() {
            grecaptcha.render('html_element', {
                'sitekey': '6LeXFcYlAAAAAGRdDDj2cZBkchqzkQYUZoCxU3HP'
            });
        };

    </script>
    <script src="https://smtpjs.com/v3/smtp.js"></script>


    <style>
        body {
            background: linear-gradient(90deg, #C7C5F4, #776BCC);
        }

        #myForm {
            width: 80%;
            margin: auto;
        }

        .sign-elt {
            position: fixed;
            top: 0;
            bottom: 0;
        }

        .sign-left {
            left: 0;
        }

        .sign-right {
            right: 0;
            width: 50%;
            margin: 0;
            height: 100%;
            overflow: auto;
            padding: 0 10%;
        }

        .sign-elt {
            display: flex;
            flex-direction: column;
        }

        .img {
            width: 100%;
            height: 100%;
        }

        .myForm {
            display: flex;
            flex-direction: column;
        }

        #myForm label {
            display: flex;
            flex-direction: column;
            margin-top: 5px;
        }

        .via {
            border-radius: 5px;
            border: 1px yellowgreen solid;
        }

        #myForm #rappel {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            align-items: center;
            margin: 5px 0;
        }

        span {
            font-family: 'Courier New', Courier, monospace;
        }

        .notice {
            display: block;
            word-wrap: break-word;
            text-align: center;
            color: red;
            border: 0;
            border-radius: 4px/4px;
            padding: 5px 0;
            background-color: rgba(0, 0, 0, 0.09);
            width: 200px;
            margin: auto;
            margin-top: 10px;
            margin-bottom: 15px;
        }

        /* correction */
        .correct {
            border-color: rgba(13, 245, 13, 0.884);
            /* width: 100%; */
            border: 0;
        }

        .correct:focus {
            border-color: rgba(13, 245, 13, 0.884);
            box-shadow: 2px 2px 8px rgba(68, 191, 68, 0.5);
            /* width: 100%; */
        }

        .incorrect {
            border-color: rgba(255, 0, 0, 0.89);
            /* width: 100%; */
        }

        .incorrect:focus {
            border-color: rgba(255, 0, 0, 0.89);
            /* width: 100%; */
            box-shadow: 2px 2px 8px rgba(191, 68, 68, 0.5);
        }

        #myForm input {
            font-size: medium;
            display: flex;
            flex-direction: column;
            align-items: center;
            outline: none;
            padding: 10px;
            background-color: white;
            border: none;
            border-bottom: 1px rgba(0, 0, 0, 0.1) solid;
            width: 100%;
            /* border-radius: 5px; */
        }

        input:focus {
            width: 100%;
            border-color: rgba(82, 168, 236, 0.75);
            border: 1px rgba(0, 0, 0, 0.8);
            box-shadow: 0 0 8px rgba(82, 168, 236, 0.5);
        }

        select {
            display: flex;
            flex-direction: column;
            outline: none;
            border-radius: 5px;
            background-color: white;
            width: 100%;
        }

        select:focus {
            border-color: rgba(82, 168, 236, 0.75);
            box-shadow: 0 0 8px rgba(82, 168, 236, 0.5);
            border-radius: 5px;
            width: 100%;
        }

        /* End of correct */

        fieldset {
            border: 1px solid black;
            border-radius: 5px;
            background-color: white;
        }

        #body #submit {
            width: 200px;
            margin-top: 100px;
        }

        #body #submit:hover {
            background-color: #28a745;
            color: white;
        }

        #body .icon {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }


        #body .icon img {
            width: 50px;
        }


        .label-confirme {
            display: none;
        }

        .recap-send {
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            margin-top: 15px;
        }

        .none {
            display: none;
        }
    </style>


</head>

<body>

    <div class="container container--body shadow bg-light  p-1 mt-1" id="body">


        <!-- <form action="./succes.html" method="post" class="row text-start" id="myForm"> -->
        <form action="" method="" class="row text-start" id="myForm">
            <fieldset class="col-5 mt-5 border border-1 border-success">
                <legend class="text-success fw-bold">Information sur Entreprise</legend>
                <label class=" label" for="raison-sociale">Nom de l'entreprise</label> <input class="input-zone" type="text" name="nom" id="raison-sociale" required require>
                <label class=" label" for="RCCM">RCCM</label> <input class="input-zone" type="text" name="nom" id="RCCM" required require>
                <label class="label" for="localisation-entreprise">Localisation</label><input class="input-zone" type="text" name="localisation-entreprise" id="localisation-entreprise" required require>
                <label class="label" for="email-entreprise">Email entreprise</label> <input class="input-zone" type="email" name="email-entreprise" id="email-entreprise" required require>
                <label class="label" for="telephone-entreprise">Tel Entreprise</label><input class="input-zone" type="tel" name="telephone-entreprise" id="telephone-entreprise" required require>


            </fieldset>
            <div class="col-2 icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-building-fill text-light border border-1 rounded-5 bg-success p-2" viewBox="0 0 16 16">
                    <path d="M3 0a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h3v-3.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5V16h3a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1H3Zm1 2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1Zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1Zm3.5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5ZM4 5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1ZM7.5 5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5Zm2.5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1ZM4.5 8h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5Zm2.5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1Zm3.5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5Z" />
                </svg>
            </div>
            <fieldset class="col-5 mt-5 border border-1 border-success">
                <legend class="text-success fw-bold">Information sur admin</legend>
                <!-- <label class="label" for="login">Login</label><input class="input-zone" type="text" name="" id="login" required require> -->
                <label class="label" for="email-admin">Email</label> <input class="input-zone" type="email" name="email-admin" id="email-admin" placeholder="ex: mon-email@gmail.com" required require>
                <label class=" label" for="nom-admin">Nom</label> <input class="input-zone" type="text" name="nom-admin" id="nom-admin" required require>
                <label class=" label" for="prenom-admin">Prénoms</label> <input class="input-zone" type="text" name="prenom-admin" id="prenom-admin" required require>
                <label class=" label" for="fn-admin">Fonction</label> <input class="input-zone" type="text" name="fn-admin" id="fn-admin" required require>

                <label class=" label" for="matricule-admin">matricule</label> <input class="input-zone" type="text" name="matricule-admin" id="matricule-admin">
                <label class=" label" for="tel-admin">Telephone</label> <input class="input-zone" type="text" name="tel-admin" id="tel-admin" required require>
                <label class=" label" for="sexe-admin">Sexe</label> 
                <select name="sexe" id="sex-admin">
                                    <option value="default">Sexe</option>
                                    <option value="Masculin">Masculin</option>
                                    <option value="Feminin">Feminin</option>
                                </select>



            </fieldset>
            <!-- <input class="submit border border-1 rounded-1 p-2 m-auto mt-2" onclick="ajouter()" id="submit"type="button" value="Inscription"> -->
            <div class="recap-send" id="recap-send">
                <div id="html_element"></div>
                <!-- <button class="g-recaptcha submit border border-1 rounded-1 p-2 m-auto mt-2" data-sitekey="6LecmMUlAAAAAK9gaFZl64hOCuXXLUFuy8F_ur21" data-callback='onSubmit' data-action='submit' onclick={ajouter()}>Enregister</button> -->
                <input type="button" value="Enregister" id="submit" />
            </div>

        </form>
    </div>




    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

    <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer>



    <script>
        var submit = document.getElementById("submit");
        
        submit.addEventListener("click", function(e) {
            var response = grecaptcha.getResponse();
            if (response.length == 0) {
                //reCaptcha not verified
                alert("Svp!! Merci de confirmer que vous etes un humain.");
                e.preventDefault();
                return false;
            } else {
                location.replace('./succes.html');
            }

            //captcha verified
            //do the rest of your validations here

        });
    </script>

    <script>
        // SMTP JS
        // Mail : pointisapp@gmail.com
        // Password : Admin@123
        // CDN : https://smtpjs.com/v3/smtp.js
        // MDP : 12D339B32604D7C60676878A5DFAD104AD7B
        // Token : 193b80ea-7547-40a3-bafa-b8eb082adeb5

        const submit = document.getElementById('myForm');
        const emailAdmin = document.getElementById('email-admin');
           const prenomAdmin = document.getElementById('prenom-admin');
            const nomAdmin = document.getElementById('nom-admin');
           const telAdmin = document.getElementById('tel-admin');
            const entreprise = document.getElementById('raison-sociale');
            const defaultMDP = "bdgfe!";

        /*
        submit.addEventListener('submit', (e) => {
            e.preventDefault();

            // format text 
            let ebody = `
            <b>Chez </b> ${prenomAdmin.value} 
            <br/>
            <b>L'enregistrement votre entreprise sur Pointis à été un succès</>
            <br/>
            <b>Vous indentifiants de connexion sont :<b/>
            <br/>
            <b>Login : </b> ${emailAdmin.value} 
            <br/>
            <b>Mot de passe : </b> ${defaultMDP} 
            <br/> `

            // Use token method
            Email.send({
                SecureToken: "193b80ea-7547-40a3-bafa-b8eb082adeb5",
                To: emailAdmin.value,
                From: 'pointisapp@gmail.com',
                Subject: "Enregistrement " + entreprise.value + " sur POINTIS",
                Body: ebody
            }).then(
                message => alert(message)
            );
        });
        */

  
    </script>


    <!-- <script src="https://www.google.com/recaptcha/api.js"></script> -->

    <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer>
    </script>
    <script>
        // recaptcha V3
        /*
        function onSubmit(token) {
            document.getElementById("myForm").submit();
        }
        */

        function ajouter() {
            var raisonSo = document.getElementById("raison-sociale").value;
            var rccm = document.getElementById("RCCM").value;
            var emailEnt = document.getElementById("email-entreprise").value;
            var telEnt = document.getElementById("tel-entreprise").value;
            var locEnt = document.getElementById("localisation-entreprise").value;

            var nomAd = document.getElementById("nom-admin").value;
            var preAd = document.getElementById("prenom-admin").value;
            var emailAd = document.getElementById("email-admin").value;
            var telAd = document.getElementById("tel-admin").value;
            var sexAd = document.getElementById("sex-admin").value;
            var matAd = document.getElementById("matricule-admin").value;
            var fnAd = document.getElementById("fn-admin").value;

            
            // var log = document.getElementById("login").value;
            // var pas = document.getElementById("password").value;

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

            // var url = 'https://face.activactions.net/api/Societe/Inscription/' + log + '/' + pas;
            var url = 'https://face.activactions.net/api/Societe/Inscription';

            // console.log(data);
            fetch(url, {
                method: 'POST',
                headers: {
                    'content-type': 'application/json'
                },
                body: JSON.stringify(dataAj)

            });
            location.replace('./succes.php');

            // ajouterLog()

            // confirmer();


        }

        function confirmer() {
            var pas = document.getElementById("password").value;
            var pasConf = document.getElementById("password-confirm").value;
            var pasConfWord = document.getElementById("password-confirm-word");
            var conf = false;
            if (pas == pasConf) {
                pasConfWord.style.display = 'none';
                conf = true;
            } else {
                pasConfWord.style.display = 'flex';
                conf = false;
            }
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
    </script>



</body>

</html>