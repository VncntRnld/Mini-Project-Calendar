<?php
    include "../koneksi.php";

    session_start();

    if(!isset($_SESSION["username"])){
        header("Location: ../loginForm/login.php");
    }

    $id = null;
    if($_GET){
        $id = $_GET["id"];
        $sql = "SELECT * FROM event WHERE idEvent=$id";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_assoc($result);
            $oldNama = $row["namaEvent"];
            $oldStartDate = $row["startDate"];
            $oldStartTime = $row["startTime"];
            $oldEndDate = $row["endDate"];
            $oldEndTime = $row["endTime"];
            $oldLocation = $row["location"];
            $oldPriority = $row["priority"];
            $oldImagePath = $row["imagePath"];
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>

    <link rel="stylesheet" href="formKalender.css?v=<?php echo time()?>">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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

    <form action="updateValid.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php if ($id != "") {echo $id;} ?>" required="">
        <fieldset>
            <h2>UPDATE EVENT</h2>
            <div class="nama">
                <div class="input-nama">
                    <label for="namaEvent">Event Name</label> 
                    <input type="text" name="namaEvent" id="namaEvent" placeholder="Event Name" value="<?php if ($id != "") {echo $oldNama;} ?>"> <br>
                </div>
                <div class="input-location">
                    <label for="location">Location</label> 
                    <input type="text" name="location" id="location" placeholder="Location" value="<?php if ($id != "") {echo $oldLocation;}?>">
                </div>
            </div>

            <div class="waktu">
                <div class="Start">
                    <div class="startDate">
                        <label for="startDate">Start Date <br> </label>
                        <input type="date" name="startDate" id="startDate" value="<?php if ($id != "") {echo $oldStartDate;}?>">
                    </div>
                    <div class="startTime">
                        <label for="startTime">Start Time </label>
                        <input type="time" name="startTime" id="startTime" value="<?php if ($id != "") {echo $oldStartTime;}?>"><br>
                    </div>
                </div>

                <div class="End">
                    <div class="endDate">
                        <label for="endDate">End Date <br> </label> 
                        <input type="date" name="endDate" id="endDate" value="<?php if ($id != "") {echo $oldEndDate;}?>">
                    </div>
                    <div class="endTime">
                        <label for="endTime">End Time</label>
                        <input type="time" name="endTime" id="endTime" value="<?php if ($id != "") {echo $oldEndTime;}?>"><br>
                    </div>
                </div>
            </div>
                            
            <div class="kotak">
                <div class="prioritas">
                    <label for=""> Priority</label> <br>
                    <div class="input-prior">
                        <input type="radio" name="priority" class="input-prior" value="kurang" <?php echo ($oldPriority == "kurang") ? "checked" : "" ?> > Low
                    </div>
                    <div class="input-prior">
                        <input type="radio" name="priority" class="input-prior" value="biasa" <?php echo ($oldPriority == "biasa") ? "checked" : "" ?>> Medium                                    
                    </div> 
                    <div class="input-prior">
                        <input type="radio" name="priority" class="input-prior" value="penting" <?php echo ($oldPriority == "penting") ? "checked" : "" ?>> High                   
                    </div>
                </div>

                <div class="gambar">
                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc.<path d="M448 80c8.8 0 16 7.2 16 16V415.8l-5-6.5-136-176c-4.5-5.9-11.6-9.3-19-9.3s-14.4 3.4-19 9.3L202 340.7l-30.5-42.7C167 291.7 159.8 288 152 288s-15 3.7-19.5 10.1l-80 112L48 416.3l0-.3V96c0-8.8 7.2-16 16-16H448zM64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zm80 192a48 48 0 1 0 0-96 48 48 0 1 0 0 96z"/></svg>
                    <label for="image">Choose File</label>
                    <input type="file" name="image" id="image" value="<?php if ($id != "") {echo $oldImagePath;}?>">
                </div>
            </div>
        </fieldset>

        <div class="klik">
            <div class="submit">
                <button type="submit" id="submit">Submit</button>
            </div>
            <div class="reset">
                <button type="reset" id="reset">Reset</button>                    
            </div>
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
<script src="updateScript.js?v=<?php echo time() ?>"></script>