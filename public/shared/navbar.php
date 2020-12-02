<!-- Navbar -->
<nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
    <div class="container">

        <!-- Brand -->
        <a class="navbar-brand" href="../index.php">
            <strong>ITALICIOUS</strong>
        </a>

        <!-- Collapse -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Links -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <!-- Left -->
            <ul class="navbar-nav mr-auto">

                <?php
                if (isset($_SESSION['userName']) && !empty($_SESSION['userName'])) {

                ?>
                    <li class="nav-item">
                        <a class="nav-link btn btn-sm btn-success" href="index.php?logout=1">User:<?php echo $_SESSION['userName'] ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-sm btn-danger" href="index.php?logout=1">Logout</a>
                    </li>
                <?php
                } else {


                ?>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About Italicious</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Recipes</a>
                    </li>
                <?php
                }
                ?>
            </ul>

        </div>

    </div>
</nav>
<!-- Navbar -->