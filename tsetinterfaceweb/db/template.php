<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
	<div class="container">
		<div class="row">
			<div class="col">
				<form action="./controllers/login.php" class="needs-validation row g-3 px-md-5 px-3" method="post" novalidate>
					<h2 class="fw-bold">Log In</h1>
						<?php if (isset($_SESSION['error'])) : ?>
							<div class="col-12 alert alert-danger alert-dismissible fade show" role="alert">
								<i class="bi bi-exclamation-triangle-fill h5"></i> <?php echo $_SESSION['error']; ?>.
								<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
							</div>
						<?php
							unset($_SESSION['error']);
						endif;
						?>
						<div class="col-12">
							<label for="username" class="form-label"><b>Username</b></label>
							<input type="text" class="form-control" name="username" id="username" autocomplete="off" required>
							<div class="invalid-feedback">
								Please enter your username.
							</div>
						</div>
						<div class="col-12">
							<label for="password"><b>Password</b></label>
							<input type="password" class="form-control" name="password" id="password" autocomplete="off" required>
							<div class="invalid-feedback">
								Please enter your password.
							</div>
						</div>
						<div class="col-12">
							<button type="submit" class="btn btn-primary col-3" name="login"><b>Log In</b></button>
						</div>
				</form>
			</div>
		</div>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
	<script src="./js/validation.js"></script>
</body>

</html>