<?php
include("./shared/header.php");



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
                <div class="row animated bounceInUp">
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-12 col-xl-12 mb-12 d-flex align-items-center justify-content-center">

                        <!--Card-->
                        <div class="card col-12 col-md-5 ">


                            <!--Card content-->
                            <div class="card-body">
                                <?php include("../private/register.php"); ?>


                                <!-- Form -->
                                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                                    <!-- Heading -->
                                    <h3 class="dark-grey-text text-center">
                                        <strong>Create My Account</strong>
                                    </h3>
                                    <hr>
                                    <div class="md-form">
                                        <i class="fas fa-user-edit prefix grey-text"></i>
                                        <input value="<?php echo $_POST['register'][0] ?? ''; ?>" type="text" id="name" class="form-control" name="register[0]">
                                        <label for="name">Name</label>
                                    </div>

                                    <div class="md-form">
                                        <i class="fas fa-user prefix grey-text"></i>
                                        <input value="<?php echo $_POST['register'][1] ?? ''; ?>" type="text" id="username" class="form-control" name="register[1]">
                                        <label for="username">Username</label>
                                    </div>
                                    <div class="md-form">
                                        <i class="fas fa-key prefix grey-text"></i>
                                        <input value="<?php echo $_POST['register'][2] ?? ''; ?>" type="password" id="password" class="form-control" name="register[2]">
                                        <label for="password">Password</label>
                                    </div>
                                    <div class="md-form">
                                        <i class="fas fa-key prefix grey-text"></i>
                                        <input value="<?php echo $_POST['register'][3] ?? ''; ?>" type="password" id="cpassword" class="form-control" name="register[3]">
                                        <label for="cpassword">Confirm Password</label>
                                    </div>
                                    <div class="md-form">
                                        <p class="ml-3 p-2">
                                            <input type="checkbox" onclick="showPwd()"> Show password
                                        </p>
                                        <a href="index.php">Already have an Account?</a>

                                    </div>


                                    <div class="text-center">
                                        <button class="btn btn-success" name="s" value="1">Register</button>
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
<?php include("./shared/footer.php"); ?>