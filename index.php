<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fundación Husped</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1 class="general-title">DESAFÍO FUNDACIÓN HUESPED</h1>
    <div class="form-container">
        <?php
            if( isset($_GET['status']) ) { ?>
            <h3 class="status_title">Creacion de certificados exitosa</h3>
            <img class="form-container_img" src="https://i.ibb.co/y05Yt1k/check.png" alt="upload">
            <button class="form-container_submit"  onclick="window.location='index.php';"> Volver </button>
        <?php }else{ ?>
            <img class="form-container_img" src="https://i.ibb.co/dfSvqtv/cloud-computing.png" alt="upload">
            <form action="diplomas/createCertificate.php" method="POST" enctype="multipart/form-data" >
                <label class="form-container_labelupload" for="student">SUBIR CSV</label>
                <input class="form-container_inputupload" type="file" name="student" id="student" accept=".csv" required>
                <input class="form-container_submit" type="submit">
            </form>
        <?php }?>
        
    </div>
    
</body>
</html>