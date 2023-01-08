<?php

header("Content-type: application/json charset=utf-8");

require_once("db.php");

$prodi_id = $_POST['prodi_id'];

$sql = "DELETE FROM prodi WHERE prodi_id = '$prodi_id'";
$result = $DB->query($sql);

if ($result) {
    echo json_encode("Sukses Menghapus Prodi");
} else {
    echo json_encode("Gagal Menghapus Prodi");
}
