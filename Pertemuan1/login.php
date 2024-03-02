<?php

include("koneksi.php");

$validuser = "Admin";
$validpassword = "thewindtalker";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $userinput = mysqli_real_escape_string($conn, htmlspecialchars($_POST["username"]));
    $userpassword = mysqli_real_escape_string($conn, htmlspecialchars($_POST["password"]));

    if ($userinput == $validuser) {
        if ($userpassword == $validpassword) {
?>
            <script>
                alert("Login Berhasil");
                window.location.href = "index.html";
            </script>
        <?php
        } else {
        ?>
            <script>
                alert("Login Gagal Password anda salah");
                window.location.href = "login.html";
            </script>
        <?php
        }
    } else {
        ?>
        <script>
            alert("Login Gagal Username anda salah");
            window.location.href = "login.html";
        </script>
<?php
    }
}
