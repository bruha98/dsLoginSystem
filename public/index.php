<?php
include("./shared/header.php");

//welcome user

if (isset($_GET['logout']) && $_GET['logout'] == 1) {
    if (isset($_SESSION['userName']) && !empty($_SESSION['userName'])) {
        unset($_SESSION['userName']);
    }
}
if (isset($_SESSION['userName']) && !empty($_SESSION['userName'])) {


?>

    <body>


        <?php

        include("./shared/navbar.php");
        ?>
        <!-- Full Page Intro -->
        <div class="view full-page-intro" style="height:100vh; background-image: url( ../node_modules/mdbootstrap/img/bg-italian.jpg); background-repeat: no-repeat; background-size: cover;">

            <!-- Mask & flexbox options-->
            <div class="mask rgba-black-light d-flex justify-content-center align-items-center">
                <h1 class="white-text animated zoomInDown slower">Welcome <?php echo $_SESSION['userName']; ?> we're happy to have you at Italicious</h1>

            </div>
            <!-- Mask & flexbox options-->

        </div>
        <!-- Full Page Intro -->
    </body>
<?php
} else { //sign up
?>




    <body>


        <?php

        include("./shared/navbar.php");
        ?>
        <!-- Full Page Intro -->
        <div class="view full-page-intro" style="height:100vh; background-image: url( ../node_modules/mdbootstrap/img/bg-italian.jpg); background-repeat: no-repeat; background-size: cover;">

            <!-- Mask & flexbox options-->
            <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

                <!-- Content -->
                <div class="container">

                    <!--Grid row-->
                    <div class="row ">

                        <!--Grid column-->
                        <div class="col-md-6 mb-4 white-text text-center text-md-left animated bounceInUp slow">

                            <h1 class="display-4 font-weight-bold">Best Italian Foods</h1>

                            <hr class="hr-light">

                            <p>
                                <strong>Top Recipe's In the Palm of Your Hands</strong>
                            </p>

                            <p class="mb-4 d-none d-md-block">
                                <strong>Taste the world's most delicious italian food ever serve, with over 50 branches worldwide and 67 years expertise in cooking</strong>
                            </p>

                            <a href="register.php" class="btn btn-success btn-lg animated pulse infinite">Sign up
                                <i class="fas fa-sign-in-alt ml-2"></i>
                            </a>

                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-md-6 col-xl-5 mb-4 ">

                            <!--Card-->
                            <div class="card">
                                <?php include("../private/account.php"); ?>

                                <!--Card content-->
                                <div class="card-body">

                                    <!-- Form -->
                                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                                        <!-- Heading -->
                                        <h3 class="dark-grey-text text-center">
                                            <strong>Log in</strong>
                                        </h3>
                                        <hr>

                                        <div class="md-form">
                                            <i class="fas fa-user prefix grey-text"></i>
                                            <input type="text" value="<?php echo $_POST['username'] ?? ''; ?>" id="username" class="form-control" name="username">
                                            <label for="username">Username</label>
                                        </div>
                                        <div class="md-form">
                                            <i class="fas fa-key prefix grey-text"></i>
                                            <input type="password" id="password" class="form-control" name="password">
                                            <label for="password">Password </label>
                                            <p class="ml-3 p-2">
                                                <input type="checkbox" onclick="showPwd()">
                                                Show password
                                            </p>

                                        </div>


                                        <div class="text-center">
                                            <button class="btn btn-success" name="s" value="1">Login</button>
                                        </div>

                                    </form>
                                    <!-- Form -->

                                </div>

                            </div>
                            <!--/.Card-->

                        </div>
                        <!--Grid column-->

                    </div>
                    <!--Grid row-->

                </div>
                <!-- Content -->

            </div>
            <!-- Mask & flexbox options-->

        </div>
        <!-- Full Page Intro -->
    </body>
<?php
}
include("./shared/footer.php"); ?>