<?php
   //Mendefinisikan username dan password default yang digunakan untuk login.
    $defaultusername = "userlsp";
    $defaultpassword = "smkisfibjm";
    
   
   
   //memastikan bahwa form dikirim dengan metode POST dan tombol login diklik.
    if(isset($_POST['login'])){
        $username = $_POST['username'];  // Mengambil data username dan password yang dikirim dari form login melalui metode POST
        $password = $_POST['password'];
      
        if(($username === $defaultusername && $password === $defaultpassword)){  //Memeriksa apakah username dan password yang dimasukkan cocok dengan nilai default yang sudah ditentukan.=== digunakan untuk membandingkan nilai dan tipe data secara ketat.
            echo "<meta http-equiv='refresh' content='1;url=beranda.php'>"; //Jika username dan password benar, halaman akan dialihkan ke beranda.php setelah 1 detik
        
        
        }else{ //Jika username atau password salah, maka masuk ke blok ini.
            echo "<script>alert('Username Atau Password Salah!')</script>"; // Menampilkan pesan peringatan menggunakan JavaScript jika login gagal.

            echo "<meta http-equiv='refresh' content='1;url=index.php'>"; //Setelah menampilkan pesan peringatan, halaman akan kembali ke index.php setelah 1 detik agar pengguna bisa mencoba login lagi.
         
        }
    
    }
    
?>
