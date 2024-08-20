<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <center>
        <form action="up.php" method="post" enctype="multipart/form-data">
            <div class="form-group" style="justify-content: center; align-items:center; width:40%; margin-top:20%;">
                <label for="">Rasmni yuklang</label>
                <input type="file" class="form-control" name="img">
            </div>
            <button class="btn btn-primary">Yuborish</button>
        </form>
    </center>

    <?php session_start();

    if (isset($_SESSION['uploaded_images'])) {
        $img_path = $_SESSION['uploaded_images'];
        echo '<div class="list-group">';
        echo '<div class="list-group-item">';
        echo '<img src="' . htmlspecialchars($img_path) . '" class="img-fluid" alt="Uploaded Image">';
        echo '</div>';
        echo '</div>';
    }
    ?>
</body>

</html>