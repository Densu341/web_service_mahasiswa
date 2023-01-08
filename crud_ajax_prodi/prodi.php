<?php

    header('content-type: application/json; charset=utf-8');

    require_once 'db.php';
    $sql = "SELECT * FROM prodi
            INNER JOIN fakultas ON prodi.fakultas_id = fakultas.fakultas_id";
    $result = $DB->query($sql);

    $data = [];
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            array_push($data, [
                'prodi_id' => $row['prodi_id'],
                'fakultas_id' => $row['fakultas_id'],
                'nama_fakultas' => $row['nama_fakultas'],
                'nama_prodi' => $row['nama_prodi'],
            ]);
        }
    }

    echo json_encode($data);
    $DB->close();

?>