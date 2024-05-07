<?php
include ('koneksi_pertemuan7.php');
$nama       =$_POST['nama'];
$email      =$_POST['email'];
$isi        =$_POST['isi'];

echo "$nama, $email, $isi ";

// Query untuk memasukkan data
$query = "INSERT INTO buku_tamu (NAMA, EMAIL, ISI) 
VALUES ( '$nama', '$email', '$isi')";
if ($conn->query($query) === TRUE) {
    echo "Data baru berhasil disimpan.";
} else {
    echo "Error: " . $query . "<br>" . $conn->error;
}
$conn->close();
?>