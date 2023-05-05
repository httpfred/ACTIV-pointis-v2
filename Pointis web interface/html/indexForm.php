<!doctype html>
<html>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Login</title>
    <link href='#' rel='stylesheet'>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'>
    <script type='text/javascript' src='#'></script>


    <script type="text/javascript">
        var onloadCallback = function() {
            grecaptcha.render('html_element', {
                'sitekey': '6LeXFcYlAAAAAGRdDDj2cZBkchqzkQYUZoCxU3HP'
            });
        };
    </script>
    <script src="https://smtpjs.com/v3/smtp.js"></script>

    <style>
        #submit_button {
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
        }

        #submit_button:hover {
            cursor: pointer;
        }

        #submit_button {
            width: 100%;
            height: 100%;
            border-radius: 5px;
            border: 1px solid black;
            outline: none;

            height: 40px;
            width: 100px;
            border: none;
            border-radius: 5px;
            background-color: #0075ff;
            font-size: 12px;
            color: #fff;
            cursor: pointer;
            
        }

        #submit_button input:hover {
            background-color: blue;
            color: white;
            cursor: pointer;
        }

        ::-webkit-scrollbar {
            width: 8px;
        }

        /* Track */
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
            background: #888;
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: #555;
        }

        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap');

        * {
            padding: 0;
            margin: 0;
        }

        .container {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #eee;
        }

        .container .card {
            height: 500px;
            width: 800px;
            background-color: #fff;
            position: relative;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
            font-family: 'Poppins', sans-serif;
            border-radius: 20px;
        }

        .container .card .form {
            width: 100%;
            height: 100%;

            display: flex;
        }

        .container .card .left-side {
            width: 35%;
            background-color: #304767;
            height: 100%;
            border-top-left-radius: 20px;
            border-bottom-left-radius: 20px;
            padding: 20px 30px;
            box-sizing: border-box;

        }

        /*left-side-start*/
        .left-heading {
            color: #fff;

        }

        .steps-content {
            margin-top: 30px;
            color: #fff;
        }

        .steps-content p {
            font-size: 12px;
            margin-top: 15px;
        }

        .progress-bar {
            list-style: none;
            /*color:#fff;*/
            margin-top: 30px;
            font-size: 13px;
            font-weight: 700;
            counter-reset: container 0;
        }

        .progress-bar li {
            position: relative;
            margin-left: 40px;
            margin-top: 50px;
            counter-increment: container 1;
            color: #4f6581;
        }

        .progress-bar li::before {
            content: counter(container);
            line-height: 25px;
            text-align: center;
            position: absolute;
            height: 25px;
            width: 25px;
            border: 1px solid #4f6581;
            border-radius: 50%;
            left: -40px;
            top: -5px;
            z-index: 10;
            background-color: #304767;


        }


        .progress-bar li::after {
            content: '';
            position: absolute;
            height: 90px;
            width: 2px;
            background-color: #4f6581;
            z-index: 1;
            left: -27px;
            top: -70px;
        }


        .progress-bar li.active::after {
            background-color: #fff;

        }

        .progress-bar li:first-child:after {
            display: none;
        }

        /*.progress-bar li:last-child:after{*/
        /*  display:none;  */
        /*}*/
        .progress-bar li.active::before {
            color: #fff;
            border: 1px solid #fff;
        }

        .progress-bar li.active {
            color: #fff;
        }

        .d-none {
            display: none;
        }






















        /*left-side-end*/
        .container .card .right-side {
            width: 65%;
            background-color: #fff;
            height: 100%;
            border-radius: 20px;
        }

        /*right-side-start*/
        .main {
            display: none;
        }

        .active {
            display: block;
        }

        .main {
            padding: 40px;
        }

        .main small {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 2px;
            height: 30px;
            width: 30px;
            background-color: #ccc;
            border-radius: 50%;
            color: yellow;
            font-size: 19px;
        }

        .text {
            margin-top: 20px;
        }

        .congrats {
            text-align: center;
        }

        .text p {
            margin-top: 10px;
            font-size: 13px;
            font-weight: 700;
            color: #cbced4;
        }

        .input-text {
            margin: 30px 0;
            display: flex;
            gap: 20px;
        }

        .input-text .input-div {
            width: 100%;
            position: relative;

        }



        input[type="text"] {
            width: 100%;
            height: 40px;
            border: none;
            outline: 0;
            border-radius: 5px;
            border: 1px solid #cbced4;
            gap: 20px;
            box-sizing: border-box;
            padding: 0px 10px;
        }

        select {
            width: 100%;
            height: 40px;
            border: none;
            outline: 0;
            border-radius: 5px;
            border: 1px solid #cbced4;
            gap: 20px;
            box-sizing: border-box;
            padding: 0px 10px;
        }

        .input-text .input-div span {
            position: absolute;
            top: 10px;
            left: 10px;
            font-size: 14px;
            transition: all 0.5s;
        }

        .input-div input:focus~span,
        .input-div input:valid~span {
            top: -15px;
            left: 6px;
            font-size: 10px;
            font-weight: 600;
        }

        .input-div span {
            top: -15px;
            left: 6px;
            font-size: 10px;
        }

        .buttons button {
            height: 40px;
            width: 100px;
            border: none;
            border-radius: 5px;
            background-color: #0075ff;
            font-size: 12px;
            color: #fff;
            cursor: pointer;
        }

        .button_space {
            display: flex;
            gap: 20px;

        }

        .button_space button:nth-child(1) {
            background-color: #fff;
            color: #000;
            border: 1px solid#000;
        }

        .user_card {
            margin-top: 20px;
            margin-bottom: 40px;
            height: 200px;
            width: 100%;
            border: 1px solid #c7d3d9;
            border-radius: 10px;
            display: flex;
            overflow: hidden;
            position: relative;
            box-sizing: border-box;
        }

        .user_card span {
            height: 80px;
            width: 100%;
            background-color: #dfeeff;
        }

        .circle {
            position: absolute;
            top: 40px;
            left: 60px;
        }

        .circle span {
            height: 70px;
            width: 70px;
            background-color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            border: 2px solid #fff;
            border-radius: 50%;
        }

        .circle span img {
            width: 100%;
            height: 100%;
            border-radius: 50%;
            object-fit: cover;
        }

        .social {
            display: flex;
            position: absolute;
            top: 100px;
            right: 10px;
        }

        .social span {
            height: 30px;
            width: 30px;
            border-radius: 7px;
            background-color: #fff;
            border: 1px solid #cbd6dc;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-left: 10px;
            color: #cbd6dc;

        }

        .social span i {
            cursor: pointer;
        }

        .heart {
            color: red !important;
        }

        .share {
            color: red !important;
        }

        .user_name {
            position: absolute;
            top: 110px;
            margin: 10px;
            padding: 0 30px;
            display: flex;
            flex-direction: column;
            width: 100%;

        }

        .user_name h3 {
            color: #4c5b68;
        }

        .detail {
            /*margin-top:10px;*/
            display: flex;
            justify-content: space-between;
            margin-right: 50px;
        }

        .detail p {
            font-size: 12px;
            font-weight: 700;

        }

        .detail p a {
            text-decoration: none;
            color: blue;
        }






        .checkmark__circle {
            stroke-dasharray: 166;
            stroke-dashoffset: 166;
            stroke-width: 2;
            stroke-miterlimit: 10;
            stroke: #7ac142;
            fill: none;
            animation: stroke 0.6s cubic-bezier(0.65, 0, 0.45, 1) forwards;
        }

        .checkmark {
            width: 56px;
            height: 56px;
            border-radius: 50%;
            display: block;
            stroke-width: 2;
            stroke: #fff;
            stroke-miterlimit: 10;
            margin: 10% auto;
            box-shadow: inset 0px 0px 0px #7ac142;
            animation: fill .4s ease-in-out .4s forwards, scale .3s ease-in-out .9s both;
        }

        .checkmark__check {
            transform-origin: 50% 50%;
            stroke-dasharray: 48;
            stroke-dashoffset: 48;
            animation: stroke 0.3s cubic-bezier(0.65, 0, 0.45, 1) 0.8s forwards;
        }

        @keyframes stroke {
            100% {
                stroke-dashoffset: 0;
            }
        }

        @keyframes scale {

            0%,
            100% {
                transform: none;
            }

            50% {
                transform: scale3d(1.1, 1.1, 1);
            }
        }

        @keyframes fill {
            100% {
                box-shadow: inset 0px 0px 0px 30px #7ac142;
            }
        }










        .warning {
            border: 1px solid red !important;
        }


        /*right-side-end*/
        @media (max-width:750px) {
            .container {
                height: scroll;


            }

            .container .card {
                max-width: 350px;
                height: auto !important;
                margin: 30px 0;
            }

            .container .card .right-side {
                width: 100%;

            }

            .input-text {
                display: block;
            }

            .input-text .input-div {
                margin-top: 20px;

            }

            .container .card .left-side {

                display: none;
            }
        }
    </style>

