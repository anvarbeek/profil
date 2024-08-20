<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['img'])) {
    $file = $_FILES['img'];
    if ($file['error'] == 0) {
        if (($file['size'] / 1024 / 1024) > 3) {
            echo 'rasm hajmi katta !!!';
        } else {
            $extension = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
            $allowed_extensions = ['jpg', 'jpeg', 'png'];

            if (in_array($extension, $allowed_extensions)) {
                $path = md5(microtime() . time() . rand(1111, 999999) . '.' . $extension);
                if (move_uploaded_file($file['tmp_name'], 'img/' . $path)) {
                    $_SESSION['uploaded_images'] = 'img/' . $path;
                    echo 'rasm yuklandi';
                } else {
                    echo 'rasmni yuklashda xatolik yux berdi';
                }
            } else {
                echo 'faqat jpg , jpeg ,png ';
            }
        }
    } else {
        echo 'faylni yuklashda xatolik';
    }
}
