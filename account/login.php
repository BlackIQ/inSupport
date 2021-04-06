<?php

include("data.php");

if ($_SESSION['status'] == true) {
    $person = $_SESSION['person'];
    header("Location: http://$ip/NarbonSupport");
}

$code = $_POST['code'];
$password = $_POST['password'];

if (isset($code) && isset($password)) {
    $sql = "SELECT * FROM support WHERE mcode='$code' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $_SESSION['status'] = true;
            $_SESSION['id'] = $code;
            $_SESSION["error"] = "200";
            $_SESSION["username"] = $row["username"];
            $_SESSION["icode"] = $row["icode"];
            header("Location: http://$ip/NarbonSupport");
        }
    }
}
else {
    $_SESSION["error"] = "500";
    header("Location: http://$ip/NarbonSupport/account");
}