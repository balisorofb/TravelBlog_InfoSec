<?php

@include 'config.php';


require("header.php");


if(!isset($_SESSION['user_id']) || (trim($_SESSION['user_id']) == '')) {
	header("location: access_denied.php");
	exit();
}


?>

<!doctype html>
<html lang="en">
<head>
<style>
	.site-header{
		background-image:url('images/headerbg.png');
	}
	.fas{
		background:none;
		border:none;
		width:10%;
		border-radius:50%;
	}
	.fas:hover{
		color:yellow;
		
	}
	.postComment{
		margin-top: 20px;margin-right: 1px;
	}
	.sidebarArticle{
		left:70%;
	}
	.textComment{
		width:100%; height: 228px;
	}
</style>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">	
	<title>Tara-Laro</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="Stylesheet" href="css/home.css">
	<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>

<body>





<main>
	  
	<header class="site-header">
 
	  


  <h1 class="site-title">We are born to have an adventures</h1>
</header>


<div class="content-wrap">


<main class="main-posts-list">


	  <article class="article">

		  <div class="article-img-column">
			  <img class="article-img" src="images/boracay.png" alt="boracay">
		  </div>

		  <div class="article-text-column">
			  <ul class="tab-list">
				  <li class="tab-item">
					  <a class="tab-link" href="#0">Travel</a>
				  </li>
				  <li class="tab-item">
					  <a class="tab-link" href="#0">Fun</a>
				  </li>
			  </ul>
			  <h2 class="article-title">
				  <a class="article-title-link" href="#0">Reasons to visit Boracay's White Beach</a>
			  </h2>
			  <time class="article-datetime" datetime="2019-06-10">10 January 2023</time>    
			  <cite class="article-author">Jayson Oquias</cite>
			  <div class="article-content">
				  <p>Boracay's White Beach has been recognized as one of the most beautiful beaches in the world through the years. 
					There's something about its natural beauty – its crystal blue water, its pure white sand, and its magical sunsets.</p>
			  </div>
		  </div>

	  </article>
	  
	  <article class="article">

		  <div class="article-img-column">
			  <img class="article-img" src="images/korea.png" alt="korea">
		  </div>

		  <div class="article-text-column">
			  <ul class="tab-list">
				  <li class="tab-item">
					  <a class="tab-link" href="#0">Health</a>
				  </li>
				  <li class="tab-item">
					  <a class="tab-link" href="#0">Lifestyle</a>
				  </li>
			  </ul>
			  <h2 class="article-title">
				  <a class="article-title-link" href="#0">Reasons to Visit Seoul, South Korea</a>
			  </h2>
			  <time class="article-datetime" datetime="2019-06-10">10 January 2023</time>    
			  <cite class="article-author">Eloisa Senga</cite>
			  <div class="article-content">
				  <p>The best things to do in Seoul draw inquisitive travellers 
					from all over the world. Home to sleek skyscrapers and 
					shopping malls, as well as well-preserved royal palaces 
					and Buddhist temples, the South Korean capital is teeming 
					with unique culture and modern comforts. </p>
			  </div>
		  </div>

	  </article>
	  
	  <article class="article">

		  <div class="article-img-column">
			  <img class="article-img" src="images/japan.png" alt="japan">
		  </div>

<div class="article-text-column">
  <ul class="tab-list">
	  <li class="tab-item">
		  <a class="tab-link" href="#">Music</a>
	  </li>
  </ul>
  <h2 class="article-title">
	  <a class="article-title-link" href="#0">Why to Travel Japan?</a>
  </h2>
  <time class="article-datetime" datetime="2019-06-10">10 January 2023</time>    
  <cite class="article-author">Karina Dela Cruz</cite>
  <div class="article-content">
	  <p>Japan is the most amazing tourist destination and it offers many unique
		 experiences that you cannot find in any other part of the world. The 
		 culture of this country is an interesting blend of Eastern traditions 
		 and Western modernity that can be seen everywhere.</p>
	
  </div>
