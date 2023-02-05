<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Boostrap Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <title>Login</title>
</head>
<body class="bg-light">
  <div style="height: 100vh;">
    <div class="row h-100 m-0">
      <div class="card w-25 mx-auto my-auto">
        <div class="card-header bg-white border-0 py-3">
          <h2 class="text-center">Login</h2>
        </div>
        <div class="card-body">
          <form action="../actions/login-action.php" method="post">

            <input type="text" name="username" id="username" class="form-control mb-2 fw-bold" placeholder="USERNAME" required autofocus>

            <input type="password" name="password" id="passeord" class="form-control mb-5 fw-bold" placeholder="PASSWORD" required>

            <button type="submit" class="form-control btn btn-primary text-white">Login</button>
          </form>

          <p class="text-muted text-center mt-3 small"><a href="register.php">Create Account</a></p>
          <!--  Make some change -->
          <p class="text-center text-muted mt-2 small">Copyright @ Kredo 2022</p>

        </div>
      </div>
    </div>
  </div>

  
 <!-- Javascript -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>