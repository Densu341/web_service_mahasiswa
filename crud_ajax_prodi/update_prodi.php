<?php 
    header('content-type: application/json; charset=utf-8');
    require_once 'db.php';

    $prodi_id = $_POST['prodi_id'];
    $fakultas_id = $_POST['fakultas_id'];
    $nama_prodi = $_POST['nama_prodi'];

    $sql = "UPDATE prodi SET
                fakultas_id = '$fakultas_id',
                nama_prodi = '$nama_prodi'
            WHERE
                prodi_id = '$prodi_id'
            ";
    $result = $DB->query($sql);
    if ( $result ) {
        echo json_encode("Sukses Mengubah prodi");
    } else {
        echo json_encode($DB->error);
    }
?>