</div>

	  </article>
	  
	  <article class="article">

		  <div class="article-img-column">
			  <img class="article-img" src="images/thailand.png" alt="thailand">
		  </div>

		  <div class="article-text-column">
			  <ul class="tab-list">
				  <li class="tab-item">
					  <a class="tab-link" href="#0">Lifestyle</a>
				  </li>
				  <li class="tab-item">
					  <a class="tab-link" href="#0">Food</a>
				  </li>
			  </ul>
			  <h2 class="article-title">
				  <a  class="article-title-link" href="#0">Reasons Why I Love Thailand</a>
			  </h2>
			  <time class="article-datetime" datetime="2019-06-10">10 January 2023</time>    
			  <cite class="article-author">Leo Paragatos</cite>
			  <div class="article-content">
				  <p>I’ve been to Thailand more times than I can count. I’ve lived in Bangkok twice, 
					I’ve run tours through the country, and, if I stay away for more than a year, 
					I feel as if a piece of me is missing.</p>
			  </div>
		  </div>

	  </article>
	  
	  <article class="article">
		  <div class="article-img-column">
			  <img class="article-img" src="images/disney.png" alt="disney">
		  </div>

		  <div class="article-text-column">
			  <ul class="tab-list">
				  <li class="tab-item">
					  <a class="tab-link" href="#0">Lifestyle</a>
				  </li>
				  <li class="tab-item">
					  <a class="tab-link" href="#0">Interior</a>
				  </li>
				  <li class="tab-item">
					  <a class="tab-link" href="#0">Art</a>
				  </li>
			  </ul>
			  <h2 class="article-title">
				  <a class="article-title-link" href="#0">Reasons Why Is Disney World Really Is So Magical</a>
			  </h2>
			  <time class="article-datetime" datetime="2019-06-10">10 January 2023</time>    
			  <cite class="article-author">Jayson Oquias</cite>
			  <div class="article-content">
				  <p>It is every child’s dream to visit Disney World and see their favorite Disney 
					characters while also enjoying the entertainment of a lifetime! Furthermore, 
					places like Disney World make adults reminisce about their childhood and feel 
					like a kid again.</p>
			  </div>
		  </div>

	  </article>
	  
	  <article class="article">
		  <div class="article-img-column">
			  <img class="article-img" src="images/palawan.png" alt="palawan">
		  </div>

		  <div class="article-text-column">
			  <ul class="tab-list">
				  <li class="tab-item">
					  <a class="tab-link" href="#0">Travel</a>
				  </li>
				  <li class="tab-item">
					  <a class="tab-link" href="#0">Lifestyle</a>
				  </li>
			  </ul>
			  <h2 class="article-title">
				  <a class="article-title-link" href="#">Amazing Reasons to Visit Palawan, Philippines</a>
			  </h2>
			  <time class="article-datetime" datetime="2019-06-10">10 January 2023</time>    
			  <cite class="article-author">Eloisa Senga</cite>
			  <div class="article-content">
				  <p>Don’t just take our word for it. Take it from Travel + 
					Leisure and their trusty community of globetrotters who 
					have voted Palawan the “World’s Best Island” for two straight years. </p>
			  </div>
		  </div>

	  </article>
	  
	  <article class="article">
		  <div class="article-img-column">
			  <img class="article-img" src="images/china.png" alt="china">
		  </div>
		  <div class="article-text-column">
			  <ul class="tab-list">
				  <li class="tab-item">
					  <a class="tab-link" href="#0">Lifestyle</a>
				  </li>
				  <li class="tab-item">
					  <a class="tab-link" href="#0">Food</a>
				  </li>
			  </ul>
			  <h2 class="article-title">
				  <a  class="article-title-link" href="#0">Top Reasons to Visit China</a>
			  </h2>
			  <time class="article-datetime" datetime="2019-06-10">10 January 2023</time>    
			  <cite class="article-author">Karina Dela Cruz</cite>
			  <div class="article-content">
				  <p>Wonderful China, tourists cherrypick. China, amazing and mysterious, 
					should be put on everyone’s travel list. China, home to one fifth of 
					global population, has its own magic to win people’ love. Here, I will 
					tell China’s magic, China facts and why you should have China tours.</p>
			  </div>
		  </div>

	  </article>


