<?php 
//1. konek ke database dengan format (nama server, username, password, nama db)
	$koneksi = mysqli_connect("localhost", "u866654230_delinfoline", "#Propelat34", "u866654230_delinfoline");
//2. pembuatan function query
	function query($query){
		global $koneksi;
		$result = mysqli_query($koneksi, $query);
		$rows = [];
		while( $row = mysqli_fetch_assoc($result) ) {
			$rows[] = $row;
		}
		return $rows;
	}
//3. pembuatan function registrasi
	function registrasi($data) {
		global $koneksi;

		$username = strtolower(stripslashes($data["username"]));
		$password = mysqli_real_escape_string($koneksi, $data["password"]);
		$password2 = mysqli_real_escape_string($koneksi, $data["password2"]);
		$nama = mysqli_real_escape_string($koneksi, $data["nama"]);
		$email = mysqli_real_escape_string($koneksi, $data["email"]);
		$instansi = mysqli_real_escape_string($koneksi, $data["instansi"]);
		
	//3.a)cek username sudah ada atau belum
		$result = mysqli_query($koneksi, "SELECT username FROM user_delinfoline WHERE username = '$username'");

		if(mysqli_fetch_assoc($result) ) {
			echo "<script>
					alert('username has been used!');
				</script>";
			return false;
		}
	//3.b)cek konfirmasi password
		if( $password!== $password2) {
			echo "<script>
					alert('Password not match');
				</script>";
			return false;
		}
	
//4. enkripsi password
		$password = password_hash($password, PASSWORD_DEFAULT);

//5. Penambahan user baru ke database
		mysqli_query($koneksi, "INSERT INTO user_delinfoline VALUES('', '$username', '$password', '$nama', '$email', '$instansi')");

		return mysqli_affected_rows($koneksi);
	}


?>