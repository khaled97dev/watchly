<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Trailer Management</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="/watchly/style/style.css">

</head>
<body style="background-color: black ;">

<?php



$pdo = new PDO("mysql:host=localhost;dbname=watchly", "root", "");

$user_id = $_SESSION['id'];

$sql = "SELECT favorite.user_id, favorite.trailer_id, trailer.trailer_name, trailer.trailer_description, trailer.trailer_url, trailer.trailer_img
        FROM favorite
        JOIN users ON favorite.user_id = users.id
        JOIN trailer ON favorite.trailer_id = trailer.id
        WHERE users.id = :user_id";

$stmt = $pdo->prepare($sql);

$stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);

$stmt->execute();

$favorite_list = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!-- NAVBAR -->
<?php include("../contents/navbar.php"); ?>

<div class="row">
    <?php foreach ($favorite_list as $favorite): ?>
    <div class="col-md-4 mb-3">
        <div class="card" style="max-width: 540px;">
            <div class="row no-gutters">
                <div class="col-md-6">
                    <img src="<?php echo $favorite['trailer_img']; ?>" class="card-img" alt="...">
                </div>
                <div class="col-md-6">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $favorite['trailer_name']; ?></h5>
                        <p class="card-text"><?php echo $favorite['trailer_description']; ?></p>
                        <form method="post" action="deleteFavorite.php">
                            <input type="hidden" name="trailer_id" value="<?php echo $favorite['trailer_id']; ?>">
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>




<!-- FOOTER -->
<br>    
<?php include("../contents/footer.php"); ?>
<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
