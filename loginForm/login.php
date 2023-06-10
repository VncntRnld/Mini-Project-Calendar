<?php

    include "../koneksi.php";
    session_start();


    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
    
        $sql = "SELECT * FROM user WHERE username='$username' AND password='$password' LIMIT 1";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);

            $_SESSION["username"] = $username;
            $_SESSION["password"] = $password;
    
            header("Location: ../kalenderUtama/KalenderUtama.php");
        } 
        else { 
            echo "<script>alert('Username atau password Anda salah. Silahkan coba lagi!')</script>";
        }
    }

    if(isset($_SESSION["username"])){
        header("Location: ../kalenderUtama/KalenderUtama.php");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <!-- IMPORT -->
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">

    
    <title>Login</title>
</head>
<body>
    <header>
        
    </header>

    <main>
        <div class="container">
            <form action="login.php" method="post" class="login-email">
                <p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
                <div class="input-group">
                    <input type="text" placeholder="Username" name="username" id="username">
                </div>
                <div class="input-group">
                    <input type="password" placeholder="Password" name="password" id="password">
                </div>
                <div class="input-group">
                    <button type="submit" name="submit" class="btn">Log In</button>
                </div> 
            </form>
        </div>
    </main>
    <footer>
        <h4>CONTACT US</h4>
        <div class="contact">
            <a class="IG" href="https://www.instagram.com/">Instagram </a>
            <span>.</span>
            <a class="TT" href="https://www.tiktok.com/en/">Tiktok</a>
            <span>.</span>
            <a class="YT" href="https://www.youtube.com/">Youtube</a>
            <span>.</span>
            <a class="FB" href="https://web.facebook.com/">Facebook</a>
            <span>.</span>
            <a class="WA" href="https://web.whatsapp.com/">WhatsApp</a>
        </div>
        <div class="copyright">&copy; 2023, VDT</div>
    </footer>
</body>
</html>