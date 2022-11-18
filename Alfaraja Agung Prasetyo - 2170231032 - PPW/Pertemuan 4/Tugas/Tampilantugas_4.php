<?php
echo "<center><br><br><h1>PROFILE AKUN ANDA</h1>";
echo "<center><br><br>Username Anda : ".$_POST['nama_panggilan']."</center><br>";
echo "<center>Password Anda : ".$_POST['nama_lengkap']."</center><br>";
echo "<center>Email : ".$_POST['email']."</center><br>";
echo "Waktu Login : ";
echo date("m-F-y, g:i:s a");

?>