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
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container-fluid">


        <div class="row col">
            <div class="col-lg-6">
                <img class="loginimg" src="Luffy X Naruto _ Personajes de one piece, Personajes de anime, Artesanías de anime.jpg" alt="">
            </div>
            <div class="col-lg-6">
                <div class="forms">
                    <form action="login-user.php" method="POST" autocomplete="">
                        <h2 class="text-center">Login</h2>
                        <?php
                        if(count($errors) > 0){
                            ?>
                            <div class="alert alert-danger text-center">
                                <?php
                                foreach($errors as $showerror){
                                    echo $showerror;
                                }
                                ?>
                            </div>
                            <?php
                        }
                        ?>

                        <div class="form-group">
                            <input class="form-control" type="email" name="email" placeholder="Email Address" required
                                value="<?php echo $email ?>">
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="password" name="password" placeholder="Password" required>
                        </div>
                        <div class="form-group"><a href="forgot-password.php">Forgot password?</a></div>
                        <div class="form-group">
                        <input class="btn" type="submit" name="login" value="Login">
                    </div>                        </div>
                        <div class="signup">Not yet a member? <a href="signup-user.php">Signup
                                now</a></div>
                    </form>
                </div>
            </div>

        </div>

    </div>
</body>
</html>