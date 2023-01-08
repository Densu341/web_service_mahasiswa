<?php

    header ('content-type: application/json; charset=utf-8');

    require_once 'db.php';
    $sql = "SELECT * FROM mahasiswa
            INNER JOIN prodi ON mahasiswa.prodi_id = prodi.prodi_id
            INNER JOIN fakultas ON prodi.fakultas_id = fakultas.fakultas_id";
    $result = $DB->query($sql);

    $data = [];
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            array_push($data, [
                'nim' => $row['nim'],
                'prodi_id' => $row['prodi_id'],
                'fakultas_id' => $row['fakultas_id'],
                'nama_fakultas' => $row['nama_fakultas'],
                'nama_prodi' => $row['nama_prodi'],
                'nama' => $row['nama'],
                'alamat' => $row['alamat'],
                'telp' => $row['telp'],
            ]);
        }
    }

    echo json_encode($data);
    $DB->close();

?>