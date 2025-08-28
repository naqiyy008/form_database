<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama   = mysqli_real_escape_string($conn, $_POST["nama"]);
    $kelas  = mysqli_real_escape_string($conn, $_POST["kelas"]);
    $umur   = (int) $_POST["umur"]; 
    $alamat = mysqli_real_escape_string($conn, $_POST["alamat"]);
    $nik    = mysqli_real_escape_string($conn, $_POST["nik"]);

    $sql = "INSERT INTO tbsiswa (nama, kelas, umur, alamat, nik) 
            VALUES ('$nama', '$kelas', $umur, '$alamat', '$nik')";

    if (mysqli_query($conn, $sql)) {
        echo "success";  
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
