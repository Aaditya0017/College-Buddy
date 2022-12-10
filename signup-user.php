<?php require_once "controllerUserData.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        crossorigin="anonymous">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        crossorigin="anonymous"></script>
    <script src="script.js"></script>
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Tamma+2:wght@800&family=Montserrat:wght@800&display=swap"
        rel="stylesheet">
    <title>Polls</title>
    <!-- css -->
    <script src="https://kit.fontawesome.com/3c8dbba22a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="signup.css">
</head>

<body>
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-4 offset-md-4 form">
                    <form action="signup-user.php" method="POST" autocomplete="">
                        <h2 class="text-center">Signup</h2>
                        <p class="text-center">It's quick and easy.</p>
                        <?php
                    if(count($errors) == 1){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }elseif(count($errors) > 1){
                        ?>
                        <div class="alert alert-danger">
                            <?php
                            foreach($errors as $showerror){
                                ?>
                                <li><?php echo $showerror; ?></li>
                                <?php
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                        <div class="form-group">
                            <input class="form-control" type="text" name="name" placeholder="Full Name" required value="<?php echo $name ?>">
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="email" name="email" placeholder="Email Address" required value="<?php echo $email ?>">
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="date" name="bday" placeholder="Birth Date" required value="<?php echo $bday ?>">
                        </div>
                        <div class="form-group">
                        <p>Gender</p>
                        <input type="radio"  name="gender" required value="MALE">
                        <label for="male">MALE</label><br>
                        <input type="radio"  name="gender" required value="FEMALE">
                        <label for="female">FEMALE</label><br>
                            
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="password" name="password" placeholder="Password" required>
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="password" name="cpassword" placeholder="Confirm password" required>
                        </div>
                        <div class="form-group">
                            <input class="form-control button" type="submit" name="signup" value="Signup">
                        </div>
                        <div class="link login-link text-center">Already a member? <a href="login-user.php">Login here</a></div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</body>

