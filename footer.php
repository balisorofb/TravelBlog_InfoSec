


<!DOCTYPE html>
<html>
<head>
  <title>Responsive Footer with Animation</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

  <style>
    /* Reset some default styles */
    body, html {
      margin: 0;
      padding: 0;
      height: 100%;
    }

    /* Set up the footer */
    footer {
      background-color:  gray;
      color: #fff;
      padding: 20px;
      text-align: center;
      position: relative; /* Set the position to relative */
    }

    /* Style the social icons */
    .social-icons {
      list-style-type: none;
      padding: 0;
      margin-top: 10px;
    }

    .social-icons li {
      display: inline-block;
      margin: 0 5px;
    }

    .social-icons li a {
      color: #fff;
      font-size: 20px;
      transition: color 0.3s ease;
    }

    .social-icons li a:hover {
      color: #aaa;
    }

    p{
        font-size: 20px;
    }
    /* Add animations */
    @keyframes slideIn {
      0% {
        transform: translateY(100%);
        opacity: 0;
      }
      100% {
        transform: translateY(0);
        opacity: 1;
      }
    }

    @keyframes fadeIn {
      0% {
        opacity: 0;
      }
      100% {
        opacity: 1;
      }
    }

    /* Apply animations to the footer */
    .footer-content {
      animation: slideIn 1s ease-in-out;
    }

    .footer-content p,
    .footer-content .social-icons {
      animation: fadeIn 1s ease-in-out;
    }
  </style>
</head>
<body>

  <footer>
    <div class="footer-content">
      <p>© 2023 Rapscallion. Tara Laro.</p>
      <ul class="social-icons">
        <li><a href="#"><i class="fab fa-facebook"></i></a></li>
        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
      </ul>
    </div>
  </footer>
</body>
</html>
