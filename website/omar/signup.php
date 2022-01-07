<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body class="">
        <?php require_once 'php/processReg.php'; ?> 
    <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh">
        <form action="php/processReg.php" class="border shadow p-3 rounded" method="post" style="width: 450px;">
            <h1 class="text-center p-3">SIGN UP</h1>
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" name="username">
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password">
            </div>
            <div class="mb-1">
		        <label class="form-label">Select User Type:</label>
		    </div>
            <select class="form-select mb-3" name="role"  aria-label="Default select example">
			    <option selected value="user">User</option>
			    <option value="admin">Admin</option>
		    </select>
		    <button type="submit" name="submit" class="btn btn-primary">SIGNUP</button>
            <hr>
            <div class="d-flex justify-content-center align-items-center">
                <div class="">
                    <div class="d-flex justify-content-center align-items-center">
                        <p class="mx-2 fw-bold">Vous avez déja un compte ?</p>
                    </div>
                    <div class="d-flex justify-content-center align-items-center">
                        <a class="btn btn-secondary" href="index.php">LOGIN</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>