<?php

$nama_file = time().'.jpg';
$direktori = 'uploads/';
$target = $direktori.$nama_file;

move_uploaded_file($_FILES['webcam']['tmp_name'], $target);
?>