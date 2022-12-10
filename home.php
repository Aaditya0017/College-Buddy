<?php require_once "controllerUserData.php"; ?>
<?php 
$email = $_SESSION['email'];
$password = $_SESSION['password'];
if($email != false && $password != false){
    $sql = "SELECT * FROM usertable WHERE email = '$email'";
    $run_Sql = mysqli_query($con, $sql);
    if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $status = $fetch_info['status'];
        $code = $fetch_info['code'];
        if($status == "verified"){
            if($code != 0){
                header('Location: reset-code.php');
            }
        }else{
            header('Location: user-otp.php');
        }
    }
}else{
    header('Location: login-user.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    crossorigin="anonymous">
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" crossorigin="anonymous"></script>
  <script src="script.js"></script>
  <!-- google fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Baloo+Tamma+2:wght@800&family=Montserrat:wght@800&display=swap"
    rel="stylesheet">
    <title><?php echo $fetch_info['name'] ?> | Home</title>
    <style>
    
.navbar-brand{
  font-family: 'Baloo Tamma 2',cursive;
  /* dont forget to put a comma here before cursive, in css we dont get errors so its hard to find out the mistake */
  font-weight: bold;
  font-size: 2.0rem;
  
}
.navbar{
  padding:7px 20px 10px 53px;
  
  
}
.nav-item{
  padding: 0.5rem;
  font-family: "Baloo Tamma 2";
  font-size: 1.2rem;
}
*{
  margin: 0px;
  padding: 0px;
}
body{
  font-family: 'Baloo Tamma 2', cursive;
  background: url('1.jpg');
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
  background-attachment: fixed;
}
h1{
    color: white;
    position: absolute;
    top: 50%;
    left: 50%;
    width: 100%;
    text-align: center;
    transform: translate(-50%, -50%);
    font-size: 50px;
    font-weight: 600;
}
.container-fluid {
    padding: 0px 0px;
}
</style>
</head>
<body>
<div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="index.html"><img class="left" src="images/hj.png" alt="">CollegeBuddy</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
        aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="Home.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="poll/index.php">poll</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="cal.php">Calculator</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Game/index.php">Funzone</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="cb/index.php">Chatbot</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://vast-badlands-46551.herokuapp.com/">Compiler</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="cf/index.php">Help</a>
          </li>
           <li class="nav-item">
            <button type="button" class="btn btn-light"><a href="logout-user.php">Logout</a></button>

          </li>
        </ul>
      </div>
    </nav>
</div>
    <h1>Welcome <?php echo $fetch_info['name'] ?></h1>
    
</body>
</html>