<?php require_once "controllerUserData.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="loginBox"> <img class="user" src="https://cdn-icons-png.flaticon.com/512/1241/1241066.png?w=740&t=st=1661908535~exp=1661909135~hmac=5a3bf2952bf8576828d10c40fd068ead77d5f0b4d437108bad0d1e0f60d4110e" height="100px" width="100px">
        <h3>Form Login</h3>
        <form action="login.php" method="POST" autocomplete="">
                    <?php
                    if(count($errors) > 0){
                        ?>
                         
                        <div class="alert alert-success text-center">
                            <div class="salah">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        </div>
                        <?php
                    }
                    ?>
                
        <div class="inputBox"> <input id="uname" type="email" name="email" placeholder="Email Address" required value="<?php echo $email ?>"> 
            <input type="password" name="password" placeholder="Password" required>
            </div> <input type="submit" name="login" value="Login">

        <a href="forgot-password.php">Lupa Password<br> </a>
        <span>......</span>
        <a href="signup-user.php">Registrasi<br> </a>
        <span>......</span>
        <a href="index.php">Back To Home<br> </a>
        </form>
        
        </div>
        
    </div>
    <script src=" https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
   
</body>
</html>