<?php
/*
Program: Polymorphism Menggunakan Interface
Studi Kasus: Sistem Notifikasi

Interface Notifikasi menentukan method kirim()
yang wajib diimplementasikan oleh setiap class
yang menggunakan interface tersebut.
*/

// Interface
interface Notifikasi {

    // Method yang wajib dibuat oleh class implementasi
    public function kirim();
}

// Implementasi Email
class Email implements Notifikasi {

    public function kirim() {
        echo "Notifikasi dikirim melalui Email";
    }
}

// Implementasi SMS
class SMS implements Notifikasi {

    public function kirim() {
        echo "Notifikasi dikirim melalui SMS";
    }
}

// Implementasi WhatsApp
class WhatsApp implements Notifikasi {

    public function kirim() {
        echo "Notifikasi dikirim melalui WhatsApp";
    }
}

// Membuat objek
$n1 = new Email();
$n2 = new SMS();
$n3 = new WhatsApp();

// Memanggil method kirim()
$n1->kirim();
echo "<br>";

$n2->kirim();
echo "<br>";

$n3->kirim();

?>