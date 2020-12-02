<?php
if (isset($_POST['s']) && $_POST['s'] == 1) {
    $infos[] = $_POST['register'];
    $errors = $infos[0][2] == $infos[0][3] ? 0 : 1;

    if ($errors == 1) {
        echo error("Password do not match");
    }

    foreach ($_POST['register'] as $info) {
        if (empty($info)) {
            $errors++;
            echo error("Please Fill up the Required Fields");
            break;
        }
        $info = $conn->real_escape_string($info);
        $infos[] = htmlentities($info);
    }

    if ($errors == 0) {
        $infos[3] = password_hash($infos[3], PASSWORD_DEFAULT);
        //check username if exist
        if ($sql = $conn->prepare("SELECT * FROM users WHERE userName= ?")) {
            $sql->bind_param("s", $infos[2]);
            if ($sql->execute()) {
                $result = $sql->get_result();
                if ($result->num_rows > 0) {
                    echo error("Username Already Taken");
                } else {
                    if ($sql = $conn->prepare("INSERT INTO users (name, userName, password) VALUES (?,?,?)")) {
                        $sql->bind_param("sss", $infos[1], $infos[2], $infos[3]);
                        if ($sql->execute()) {
                            $_SESSION['userName'] = $infos[2];
                            header("location:index.php?login=true");
                        } else {
                            //
                            echo error("Account Creation Failed, Please Try Again");
                        }
                    }
                }
            }
        }
    }
}
