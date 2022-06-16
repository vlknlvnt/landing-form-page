<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procell Form Deneme</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@200;300;400&display=swap" rel="stylesheet">
    
    <style>

        @import url('https://fonts.googleapis.com/css2?family=Mulish:wght@200;300;400&display=swap');

        * {
            box-sizing: border-box;
            padding: 0;
            margin: 0;
        }

        body {
            font-family: 'Mulish', sans-serif;
            display: flex;
            flex-direction: row;
        }


        /* left section starts */
        .page-left {
            width: 70%;
            height: 100vh;
            background-image: url(assets/images/bg.jpg);
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            position: relative;
            padding: 3rem;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }

        #small-logo {
            width: 150px;
        }

        h1 {
            font-weight: 400;
            color:rgb(250, 250, 250);
            font-size: 54px;
            padding: 36px 0;
        }

        .page-left > div {
            display: flex;
            flex-direction: row;
            align-items: center;
            margin: 16px 0;
        }

        p {
            font-weight: 400;
            color:rgb(250, 250, 250);
            font-size: 24px;
            margin-left: 15px;
            letter-spacing: 2px;
        }

        a {
            font-weight: 400;
            color:rgb(250, 250, 250);
            font-size: 18px;
            margin-top: auto;
            text-decoration: none;
            border: 3px #0ade9f solid;
            padding: 10px 15px;
            border-radius: 25px;
            letter-spacing: 2px;
            display: flex;
            flex-direction: row;
            align-items: center;
            transition: 0.3s;
        }

        a:hover {
            background-color: #0ade9f;
        }

        #phone-icon {
            display: block;
            margin-right: 10px;
        }

        #procell-girl {
            position: absolute;
            bottom: 30px;
            right: 40px;
            width: 440px;
            transform: scale(1);
        }


        /* left section ends */

        /* right section starts */
        .page-right {
            width: 30%;
            background-color: #0ade9f;
            display: flex;
            flex-direction: column;
            height: 100vh;
        }

        #main-logo {
            width: 100%;
            height: auto;
            display: block;
            min-height: 110px;
            max-height: 160px;
            object-fit: cover;
        }

        form {
            overflow-y: auto;
            overflow-x: hidden;
            display: flex;
            flex-direction: column;
            padding: 1rem 3rem;
            height: auto;
        }

        input {
            background-color: transparent;
            border:transparent;
            border-bottom: 2px solid rgba(255,255,255, .5);
            margin-bottom: 1rem;
            padding-bottom: 0.5rem;
            font-size: 16px;
            padding: 10px 0;
            color: rgb(250, 250, 250);
        }

        h2 {
            color: rgb(250, 250, 250);
            font-weight: bold;
            padding: 2rem 3rem 1rem 3rem;
        }

        input::placeholder {
            color: rgb(250, 250, 250);
            font-size: 16px;
            padding: 10px 0;
        }

        input:focus-visible {
            color: rgb(250, 250, 250); 
            font-size: 16px;
            outline: transparent;
            padding: 10px 0;
        }

        input:focus {
            outline: none;
        }

        button {
            width: 100%;
            background-color: #173560;
            color: rgb(250, 250, 250); 
            border-radius: 10px;
            font-size: 16px;
            min-height: 48px;
            transition: 0.3s;
            margin: 2rem 0;
            border:transparent;
        }

        button:hover {
            color:#173560;
            background-color: rgb(250, 250, 250); 
            cursor: pointer;
        }

        /* right section ends */

        /* success message starts */

        .modal {
            display: none;
            position: fixed; 
            z-index: 1; 
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; 
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
        }

        .form-success {
            position: absolute;
            z-index: 99;
            width: 45rem;
            height: 7rem;
            background-color: #173560;
            top:5rem;
            right: 50%;
            transform: translateX(50%);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            animation: slide-bottom;
            animation-duration: 0.8s;
        }

        .form-success p {
            margin-left: 0;
        }

        .close {
            width: 2rem;
            height: 2rem;
            top: 0.5rem;
            right: 0.5rem;
            color: white;
            font-size: 2rem;
            font-weight: bold;
            position: absolute;
        }

        .close:hover, .close:focus {
            cursor: pointer;
        }

        /* modal display animation starts */

        @keyframes slide-bottom {
            from {top: -7rem;}
            to {top: 5rem;}
        }

        /* modal display animation ends */

        /* success message ends */

        /* media queries start */

        @media only screen and (max-width: 1200px) {
            #procell-girl {
                width: 400px;
                transform: scale(0.8);
                bottom: 10px;
                right: 10px;
        }
        }

        @media only screen and (max-width: 992px) {
            body {
                flex-direction: column;
            }

            .page-left {
                width: 100%;
                height: auto;
                padding: 3rem 1.5rem;
            }

            p {
                letter-spacing: 0;
            }

            #procell-girl {
                width: 100%;
                position: static;
                margin-top: 1rem;
                margin-bottom: 2rem;
                transform: scale(1);
            }

            .page-right {
                width: 100%;
                justify-content: space-between;
            }

            h2 {
                padding-top: 1rem;
            }

            button {
                margin-top: 1rem;
                margin-bottom: 4rem;
                padding: 0 1rem;
            }
            
        }

        @media only screen and (max-width: 768px) {

            form {
                height: 70vh;
            }

            .form-success {
                width: 20rem;
                height: 9rem;
            }            
            
        }
       

        /* media queries end */

    </style>
