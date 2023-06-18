<?php
    include "../koneksi.php";

    session_start();

    if(!isset($_SESSION["username"])){
        header("Location: ../loginForm/login.php");
    }

    $id = null;
    if($_GET){
        $id = $_GET["id"];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="delete.css?v=<?php echo time()?>">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Create</title>


    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
</head>

<body>
    <header> 
        <div class="menu">
            <a class="Home" href="../kalenderUtama/KalenderUtama.php">Home</a>
        </div>
        <div class="profile">
            <div class="notif">🔔</div>
            <div class="username"><?php echo $_SESSION["username"] ?></div>

            <!-- Logout Button -->
            <a href="../loginForm/logout.php" class="logoutButton"><i class="fa-solid fa-right-from-bracket fa-lg" style="color: #18122B;"></i></a>
        
        </div>
    </header>

    <form action="deleteValid.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php if ($id != "") {echo $id;} ?>" required="">
        <div >
            <fieldset>
                <div id="confirm">Are you sure? <br></div>
                <div class="klik">
                    <button type="submit" class="submit" id="submit">Yes</button>
                    <button type="button" class="reset" id="reset" onclick="batal()">No</button>                    
                </div>
            </fieldset>
        </div>
            
        <center><span id="warning" hidden> </span></center> 

    </form>
    
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
<script src="deleteScript.js?v=<?php echo time() ?>"></script>