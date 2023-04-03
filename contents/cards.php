<?php include "get_trailers.php" ?>

    <div class="row">
        
<?php foreach($trailers as $trailer) { ?>

        <div class="card col-md-3">
            <a href="film.php?id=<?php echo $trailer['trailer_id']; ?>">
                <img class="img1" src="<?php echo $trailer['trailer_img']; ?>" alt="">
                <div class="title"><?php echo $trailer['trailer_name']; ?></div>
                <div class="text"><?php echo $trailer['trailer_description']; ?></div>
                
                <a href="#"><div class="catagory"><?php echo $trailer['category_name']; ?> <i class="fas fa-film"></i></div></a>
               
            </a>
        </div>
        <?php } ?>
    </div>

   
