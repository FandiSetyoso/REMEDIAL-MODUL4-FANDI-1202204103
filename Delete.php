<?php
require 'Connector.php';

$id = $_GET['id'];

$deletequery = "DELETE FROM showroom_fandi_table WHERE id_mobil = $id";

if (mysqli_query($koneksi, $deletequery)) {
  header("location:MyItemadmin.php?pesan=delete");
} else {
  header("location:MyItemadmin.php?pesan=failed");
}