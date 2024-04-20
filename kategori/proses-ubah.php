<?php
if($_POST) {

    include "../config/Database.php";
    include "../object/Kategori.php";

    $database = new Database();
    $db = $database->getConnection();

    $kategori = new Kategori($db);

    $kategori->ID = $_POST["id"];
    $kategori->NamaKategori = $_POST["namakategori"];

    $kategori->update();
}
header("Location: http://localhost/perpus_app/kategori/index.php");
?>
