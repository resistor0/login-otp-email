<?php require_once "controllerUserData.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="loginBox"> <img class="user" src="https://cdn-icons-png.flaticon.com/512/1246/1246305.png?w=740&t=st=1661908612~exp=1661909212~hmac=5157d17b9367d6f69556721210c407a6888db58863a86caf574c6b0e819d50d4" height="100px" width="100px">
    <h3>Registrasi</h3>
        <form action="signup-user.php" method="POST" autocomplete="">
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
                        <div class="alert alert-danger ">
                            <div class="salah">
                            <?php
                            foreach($errors as $showerror){
                                ?>
                                <li><?php echo $showerror; ?></li>
                                <?php
                            }
                            ?>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
            <div class="inputBox"> <input id="uname"  type="text" name="name" placeholder="Full name" required value="<?php echo $name ?>">
            <div class="inputBox"> <input id="email" type="email" name="email" placeholder="Email Address" required value="<?php echo $email ?>">
            <input id="pass"  type="password" name="password" placeholder="Password" required>
            <input id="pass" type="password" name="cpassword" placeholder="Confirm password" required>
            <input type="submit" name="signup" value="Signup">
        </form> 
       
        <a href="login.php">Login<br> </a>
    </div>
    <script src=" https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="jquery.js"></script>

</body>
</html>