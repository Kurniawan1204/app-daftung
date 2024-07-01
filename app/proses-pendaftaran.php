<?php

include("koneksi.php");

// cek apakah tombol daftar sudah diklik atau belum?
if (isset($_POST['simpan'])) {

    // ambil data dari formulir
    $Tggl_mhn = $_POST['Tanggal_Mohon'];
    $idpel = $_POST['idpel'];
    $agenda = $_POST['NO_Agenda'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $Jt = $_POST['Jenis_Transaksi'];
    $asl_mhon = $_POST['AsalMohon']; 
    $sttsmhon = $_POST['status_Mohon'] ; 
    $alsn = $_POST['alasan'];
    $pktslo = $_POST['pketslo'];
    $plts = $_POST['plts'];

    // buat query
    $sql = "INSERT INTO daftung (TGL_MOHON, IDPEL, NO_AGENDA, NAMA, ALAMAT,  
    JENIS_TRANSAKSI, ASAL_MOHON,STATUS_MOHON, 
    ALSAN_KRITERIA_TMP, PKT_SLO, PLTS_ATAP) 
    VALUES ('$Tggl_mhn', '$idpel', '$agenda', '$nama',  '$alamat',  '$Jt', 
   '$asl_mhon','$sttsmhon',  '$alsn', '$pktslo', '$plts')";

    $query = mysqli_query($koneksi, $sql);

    // apakah query simpan berhasil?
    if ($query) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: table.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman index.php dengan status=gagal
        header('Location: table.php?status=gagal');
    }
} else {
    die("Akses dilarang...");
}
