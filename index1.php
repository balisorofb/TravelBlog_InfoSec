<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: 'Roboto', sans-serif;
        }

        body {
            background: url("https://images.unsplash.com/photo-1529528744093-6f8abeee511d?auto=format&fit=crop&q=80&w=1740&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1pYWdlfHx8fGVufDB8fHx8fA%3D%3D");
            background-position: center;
            background-size: cover;
            background-clip: border-box;
            background-attachment: fixed;
            min-height: 100vh;
            background-color: #fff; /* Set a background color for the body */
        }

        .navbar {
            justify-content: space-between;
            align-items: center;
            width: 90%;
            color: #fff;
            padding: 10px 0;
        }

        .navbar-brand {
            cursor: pointer;
            width: 10%;
            margin-left: 7%;
        }

        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        li {
            display: inline-block;
            margin: 0 1rem;
            position: relative;
        }

        li a {
            text-decoration: none;
            font-weight: 600;
            color: #fff;
            transition: transform 0.2s;
        }

        li a:hover::before {
            content: '';
            width: 100%;
            height: 4px;
            background-image: linear-gradient(90deg, #91228f, #ed1621, #feee03, #2b2e90);
            background-size: 400% 100%;
            background-position: 100%;
            background-repeat: no-repeat;
            position: absolute;
            left: 0;
            bottom: 0;
            transition: background-position 0.3s;
        }

        li a:hover::before {
            background-position: 0;
        }

        li a:hover {
            transform: scale(1.1);
        }

        main{
            max-width: 100%;
            background-color: #faf0e6;
        }

        .container {
            max-width: 100%;
            padding: 10px;
        }

        .overview {
            padding: 20px;
            text-align: center;
        }

        .overview h3 {
            font-size: 24px;
            color: #000;
        }

        .overview p {
            font-size: 16px;
            color: #000;
        }

        .aboutTrad {
            padding: 20px;
            text-align: center;
        }

        .aboutTrad h3 {
            font-size: 24px;
            color: #000;
        }

        .aboutTrad p {
            font-size: 16px;
            color: #000;
        }


        .content {
            padding: 0 4rem;
            text-align: left;
        }

        .button {
            background-color: rgba(255, 255, 255, 1);
            color: red;
            padding: 15px 69px;
            margin-top: 2rem;
            border-radius: 15px 20px;
            font-size: 1.2rem;
            cursor: pointer;
            border: none;
            font-weight: 600;
            transition: all 0.6s ease;
        }

        .button:hover {
            background-color: rgba(255, 255, 255, 0.5);
            color: #000;
            box-shadow: 0 0 2px 3px #fff;
        }

        h2 {
            letter-spacing: 3px;
            color: darkorange;
            font-size: 5rem;
            margin-top: 9rem;
        }

        p {
            color: black;
            font-size: 1.8rem;
            margin-top: 2rem;
        }

        @media screen and (max-width: 768px) {
            /* Adjust styles for screens up to 768px wide */
            .button {
                left: 0;
            }

            .navbar-collapse {
                text-align: center;
            }

            h1 {
                font-size: 2.9rem;
            }
        }

        @media screen and (max-width: 350px) {
            /* Adjust styles for screens up to 350px wide */
            .button {
                width: 100%;
                font-size: 1rem;
            }

            h2 {
                font-size: 2rem;
            }
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="#"><img src="images/logo-black.png" width="100%"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Content</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Film</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <div class="content">
            <h2>TARA <span style="color: #fff;">LARO:</span> <br> <span style="font-size:70% ; color:black;">A 3D Animation Showcasing <br> Filipino Traditional Games </span></h2>
            <p>Let us preserve and recognize our cultural heritage with this 3D Animated Film <br> that showcases some of our Filipino Traditional Games.</p>
            <button class="button">Watch</button>
        </div>
    </div>


<main>
    <!-- Overview Section -->
    <div class="container">
        <section class="overview">
            <h3>Overview</h3>
            <p>Provide an overview of your project here.</p>
        </section>
    </div>


    <!-- Content for the About the Traditional Games section -->
    <div class="container">
    <section class="aboutTrad">
        <h3>About the Traditional Games</h3>
        <p >Learn about the rich history and cultural significance of the traditional games featured in our project.</p>
    </section>
</div>

<!-- Content for the Reviews section with PHP code and an automatic sliding carousel -->
<section id="reviews">
    <h3>Reviews</h3>
    <div id="review-carousel" class="carousel slide" data-ride="carousel" data-interval="5000">
        <div class="carousel-inner">
            <!-- PHP routine to Display Data -->
            <?php
                include_once("config1.php");
                $stmt = $mysqli->prepare("SELECT Comment, PostedDate FROM tblcomments ORDER BY id DESC");
                $stmt->execute();
                $stmt->bind_result($comment, $postedDate);
                $active = true; // To set the first item as active

                while ($stmt->fetch()) {
                    echo "<div class='carousel-item" . ($active ? ' active' : '') . "'>";
                    echo "<div class='card'>";
                    echo "<div class='card-body'>";
                    echo "<p class='comment'>" . htmlspecialchars($comment) . "</p>"; // Use htmlspecialchars to prevent XSS
                    echo "<p class='posted-date'>" . htmlspecialchars($postedDate) . "</p>";
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";
                    
                    $active = false; // Set active to false after the first item
                }
                $stmt->close();
            ?>
        </div>
        <a class="carousel-control-prev" href="#review-carousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#review-carousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>

<main>
        <!-- Footer section -->
        <footer>
            <p>&copy; 2023 Tara Laro</p>
        </footer>
    </div>

    <!-- Your script references here -->





    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
