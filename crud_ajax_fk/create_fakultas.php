<?php 
    header('content-type: application/json; charset=utf-8');
    require_once 'db.php';

    $fakultas_id = $_POST['fakultas_id'];
    $nama_fakultas = $_POST['nama_fakultas'];

    $sql = "INSERT INTO fakultas SET
        fakultas_id = '$fakultas_id',
        nama_fakultas = '$nama_fakultas'
    ";
    $result = $DB->query($sql);
    if ( $result ) {
        echo json_encode("Sukses Menambahkan fakultas");
    } else {
        echo json_encode($DB->error);
    }
    $DB->close();
?>