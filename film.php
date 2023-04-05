<?php
session_start();
 include "contents/get_trailer.php"; 
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="style/style.css">
    <style>
        .pp{
            font-size:34px;
        }
        p{
            font-size:20px;
        }
        span{
            color:#3C4EA7;
        }
        .card {
            box-shadow: 15px 8px 18px #3C4EA7;
        }
        .cardd {
            box-shadow: 15px 8px 18px #E61616;
        }
        .rating {
                display: inline-block;
                font-size: 2em;
                }

                .star {
                cursor: pointer;
                color: #ccc;
                transition: color 0.2s ease-in-out;
                }

                .star:hover,
                .star.active {
                color: #f1c40f;
                }

    </style>
    <title>FILM</title>
</head>
<body style="background-color: rgb(0, 0, 0);">

<!-- NAVBAR -->
<?php include("contents/navbar.php"); ?>

<!-- Movie info card -->
<div class="container my-5">
    <div class="row">
        <div class="col-md-12 mx-auto">
            <div class="card">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="<?php echo $trailer['trailer_img']; ?>" class="card-img">
                    </div>
                    <div style="background-color: black;" class=" text-white col-md-8">
                        <div class=" card-body">
                            <p  class="pp mt-4 card-title"><?php echo $trailer['trailer_name']; ?></p>
                            <p class="card-text"><?php echo $trailer['trailer_description']; ?></p>
                            <br>
                            <p class="mt-4 card-text"> <span> Starring:</span> Chris Hemsworth.</p>
                            <br>
                            <p class="card-text"> <span> Written by:</span> Jack Kirby. </p>
                            <?php
                                if(isset($_SESSION['id'])) {
                                    $user_id = $_SESSION['id'];
                                        ?>
                                    <form action="contents/add_favorite.php" method="POST">
                                    <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
                                    <input type="hidden" name="trailer_id" value="<?php echo $trailer['id']; ?>">
                                    <button type="submit" class="btn btn-primary">Add to Favorites</button>
                                      </form>
                                      <?php
                                } else {
                                           ?>
                                  <a class="btn btn-primary" href="login.php">
                                    Add to Favorites
                                    </a>
                            <?php
                                }
                                ?>
                                 <div class="rating">
                                    <span class="star" data-value="1">&#9733;</span>
                                    <span class="star" data-value="2">&#9733;</span>
                                    <span class="star" data-value="3">&#9733;</span>
                                    <span class="star" data-value="4">&#9733;</span>
                                    <span class="star" data-value="5">&#9733;</span>
                                </div>
                        </div>
                        
                           


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- Movie trailer video -->
	<div class="container cardd ">
		<div class="row">
			<div class="col-md-9 mx-auto">
				<div class="mb-4 embed-responsive embed-responsive-16by9">
                  <iframe class="embed-responsive-item" src="<?php echo $trailer['trailer_url']; ?>" frameborder="0" allowfullscreen></iframe>
	            </div>
			</div>
		</div>
	</div>




<!-- FOOTER -->
<br>    
<?php include("contents/footer.php"); ?>
<script>
             // get all the star elements
const stars = document.querySelectorAll('.star');

// set event listeners to each star element
stars.forEach(star => {
  star.addEventListener('click', () => {
    // get the value of the clicked star
    const value = star.getAttribute('data-value');

    // add active class to all the stars with a lower or equal value to the clicked star
    stars.forEach(star => {
      if (star.getAttribute('data-value') <= value) {
        star.classList.add('active');
      } else {
        star.classList.remove('active');
      }
    });
  });
});


</script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>