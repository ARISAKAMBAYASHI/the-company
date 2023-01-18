<?php
    session_start();

    include '../classes/User.php';

    # Instantiate object
    $user = new User;
    $g_user = $user->getUser();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Boostrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <!--Fontawesome Link  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>Edit User</title>
</head>
<body>
  <nav class="navbar navbar-expand navbar-dark bg-dark" style="margin-bottom: 80px;">
    <div class="container">
      <a href="#" class="navbar-brand">
        <h2 class="h3">The Company</h2>
      </a>
      <div class="navbar-nav">
        <span class="navbar-text"><?=$_SESSION['fullname']?></span>
        <form action="../actions/logout-action.php" method="post" class="d-flex ms-2">
          <button type="submit" class="text-danger bg-transparent border-0">Logout</button>
        </form>
      </div>
    </div>
  </nav>

  <main class="row justify-content-center gx-0">
    <div class="col-4">
      <h2 class="text-center mb-4">Edit User</h2>

      <form action="../actions/edit-user-action.php" method="post" enctype="multipart/form-data">
          <div class="row justify-content-center mb-3">
            <div class="col-6">
              <?php
                 if($g_user['photo']){ 
              ?>
                  <img src="../assets/images/<?=$g_user['photo']?>" alt="<?=$g_user['photo']?>" class="d-block mx-auto edit-photo">
              <?php
                 }else{
              ?>
                  <i class="fa-solid fa-user text-secondary d-block text-center edit-icon"></i>
              <?php
                 }  
              ?>

              <input type="file" name="photo" class="form-control mt-2" accept="image/*">
            </div>
          </div>
          <div class="mb-3">
            <label for="first-name" class="form-label">First Name</label>
            <input type="text" name="first_name" id="first-name" class="form-control" value="<?=$g_user['first_name'] ?>" required autofocus>
          </div>
          <div class="mb-3">
            <label for="last-name" class="form-label">Last Name</label>
            <input type="text" name="last_name" id="last-name" class="form-control" value="<?=$g_user['last_name']?>" required>
          </div>
          <div class="mb-4">
            <label for="username" class="form-label fw-bold">Username</label>
            <input type="text" name="username" id="username" class="form-control" maxlength="15" value="<?=$g_user['username']?>" required>
          </div>
          <div class="text-end">
            <a href="dashboard" class="btn btn-secondary btn-sm">Cancel</a>
            <button type="submit" class="btn btn-warning btn-sm px-5">Save</button>
          </div>
      </form>
    </div>
  </main>
  
<!-- Javascript Boostrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>