<?php 
    header('content-type: application/json; charset=utf-8');
    require_once 'db.php';

    $fakultas_id = $_POST['fakultas_id'];
    $nama_fakultas = $_POST['nama_fakultas'];

    $sql = "UPDATE fakultas SET
                nama_fakultas = '$nama_fakultas'
            WHERE
                fakultas_id = '$fakultas_id'
            ";
    $result = $DB->query($sql);
    if ( $result ) {
        echo json_encode("Sukses Mengubah fakultas");
    } else {
        echo json_encode($DB->error);
    }
?>