</main>


<div class="sidebar sidebarArticle">

  <section class="new-posts" >
	  <h2 class="sidebar-title">Other Articles</h2>

	  <div class="new-posts-list">

		  <article class="new-posts-article">
			  <div class="post-img-column">
				  <img class="new-posts-image" src="https://netology-code.github.io/html-2-diploma/sources/images/2.jpg" alt="Человек, идущий по берегу">
			  </div>

			  <div class="post-text-column">
				  <time class="new-posts-datetime" datetime="2019-06-14">22 December 2022</time>  
				  <h3 class="new-posts-title">
					<a class="new-posts-link" href="#0">Most Beautiful Beaches in the World.</a>
					</h3>
			  </div>
		  </article>
  
		  <article class="new-posts-article">
			  <div class="post-img-column">
				  <img class="new-posts-image" src="https://netology-code.github.io/html-2-diploma/sources/images/151.jpg" alt="Йога">
			  </div>
<div class="post-text-column">
  <time class="new-posts-datetime" datetime="2019-06-14">16 March 2022</time>  
  <h3 class="new-posts-title">
	<a class="new-posts-link" href="#0">Activies for Vacations</a>
	</h3>
</div>

		  </article>
  
		  <article class="new-posts-article">
			  <div class="post-img-column">
				  <img class="new-posts-image" src="https://netology-code.github.io/html-2-diploma/sources/images/45.jpg" alt="Балкон">
			  </div>
				<div class="post-text-column">
				  <time class="new-posts-datetime" datetime="2019-06-14">24 July 2022</time>  
				  <h3 class="new-posts-title">
					<a class="new-posts-link" href="#0">Beautiful Homes to Visit</a>
					</h3>
				</div>
		  </article>
  
		  <article class="new-posts-article">
			  <div class="post-img-column">
				  <img class="new-posts-image" src="https://netology-code.github.io/html-2-diploma/sources/images/501.jpg" alt="Стол с едой">
			  </div>
			  <div class="post-text-column">
				  <time class="new-posts-datetime" datetime="2019-06-14">10 February 2022</time>  
				  <h3 class="new-posts-title">
					<a class="new-posts-link" href="#0">Interior Designs</a> 
					</h3>
			  </div>

		  </article>
  
		  
		  <article class="new-posts-article">
			  <div class="post-img-column">
				  <img class="new-posts-image" src="https://netology-code.github.io/html-2-diploma/sources/images/7.jpg" alt="Прически">
			  </div>
			  <div class="post-text-column">
				  <time class="new-posts-datetime" datetime="2019-06-14">30 November 2022</time>  
				  <h3 class="new-posts-title">
					<a class="new-posts-link" href="#0">Hairstyles for Vacations</a>                        
					</h3>
			  </div>

		  </article>
	  </div>

	  <form class="search">
		  <label class="visually-hidden" for="search">SEARCH</label>
			  <input id="search" type="search" class="search-field" name="search" placeholder="Search Here" required>
			  <button class="search-button"><span class="visually-hidden">Найти</span></button>
	</form>
  </section>

  

  <section class="tags">
	<h2 class="sidebar-title">Tags</h2>
	  <ul class="tags-list">
		  <li class="tags-item">
			  <a class="tags-link" href="#0">fashion</a>
		  </li>
		  <li class="tags-item">
			  <a class="tags-link" href="#0">music</a>
		  </li>
		  <li class="tags-item">
			  <a class="tags-link" href="#0">lifestyle</a>
		  </li>
		  <li class="tags-item">
			  <a class="tags-link" href="#0">art</a>
		  </li>
		  <li class="tags-item">
			  <a class="tags-link" href="#0">interior</a>
		  </li>
		  <li class="tags-item">
			  <a class="tags-link" href="#0">travel</a>
		  </li>
		  <li class="tags-item">
			  <a class="tags-link" href="#0">food</a>
		  </li>
		  <li class="tags-item">
			  <a class="tags-link" href="#0">health</a>
		  </li>
	  </ul>
  </section>

  <section class="categories">
	<h2 class="sidebar-title">Categories</h2>
	  <ul class="category-list">
		  <li class="category-item">
			  <a class="category-link" href="#0">Philippines<sup class="number">12</sup></a>
		  </li>
		  <li class="category-item">
			  <a class="category-link" href="#0">Korea<sup class="number">4</sup></a>
		  </li>
		  <li class="category-item">
			  <a class="category-link" href="#0">Japan<sup class="number">145</sup></a>
		  </li>
		  <li class="category-item">
			  <a class="category-link" href="#0">China<sup class="number">28</sup></a>
		  </li>
		  <li class="category-item">
			  <a class="category-link" href="#0">Thailand<sup class="number">62</sup></a>
		  </li>
		  <li class="category-item">
			  <a class="category-link" href="#0">Singapore<sup class="number">8</sup></a>
		  </li>
	  </ul>
  </section>
  <div class="row postComment" >
  <form action="backend_add_comment.php"  method="POST" class="form-control" id="frmComments" name="frmComments" enctype="multipart/form-data" autocomplete="off">
						
					    <h1 class="h3 mb-3 fw-normal">Post Comments</h1>

					    <div class="mb-3">
						    <textarea id="comment" name="comment" class="textComment" onkeyup="this.value=this.value.replace(/[^a-z A-Z0-9.!?,]/g, '')" required ></textarea>
						</div>

					   <button class="btn btn-lg btn-primary" type="submit">Submit Post</button>
					    					    
					  </form>
					</div>

