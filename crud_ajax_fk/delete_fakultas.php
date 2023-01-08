<?php

header("Content-type: application/json charset=utf-8");

require_once("db.php");

$fakultas_id = $_POST['fakultas_id'];

$sql = "DELETE FROM fakultas WHERE fakultas_id = '$fakultas_id'";
$result = $DB->query($sql);

if ($result) {
    echo json_encode("Sukses Menghapus Data");
} else {
    echo json_encode("Gagal Menghapus Data");
}