</head>
<body>
    <?php if ( isset($_GET['success']) ): ?>
        <div class="modal" id="modal">
        	<div class="form-success">
                <span class="close" id="close">&times;</span>
                <p>Mesajınız başarıyla iletildi</p>
            </div>
        </div>
	<?php endif ?>

    <div class="page-left">
        <img id="small-logo" src="assets/images/mini-logo.png" alt="">
        <h1>Strom & Gas Profis aufgepasst</h1>
        <div><img src="assets/icons/icon2.svg"><p>Qc Ok 40 Euro</p></div>
        <div><img src="assets/icons/icon1.svg"><p>Verdienstmöglichkeiten im <br> Monat bis zu 5000 Euro</p></div>
        <div><img src="assets/icons/icon3.svg"><p>Top Daten!</p></div>
        <div><img src="assets/icons/icon4.svg"><p>Wochenende frei</p></div>
        <img id="procell-girl" src="assets/images/girl.png" alt="">
        <a href="tel:+905556969918"><img id="phone-icon" src="assets/icons/phone.svg" alt=""> +90 542 309 84 40</a>
    </div>
    <div class="page-right">
        <img id="main-logo" src="assets/images/main-logo.png" alt="">
        <h2>Hemen Başvur!</h2>
        <form method="POST" action="form-mail-post.php">
            <input type="text" id="adsoyad" name="adi_soyadi" placeholder="Ad Soyad" required>	
            <input type="text" id="telefon" name="telefon" placeholder="Telefon Numarası" required>	
            <input type="email" id="email" name="email" placeholder="Eposta adresi" required>	
            <input type="number" id="soru_1" name="soru_1" placeholder="Kaç Yıl Yurtdışında Bulundunuz?" required>	
            <input type="text" id="soru_2" name="soru_2" placeholder="Almancayı Nerede Öğrendiniz?" required>	
            <input type="text" id="soru_3" name="soru_3" placeholder="Daha Önce Home Office Çalıştınız Mı?" required>	
            <input type="text" id="soru_4" name="soru_4" placeholder="Satış Yaptınız Mı? Hangi Projelerde?" required>	
            <input type="text" id="soru_5" name="soru_5" placeholder="Evinizde Bilgisayar Var Mı?" required>	
            <input type="text" id="soru_6" name="soru_6" placeholder="Sizi Hangi Saatlerde Arayabiliriz?" required>	
            <input type="text" id="soru_7" name="soru_7" placeholder="Evden Çalışmaya Engel Durumunuz Var Mı?" required>
            <button type="submit">BAŞVUR</button>
        </form>
    </div>
    
</body>

<script>

    /* modal area starts */

    var windowLocation = window.location.href; // Getting the page url
    var modal = document.getElementById("modal"); // Getting the modal area
    var closeBtn = document.getElementById("close"); // Getting the close button

    /* when page returns as success, modal appears */
    if (windowLocation = 'http://localhost/procell/?success=1') {

        modal.style.display = "block";

    }

    closeBtn.onclick = function() {
        modal.style.display = "none";
    }   

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
    }

    /* modal area ends */

</script>
</html>