</div>
</div>









	  <section class="py-5" >
	  	<div class="container">
	  		<div class="row">
	  			<div class="col-md-12">
	  				<h1 class="h3 mb-3 fw-normal">Comments</h1>
	  				<table class="table table-striped table-responsive">
                      <thead>
                        <tr>
                        <th scope="col">Message</th>
                        <th scope="col">Post Date</th>
                        </tr>
                    </thead>

                    <tbody>
                        <!--PHP routine to Display Data-->
						<?php
            		    include_once("config1.php");
             		   	$result = mysqli_query($mysqli, "SELECT * FROM tblcomments ORDER BY id DESC");
             		   	while($res = mysqli_fetch_array($result)) {
              		    	echo "<tr>";
              		   		echo "<td>".$res['Comment']."</td>";
              		    	echo "<td>".$res['PostedDate']."</td>";
                		  	echo "<tr>";
              		  	}

            		  ?>
                    </tbody>

                    </table>
	  			</div>
	  		</div>	
	  	</div>
	  </section>
	  <footer class="site-footer">

<div class="footer-wrap">
  <ul class="social-list">
	  <li class="social-item">
		  <a class="social-link dribble" href="#0"><span class="visually-hidden">Dribble</span></a>
	  </li>
	  <li class="social-item">
		  <a class="social-link pinterest" href="#0"><span class="visually-hidden">Pinterest</span></a>
	  </li>
	  <li class="social-item">
		  <a class="social-link tumblr" href="#0"><span class="visually-hidden">Tumblr</span></a>
	  </li>
  </ul>
  <p class="copyrights">
	  <a class="copyright-link" href="#0">Copyright © 2022–2023 TravelWithMe Blog JKEL.</a>
  </p>
</div>
</footer>
	</main>

	<script src="js/bootstrap.min.js"></script>
	<script src="js/script.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
	
</body>

</html>