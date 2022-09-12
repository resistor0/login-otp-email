<?php require_once "controllerUserData.php"; ?>
<?php
if($_SESSION['info'] == false){
    header('Location: login.php');  
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Baru</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="loginBox"> <img class="user" src="https://cdn-icons-png.flaticon.com/512/1239/1239711.png?w=740&t=st=1661908086~exp=1661908686~hmac=d5ef8932cc57030956b993d15ebc19920a9885229775a44d529bd2de3e2d7e23" height="100px" width="100px">
        <h3>Code Verification</h3>
        <?php 
            if(isset($_SESSION['info'])){
                ?>
                <div class="alert alert-success text-center">
                    <div class="salah">
                <?php echo $_SESSION['info']; ?>
                </div>
            </div>
                <?php
            }
            ?>
         <form action="login.php" method="POST">

         <input type="submit" name="login-now" value="Login Now">
         </form> 
        </div>
        
       
    </div>
    <script src=" https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
   
</body>
</html>