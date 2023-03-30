<!DOCTYPE html>
<html>
<head>
	<title>User Management</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

</head>
<body style="background-color: #457b9d;">
<div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <span class="fs-5 d-none d-sm-inline">WATCHLY</span>
                </a>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                    <li class="nav-item">
                        <a href="admin.php" class="nav-link align-middle px-0">
                            <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Dashbord</span>
                        </a>
                    </li>
                    <li>
                        <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline">Trailer</span> </a>
                        <ul class="collapse show nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                            <li class="w-100">
                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Films</span> </a>
                            </li>
                            <li>
                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Writers</span></a>
                            </li>
                            <li>
                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Actors</span></a>
                            </li>
                        </ul>
                    </li>
                    
                  
                    <li>
                        <a href="userControl.php" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Users</span> </a>
                    </li>
                    <li>
                        <a href="../logout.php" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Log out</span> </a>
                    </li>
                </ul>
                
            </div>
        </div>
        <div class="col py-3">
        <div class="mt-4 container">
		<h1 class="text-white">User Management</h1>
        <div class="my-3">
			<a href="addUser.php" class="btn btn-primary">
				Add User
			</a>
		</div>
		<table class="table table-dark">
			<thead>
				<tr>
					<th scope="col">ID</th>
					<th scope="col">Name</th>
					<th scope="col">Email</th>
					<th scope="col">Role</th>
					<th scope="col">Actions</th>
				</tr>
			</thead>
			<tbody>
				<?php
				// Connect to the database
				$servername = "localhost";
				$username = "root";
				$password = "";
				$dbname = "watchly";

				try {
				    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
				    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				} catch(PDOException $e) {
				    echo "Connection failed: " . $e->getMessage();
				}

				// Fetch all users from the database
				$stmt = $pdo->query("SELECT * FROM users");
				$users = $stmt->fetchAll(PDO::FETCH_ASSOC);
				?>
				<?php foreach ($users as $user) { ?>
                    <tr>
                        <td><?= $user['id'] ?></td>
                        <td><?= $user['user_name'] ?></td>
                        <td><?= $user['user_email'] ?></td>
                        <td><?= ($user['role_id'] == 1) ? 'admin' : 'user' ?></td>
                        <td>
                        <a href="editUser.php?id=<?= $user['id'] ?>" class="btn btn-sm btn-primary">
                        <i class="bi bi-pencil-square"></i>
                        </a>
                        <a href="deleteUser.php?id=<?= $user['id'] ?>" class="btn btn-sm btn-danger">
                            <i class="bi bi-trash"></i>
                        </a>

                        </td>
                    </tr>
                    <?php } ?>
			</tbody>
		</table>
	</div>
        </div>
    </div>
</div>

	

	<!-- Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
