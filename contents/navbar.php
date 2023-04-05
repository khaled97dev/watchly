<nav class=" navbar navbar-expand-lg ">
  <a class="navbar-brand ml-6" href="/watchly/index.php">
    <img  src="/watchly/assets/bigblack.png" width="150" height="150" class="d-inline-block align-top" alt="">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link text-light" href="/watchly/index.php">HOME</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="/watchly/films.php">FILMS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="/watchly/contact.php">CONTACT</a>
      </li>
      <?php 
      if(isset ($_SESSION['id_role'])){
        if($_SESSION['id_role'] == 1) { ?> 
        <li class="nav-item">
          <a class="nav-link text-light" href="/watchly/admin/admin.php"><i class="bi bi-pencil-square"> ADMIN</i></a>
        </li>
        <?php   } 
      }
       ?>
        <?php 
      if(isset ($_SESSION['id_role'])){
        if($_SESSION['id_role'] == 1) { ?> 
        <li class="nav-item">
          <a class="nav-link text-light" href="/watchly/admin/favoriteList.php"><i class="bi bi-star-fill"></i> MY LIST</a>
        </li>
        <?php   } 
      }
       ?>
         <?php 
      if(isset ($_SESSION['id_role'])){
        if($_SESSION['id_role'] == 2) { ?> 
        <li class="nav-item">
          <a class="nav-link text-light" href="/watchly/admin/favoriteList.php"><i class="bi bi-star-fill"></i> MY LIST</a>
        </li>
        <?php   } 
      }
       ?>
     
     
      <li class="nav-item">
        <a class="nav-link text-light" href="/watchly/login.php"><i class="bi bi-person-circle"></i></a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link text-light" href="/watchly/logout.php"><i class="bi bi-escape"></i></a>
      </li>
      
    </ul>
  </div>
</nav>
