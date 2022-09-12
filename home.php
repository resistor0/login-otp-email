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
    header('Location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Halaman User</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <!-- ANIMATE CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
        
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
            <div class="container px-4">
                <a class="navbar-brand animate__animated animate__bounce animate__infinite	infinite" href="#page-top">Nama Web Anda</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link active" href="#"><?php echo $fetch_info['name'] ?></a></li>
                        <li class="nav-item"><a class="nav-link active" href="#">About</a></li>
                        <li class="nav-item"><a class="nav-link active"  href="#">Contact</a></li>
                        <li class="'nav-item"><a class="btn btn-outline-info" href="logout-user.php">Log Out</a></li>
                    </ul>
                </div>
                </div>
               </nav>


               <header class="bg-dark bg-gradient text-white">
            <div class="container px-4 text-center">
                <h1 class="fw-bolder  animate__animated animate__zoomIn ">Selamat Datang : <?php echo $fetch_info['name'] ?> </h1>

                <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat deserunt eum cumque natus! Tenetur, quam dolores 
                    repudiandae soluta itaque cupiditate facilis qui, voluptates sequi dicta aut quaerat, repellendus inventore minima.</p>
                
               
            </div>
        </header>



        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container px-4"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2022</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>