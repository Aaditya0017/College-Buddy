<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Signup Form</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form">
                <form  method="POST" autocomplete="">
                    <h2 class="text-center">Signup Form</h2>
                    <p class="text-center">It's quick and easy.</p>
                    
                    <div class="form-group">
                        <input class="form-control" type="text" name="name" placeholder="Full Name" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="email" name="email" placeholder="Email Address" required >
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="date" name="bday" placeholder="Birth Date" required>
                    </div>
                    <div class="form-group">
                    <p>Gender</p>
                    <input type="radio"  name="gender" value="male" required >
                    <label for="male">MALE</label><br>
                    <input type="radio"  name="gender" value ="female"required>
                    <label for="female">FEMALE</label><br>
                        
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="password" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="cpassword" placeholder="Confirm password" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control button" type="submit">
                    </div>
                    <div class="link login-link text-center">Already a member? <a href="login-user.php">Login here</a></div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>
<?php

print_r($_POST);

?>