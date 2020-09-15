<?php 
include "koneksi.php";
if (isset($_POST['submit'])) {
	$user = $_POST['username'];
	$pass = md5($_POST['password']);

	$query =mysqli_num_rows(mysqli_query($connection,"Select * from user where username = '$user' and password= '$pass' "));
	if ($query > 0) {
		session_start();
		$ambilid = mysqli_query($connection, "Select id from user where username = '$user' and password= '$pass'");
		$data = mysqli_fetch_array($ambilid);
		$id = $data['id'];
		$_SESSION['username'] = $user;
		$waktu = date_create();
		$jam = date_format($waktu,"Y:m:d H:i:s");
		$_SESSION['jam'] = $jam;
		mysqli_query($connection, "Insert into riwayat_login(id_riwayat, id_login, waktu) values('', '$id', '$jam')");
		header('location:../front-end/index.html');
	}else{
		echo "<script>window.alert('username atau password salah')
        window.location='../front-end/Login.html'</script>";
	}
}
if (isset($_POST['register'])) {
	$user = $_POST['username'];
	$pass = md5($_POST['password']);
	$pass2 = md5($_POST['repas']);

	if ($pass == $pass2) {
		mysqli_query($connection,"Insert into user(id, username, password) values('', '$user', '$pass')");
		echo "<script>window.alert('Akun telah dibuat')
        window.location='../front-end/Login.html'</script>";
	}else{
		echo "<script>window.alert('Password tidak sama')
        window.location='../front-end/Login.html'</script>";
	}
}
?>