<?php

@include 'config.php';
include 'header.php';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <style>
    @import url(https://fonts.googleapis.com/css?family=Oswald:400);
    @import url(https://fonts.googleapis.com/css2?family=Merriweather%3Awght%40900&family=Sumana%3Awght%40700&display=swap);

    .about{
		float: right;
		text-decoration: none;
		color: white;
		font-family: 'Oswald', sans-serif;
		font-size: 20px;
		overflow: hidden;
		letter-spacing: 3px;
		text-align:right; 
		margin-right:-700px;
	}

	.about:hover{
	color:yellow;
	}

    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    main{
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: rgba(0, 0, 0, 0.8);
    }

    .about-section{
        background: url(images/aboutbg.png) no-repeat left;
        background-size: 70%;
        margin-left: 30px;
        overflow: hidden;
        padding: 100px 0;
    }

    section{
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: center;
        height: 100vh;
        margin: 0;
        background: #e1e1e1;
        font-family: "Merriweather";
    }


    </style>
</head>

<body>



<main>
    <div class="about-section">
        <div class="inner-container">
            <h2>About Us</h2>
            <p class="text">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut 
            enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor 
            in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, 
            sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
            <div class="team">
            <a type='button' class="button" href="#team">Meet Our Team</a>
            </div>
        </div>
    </div>
</main>

<section>
<h1 id="team">Our Team</h1>
   <div class="person" style="--color: #DB7093">
   <div class="card">
        <div class="box">
            <div class="container-inner">
                <div class="circle"></div>
                <img src="images/jay.png">
            </div>
        </div>
        <div class="divider"></div>
        <h3>Jayson Oquias</h3>
        <p>Programmerist</p>
        <div class="icon">
            <ion-icon name="logo-facebook"></ion-icon>
            <ion-icon name="logo-twitter"></ion-icon>
            <ion-icon name="logo-instagram"></ion-icon>
        </div>
    </div>
    </div>

    <div class="person" style="--color: #202A44">
    <div class="card">
        <div class="box">
            <div class="container-inner">
                <div class="circle"></div>
                <img src="images/leop.png">
            </div>
        </div>
        <div class="divider"></div>
        <h3>Leo Paragatos</h3>
        <p>Programmerist</p>
        <div class="icon">
            <ion-icon name="logo-facebook"></ion-icon>
            <ion-icon name="logo-twitter"></ion-icon>
            <ion-icon name="logo-instagram"></ion-icon>
        </div>
    </div>
    </div>

    <div class="person" style="--color: #987554">
    <div class="card">
        <div class="box">
            <div class="container-inner">
                <div class="circle"></div>
                <img src="images/eloisa.png">
            </div>
        </div>
        <div class="divider"></div>
        <h3>Eloisa Senga</h3>
        <p>Programmerist</p>
        <div class="icon">
            <ion-icon name="logo-facebook"></ion-icon>
            <ion-icon name="logo-twitter"></ion-icon>
            <ion-icon name="logo-instagram"></ion-icon>
        </div>
    </div>
    </div>

    <div class="person" style="--color: #2C2C2B">
    <div class="card">
        <div class="box">
            <div class="container-inner">
                <div class="circle"></div>
                <img src="images/kar.png">
            </div>
        </div>
        <div class="divider"></div>
        <h3>Karina Dela Cruz</h3>
        <p>Programmerist</p>
        <div class="icon">
            <ion-icon name="logo-facebook"></ion-icon>
            <ion-icon name="logo-twitter"></ion-icon>
            <ion-icon name="logo-instagram"></ion-icon>
        </div>
    </div>
    </div>

</section>

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>