</head>

<body className='snippet-body'>
    <div class="container">
        <div class="card">
            <form method="" action="" class="form" id="myForm">
                <div class="left-side">
                    <div class="left-heading">
                        <h3>Inscription</h3>
                    </div>
                    <div class="steps-content">
                        <h3>Etape <span class="step-number">1</span></h3>
                        <p class="step-number-content active">
                            Entrez les informations de l'entreprise
                        </p>
                        <p class="step-number-content d-none">
                            Entrez les information de l'admin
                        </p>
                        <p class="step-number-content d-none">

                        </p>
                        <p class="step-number-content d-none">

                        </p>
                    </div>
                    <ul class="progress-bar">
                        <li class="active">Information entreprise</li>
                        <li>informations admin</li>
                        <li>informations admin (suite)</li>
                        <!-- <li></li> -->
                    </ul>
                </div>
                <div class="right-side">
                    <div class="main active">
                        <small><i class="fa fa-smile-o"></i></small>
                        <div class="text">
                            <h2>Information sur l'entreprise</h2>
                            <p></p>
                        </div>
                        <div class="input-text">
                            <div class="input-div">
                                <input type="text" required require id="user_name">
                                <span>Nom de l'entreprise</span>
                            </div>
                            <div class="input-div">
                                <input type="text" id="RCCM" required>
                                <span>RCCM</span>
                            </div>
                        </div>
                        <div class="input-text">
                            <div class="input-div">
                                <input type="text" id="localisation-entreprise" required require>
                                <span>Localisation</span>
                            </div>
                            <div class="input-div">
                                <input type="text" id="email-entreprise" required require>
                                <span>E-mail</span>
                            </div>
                        </div>
                        <div class="input-text">
                            <div class="input-div">
                                <input type="text" id="tel-entreprise" required require>
                                <span>Telephone</span>
                            </div>
                        </div>

                        <div class="buttons">
                            <button class="next_button">Suivant</button>
                        </div>
                    </div>
                    <div class="main">
                        <small><i class="fa fa-smile-o"></i></small>
                        <div class="text">
                            <h2>informations sur l'admin</h2>
                            <p></p>
                        </div>
                        <div class="input-text">
                            <div class="input-div">
                                <input type="text" id="email-admin" required require>
                                <span>email personnel</span>
                            </div>
                            <div class="input-div">
                                <input type="text" id="nom-admin" required>
                                <span>Nom</span>
                            </div>
                        </div>
                        <div class="input-text">
                            <div class="input-div">
                                <input type="text" id="prenom-admin" required require>
                                <span>Prénom</span>
                            </div>
                        </div>
                        <div class="input-text">
                            <div class="input-div">
                                <input type="text" id="fn-admin" required require>
                                <span>Fonction</span>
                            </div>
                        </div>
                        <div class="buttons button_space">
                            <button class="back_button">Revenir</button>
                            <button class="next_button">Suivant</button>
                        </div>

                    </div>

                    <div class="main">
                        <small><i class="fa fa-smile-o"></i></small>
                        <div class="text">
                            <h2>Suite informations admin</h2>
                            <p></p>
                        </div>
                        <div class="input-text">
                            <div class="input-div">
                                <input type="text" id="tel-admin" required require>
                                <span>Telephone</span>
                            </div>
                            <div class="input-div">
                                <!-- <input type="text" id="sexe" required require> -->
                                <select name="sexe" id="sex-admin">
                                    <option value="default">Sexe</option>
                                    <option value="Masculin">Masculin</option>
                                    <option value="Feminin">Feminin</option>
                                </select>
                                <!-- <span>Sexe</span> -->
                            </div>
                        </div>
                        <div class="input-text">
                            <div class="input-div">
                                <input type="text" id="matricule-admin" required require>
                                <span>Matricule</span>
                            </div>
                        </div>

                        <div class="input-text recaptcha">
                            <div class="input-div">
                                <div id="html_element"></div>
                            </div>
                        </div>
                        <div class="buttons button_space">
                            <button class="back_button">Revenir</button>
                            <input type="button" value="Inscrire" class="submit_button border-0" id="submit_button" />

                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>

    <script>
        function sendMail() {
            // SMTP JS
            // Mail : pointisapp@gmail.com
            // Password : Admin@123
            // CDN : https://smtpjs.com/v3/smtp.js
            // MDP : 12D339B32604D7C60676878A5DFAD104AD7B
            // Token : 193b80ea-7547-40a3-bafa-b8eb082adeb5

            const raisonSoConst = document.getElementById("user_name").value;
            const emailEntConst = document.getElementById("email-entreprise").value;
            const preAdConst = document.getElementById("prenom-admin").value;
            const nomAdConst = document.getElementById("nom-admin").value;
            const emailAdConst = document.getElementById("email-admin").value;
            const defaultMDPConst = "bdgfe!";

            // format text 
            let ebody = `
                <b>Chez </b> ${preAdConst}
                <br />
                <b>L'enregistrement votre entreprise sur Pointis à été un succès</>
                <br />
                <b>Vos indentifiants de connexion sont :<b />
                <br />
                <b>Login : </b> ${emailAdConst}
                <br />
                <b>Mot de passe : </b> ${defaultMDPConst}
                <br /> `

            // Use token method
            Email.send({
                SecureToken: "193b80ea-7547-40a3-bafa-b8eb082adeb5",
                To: emailAdConst,
                From: 'pointisapp@gmail.com',
                Subject: "Enregistrement de " + raisonSoConst + " sur POINTIS",
                Body: ebody
            }).then(
                message => alert(message)
            );
            location.replace('./succes.php');
        }

        function ajouter() {

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
                RaisonSocialeSoc: raisonSo,
                RCCMSoc: rccm,
                EmailSoc: emailEnt,
                TelephoneSoc: telEnt,
                LocalisationSoc: locEnt,

                Nom: nomAd,
                Prenom: preAd,
                Email: emailAd,
                Telephone: telAd,
                Sexe: sexAd,
                Titre: fnAd,
                Matricule: matAd
            };

            // var url = 'https://face.activactions.net/api/Societe/Inscription/' + log + '/' + pas;
            //var url = 'https://face.activactions.net/api/Societe/Inscription';

            fetch('https://face.activactions.net/api/Societe/Inscription', {
                    method: 'POST',
                    headers: {
                        'content-type': 'application/json'
                    },
                    body: JSON.stringify(dataAj)

                })
                .then(res => res.json())
                .then(data => {
                    if (data.length > 0) {
                        sendMail();
                    } else {
                        alert("Veuillez réesseyer plutard !! Erreur serveur");
                    }
                });

            // Redirection apres envoie mail
            // location.replace('../interface/dist/employes/login.html');
        }

        document.getElementById("submit_button").addEventListener("click", function(e) {
            var response = grecaptcha.getResponse();
            if (response.length == 0) {
                //reCaptcha not verified
                alert("Merci de confirmer que vous etes un humain. SVP !!");
                e.preventDefault();
                return false;
            } else {
                ajouter();
                return true;
            }

            //captcha verified
            //do the rest of your validations here

        });
    </script>

    <!-- <script src="https://www.google.com/recaptcha/api.js"></script> -->
    <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer>
    </script>
    <script type='text/javascript' src='#'></script>
    <script type='text/javascript' src='#'></script>
    <script type='text/javascript' src='#'></script>
    <script type='text/javascript' src='#'></script>
    <script type='text/javascript'>
        // Code mise en forme
        var next_click = document.querySelectorAll(".next_button");
        var main_form = document.querySelectorAll(".main");
        var step_list = document.querySelectorAll(".progress-bar li");
        var num = document.querySelector(".step-number");
        let formnumber = 0;

        next_click.forEach(function(next_click_form) {
            next_click_form.addEventListener('click', function() {
                if (!validateform()) {
                    return false
                }
                formnumber++;
                updateform();
                progress_forward();
                contentchange();
            });
        });

        var back_click = document.querySelectorAll(".back_button");
        back_click.forEach(function(back_click_form) {
            back_click_form.addEventListener('click', function() {
                formnumber--;
                updateform();
                progress_backward();
                contentchange();
            });
        });

        var username = document.querySelector("#user_name");
        var shownname = document.querySelector(".shown_name");

        // comment
        var submit_click = document.querySelectorAll(".submit_button");
        submit_click.forEach(function(submit_click_form) {

            submit_click_form.addEventListener('click', function() {
                shownname.innerHTML = username.value;
                formnumber++;
                updateform();
            });
        });

        var heart = document.querySelector(".fa-heart");
        heart.addEventListener('click', function() {
            heart.classList.toggle('heart');
        });


        var share = document.querySelector(".fa-share-alt");
        share.addEventListener('click', function() {
            share.classList.toggle('share');
        });



        function updateform() {
            main_form.forEach(function(mainform_number) {
                mainform_number.classList.remove('active');
            })
            main_form[formnumber].classList.add('active');
        }

        function progress_forward() {
            // step_list.forEach(list => {

            //     list.classList.remove('active');

            // }); 


            num.innerHTML = formnumber + 1;
            step_list[formnumber].classList.add('active');
        }

        function progress_backward() {
            var form_num = formnumber + 1;
            step_list[form_num].classList.remove('active');
            num.innerHTML = form_num;
        }

        var step_num_content = document.querySelectorAll(".step-number-content");

        function contentchange() {
            step_num_content.forEach(function(content) {
                content.classList.remove('active');
                content.classList.add('d-none');
            });
            step_num_content[formnumber].classList.add('active');
        }


        function validateform() {
            validate = true;
            var validate_inputs = document.querySelectorAll(".main.active input");
            validate_inputs.forEach(function(vaildate_input) {
                vaildate_input.classList.remove('warning');
                if (vaildate_input.hasAttribute('require')) {
                    if (vaildate_input.value.length == 0) {
                        validate = false;
                        vaildate_input.classList.add('warning');
                    }
                }
            });
            return validate;

        }
    </script>
    <script type='text/javascript'>
        var myLink = document.querySelector('a[href="#"]');
        myLink.addEventListener('click', function(e) {
            e.preventDefault();
        });
    </script>

</body>

</html>