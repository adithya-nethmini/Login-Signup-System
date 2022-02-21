<!DOCTYPE html>
<html lang="en">

<head>
    <title>MedFast Pharmacy - Sign Up</title>
    <link rel="stylesheet" href="css/login-all-css.css">
</head>

<body class="bg-gradient-primary login">

  <div class="container">
    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9" style="max-width: 50% !important;">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-12 main-column">
                <img src="medfastlogo.png" alt="" class="aligncenter login-logo" width="400">
                <div class="p-5 login-form">
                  <form class="user" action="signup-process.php" method="post">

                    <?php if (isset($_GET['error'])) { ?>
     		             <p class="error"><?php echo $_GET['error']; ?></p>
     	            <?php } ?>

                    <?php if (isset($_GET['success'])) { ?>
                        <p class="success"><?php echo $_GET['success']; ?></p>
                    <?php } ?>

                    <div class="form-group">
                    <?php if (isset($_GET['name'])) { ?>
                        <input type="text" class="form-control form-control-user" name="name" placeholder="Full Name" value="<?php echo $_GET['name']; ?>" required>
                    <?php }else{ ?>
                        <input type="text" class="form-control form-control-user" name="name" placeholder="Name" required>
                    <?php }?>
                    </div>

                    <div class="form-group">
                    <?php if (isset($_GET['username'])) { ?>
                      <input type="text" class="form-control form-control-user" name="username" placeholder="Username" value="<?php echo $_GET['username']; ?>" required>
                    <?php }else{ ?>
                        <input type="text" class="form-control form-control-user" name="username" placeholder="Username" required>
                    <?php }?>
                    </div>
                    
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" name="login_type" placeholder="Account Type" required>
                    </div>

                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" name="password" placeholder="Password" required>
                    </div>

                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" name="confirm_password" placeholder="Confirm Password" required>
                    </div>

                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Remember Me</label>
                      </div>
                    </div>

                    <button type="submit" class="btn btn-primary btn-user btn-block" name="reg_user">Sign Up</button>
                    <a href="login.php" class="small">Already have an account?</a>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

</body>

</html>