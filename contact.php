<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama   = htmlspecialchars($_POST['nama']);
    $email  = htmlspecialchars($_POST['email']);
    $pesan  = htmlspecialchars($_POST['pesan']);

    $to      = "dunexbz@gmail.com"; // ganti dengan email sekolah
    $subject = "Pesan baru dari $nama";
    $body    = "Nama: $nama\nEmail: $email\n\nPesan:\n$pesan";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Pesan berhasil dikirim. Terima kasih, $nama!";
    } else {
        echo "Pesan gagal dikirim. Silakan coba lagi.";
    }
}
?>
