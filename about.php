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
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        /* Header with background image */
        .header {
            background-color: gray; /* Example header image */

            color: #fff;
            text-align: center;
            padding: 100px 0;
            height: 80vh;
        }

        .header h1 {
            font-size: 3em;
            position: relative;
            padding: 10px 20px;
            margin-top: -50px;
        }

        .group-logo img {
            max-width: 20%;
            margin-top: -50px;
        }
        .about-button {
            background-color: #4CAF50;
            border: none;
            color: #fff;
            padding: 10px 20px;
            font-size: 1.5em;
            cursor: pointer;
            position: relative;
        }

        .about-button:hover {
            background-color: #45a049;
        }

        /* About the Client */
        .client-section {
            background-color: #f2f2f2;
            padding: 50px 0;
        }

        .client-content {
            display: flex;
            flex-direction: row;
            align-items: center;
            text-align: center;
        }

        .client-image {
            flex: 1;
            padding: 20px;
        }

        .client-image img {
            max-width: 50%;
        }

        .client-text {
            flex: 1;
            padding: 20px;
        }

        /* Our Team */
        .team-section {
            background-color: #333;
            color: #fff;
            padding: 50px 0;
        }
        .team-section h2 {
            margin-left:15px;
        }

        .team-members {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .team-member {
            flex: 0 0 25%;
            padding: 20px;
            transition: transform 0.3s;
            position: relative;
            overflow: hidden;
            text-align: center;
        }

        .team-member img {
            max-width: 300px;
            height: auto;
            border: 5px solid #fff;
            border-radius: 50%;
        }

        .team-member:hover {
            transform: scale(1.1);
        }

        .social-icons {
            position: absolute;
            bottom: -50px;
            left: 0;
            right: 0;
            text-align: center;
            background-color: rgba(0, 0, 0, 0.8);
            padding: 10px 0;
            transform: translateY(0);
            transition: transform 0.3s;
        }

        .team-member:hover .social-icons {
            transform: translateY(50px);
        }

        .social-icons a {
            font-size: 1.5em;
            color: #fff;
            margin: 0 10px;
        }
        .span{
            height: 0.5px;
            width: 80px;
            background: #777;
            margin: 30px 0;
        }
    </style>
</head>

<body>
    <div class="header">
        <div class="group-logo">
                <img src="images\group_logo.png" >
            <h1>About Us</h1> 
            <p>The team behind the project "Tara Laro: A 3D Animation Showcasing the Filipino Traditional Games" is a dedicated and multidisciplinary group of professionals driven by a shared passion for preserving and promoting Filipino cultural heritage. Comprising experienced animators, cultural historians, educational experts, and technology specialists, this diverse team collaborates harmoniously to achieve their central objective of reviving old-fashioned Filipino games.</p>
            <span><!-- line here --></span>
            <button class="about-button" onclick="scrollToClient()">Meet the Members</button>
        </div>
    </div>

    <div class="client-section" id="client">
        <div class="client-content">
            <div class="client-image">
                <img src="images\museo.png" alt="Client Image"> <!-- Example client image -->
            </div>
            <div class="client-text">
                <h2>About the Client</h2>
                <p>The Museo Pambata is a children's interactive museum. Unlike traditional museums where items are stored behind glass and touching is highly discouraged, Museo Pambata invites visitors to learn with the exhibits by using their total senses. It envisions itself as a discovery museum and resource center promoting Filipino global culture, children's advocacy programs, and creative educational programs with linkages to global communities. The museum also has regular programs and events for various sectors.</p>
            </div>
        </div>
    </div>

    <div class="team-section" id="team">
        <h2>Our Team</h2>
        <div class="team-members">
            <div class="team-member">
                <img src="images/fio.jpg" alt="Team Member 1"> <!-- Example team member image -->
                <h3>Fiona Maxine B. Balisoro</h3>
                <p>PROJECT MANAGER</p>

            </div>
            <div class="team-member">
                <img src="images/jays.png" alt="Team Member 2"> <!-- Example team member image -->
                <h3>Jayson Rhod R. Oquias</h3>
                <p>3D ANIMATOR/DEVELOPER</p>
                
            </div>
            <div class="team-member">
                <img src="images/joaqs.jpg" alt="Team Member 3"> <!-- Example team member image -->
                <h3>Joaquim Anselmo D. DelaCruz</h3>
                <p>FILM EDITOR/ANIMATOR</p>
                
            </div>
            <div class="team-member">
                <img src="images/jerome.jpg" alt="Team Member 4"> <!-- Example team member image -->
                <h3>Jerome C. Cobre</h3>
                <p>UI DESIGNER/ WEB DEVELOPER</p>
                
            </div>
            <div class="team-member">
                <img src="images/dean.jpg" alt="Team Member 5" > <!-- Example team member image -->
                <h3>Avonn C. Nova</h3>
                <p>PROJECT ADVISER</p>
            </div>
            
        </div>
    </div>

    <script>
        function scrollToClient() {
            var clientSection = document.getElementById("team");
            clientSection.scrollIntoView({ behavior: "smooth" });
        }
    </script>


<?php

include 'footer.php';
?>
</body>

</html>
