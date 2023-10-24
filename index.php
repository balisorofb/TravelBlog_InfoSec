

<!doctype html>

<html lang="en">
<head>
<style>
	@import url(https://fonts.googleapis.com/css?family=Oswald:400);

	body{
		background-image:url('images/indexbg2.png');
		background-repeat:no-repeat;
		background-size:cover;
		height:100vh;
		weight:100%;
	}
	.carousel-control-prev-icon, .carousel-control-next-icon {
		height: 100px;
    width: 100px;
    outline: black;
    background-color: rgba(0, 0, 0, 0.3);
    background-size: 100%, 100%;
    border-radius: 50%;
    border: 1px solid black;
	}

	.AboutContainer{
		background-image:url('images/indexbg.png');
		background-repeat:no-repeat;
		background-size:cover;
		height:100vh;
		weight:100%;
	}

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
	
</style>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">	
	<title>BlogSite</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="Stylesheet" href="css/home.css">
	<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	
</head>

<body>

	<main>
	  <section class="py-5 text-center container">
      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="images/carouseltwo.gif" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
            <img src="images/carousel3.png" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next" >
            <span class="carousel-control-next-icon" aria-hidden="true" ></span>
            <span class="visually-hidden" >Next</span>
        </button>
        </div>
	  </section>

	  <section class="py-2 AboutContainer" style="height:110vh; margin-top:10px; padding:10px;">
	  	<div class="container">
	  		<div class="row">

	  			<div class="col-md-8">
	  				<div class="card shadow-sm">
		          	<img src="images/carousel1.png" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h1 class="display-5">TravelWithMe Blog Site</h1>
                        <figure>
                            <blockquote class="blockquote">
                                <p style="text-align: justify; text-justify: inter-word;">
								Welcome to TravelWithMe Blog! We are here to help you explore the world and discover new places. 
								Our blog is dedicated to providing you with the best travel tips, advice, and experiences. 
								We will share our personal stories, tips, and tricks to make your travels easier and more enjoyable. 
								We will also feature inspiring stories from other travelers and share our favorite destinations. 
								Whether you're looking for a weekend getaway or a long-term adventure, we have something for everyone.
								 So, join us on our journey, and let's explore the world together!
                                </p>
                            </blockquote>
                            <figcaption class="blockquote-footer">
                                Someone famous in Travel Blog <cite title="Source Title">heyciara</cite>
                                <small class="text-muted"><a href="https://www.heyciara.com/">Source</a></small>
                            </figcaption>
                        </figure>
		                </div>
		          </div>
	  			</div>

	  			<div class="col-md-4">
				  
	  				<div class="row" style="background:white; padding:10px;radius:10px;">
						
							<div class="d-grid gap-2">
								<a type='button' class="btn btn-lg btn-primary" href='ui_login.php'>Sign in</a>
								<a type='button' class='btn btn-lg btn-info' href='ui_register.php'>Register Here</a>
							</div>

						
					</div>

					<div class="row" style="margin-top: 5px;">
						<form action="" class="form-control" id="frmComments" name="frmComments" enctype="multipart/form-data" autocomplete="off">
						
					    <h1 class="h3 mb-3 fw-normal">Post Comments</h1>

					    <div class="mb-3">
						    <textarea id="comment" name="comment" style="width:100%; height: 228px;"></textarea>
						</div>

					   <button type="button" class="btn btn-lg btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">Submit Post</button>
					   
			    
					  </form>
					</div>

	  			</div>

	  		</div>
	  	</div>
	  </section>

	  <!-- Alert -->
	  <!-- The Modal -->
		<div class="modal" id="myModal">
 			<div class="modal-dialog">
    			<div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Please Sign In First!</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        Do you already have an account?
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
	  <a type='button' class="btn btn-lg btn-primary" href='ui_login.php'>Sign in Here</a>
	<a type='button' class='btn btn-lg btn-info' href='ui_register.php'>Register Here</a>
      </div>

    </div>
  </div>
</div>













	</main>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>

</html>