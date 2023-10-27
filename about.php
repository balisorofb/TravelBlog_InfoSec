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
            font-size: 7em;
            border: 5px solid #fff;
            display: inline;
            padding: 10px 20px;
        }

        .about-button {
            background-color: #4CAF50;
            border: none;
            color: #fff;
            padding: 10px 20px;
            font-size: 1.5em;
            cursor: pointer;
            margin-top: 10%;
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
            max-width: 100%;
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
            max-width: 100%;
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
    </style>
</head>

<body>
    <div class="header">
        <h1>About Us</h1> <br>
        <button class="about-button" onclick="scrollToClient()">Scroll Down</button>
    </div>

    <div class="client-section" id="client">
        <div class="client-content">
            <div class="client-image">
                <img src="https://via.placeholder.com/400x300" alt="Client Image"> <!-- Example client image -->
            </div>
            <div class="client-text">
                <h2>About the Client</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et tristique nisl. Curabitur nec justo id nunc feugiat dignissim.</p>
            </div>
        </div>
    </div>

    <div class="team-section" id="team">
        <h2>Our Team</h2>
        <div class="team-members">
            <div class="team-member">
                <img src="https://via.placeholder.com/300x300" alt="Team Member 1"> <!-- Example team member image -->
                <h3>John Doe</h3>
                <p>Co-Founder</p>
                <div class="social-icons">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                </div>
            </div>
            <div class="team-member">
                <img src="https://via.placeholder.com/300x300" alt="Team Member 2"> <!-- Example team member image -->
                <h3>Jane Smith</h3>
                <p>Designer</p>
                <div class="social-icons">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                </div>
            </div>
            <div class="team-member">
                <img src="https://via.placeholder.com/300x300" alt="Team Member 3"> <!-- Example team member image -->
                <h3>Mark Johnson</h3>
                <p>Developer</p>
                <div class="social-icons">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                </div>
            </div>
            <div class="team-member">
                <img src="https://via.placeholder.com/300x300" alt="Team Member 4"> <!-- Example team member image -->
                <h3>Lisa Davis</h3>
                <p>Marketing</p>
                <div class="social-icons">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                </div>
            </div>
        </div>
    </div>

    <script>
        function scrollToClient() {
            var clientSection = document.getElementById("client");
            clientSection.scrollIntoView({ behavior: "smooth" });
        }
    </script>


<?php

include 'footer.php';
?>
</body>

</html>
