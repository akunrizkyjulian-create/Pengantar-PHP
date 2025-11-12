<?php
$username = $_POST['username'];
$password = $_POST['password'];

if ((($username == "joko") && ($password == "passjoko")) || (($username == "amir") 
    && ($password == "passamir"))) {
        echo "Login Sukses";
}

else {
    echo "login gagal";
}
?>