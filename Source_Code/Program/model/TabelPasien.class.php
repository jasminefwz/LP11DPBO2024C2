<?php

/******************************************
Asisten Pemrogaman 13
 ******************************************/

class TabelPasien extends DB
{
	//mengambil semua data pasien dari database
	function getPasien()
	{
		// Query mysql select data pasien
		$query = "SELECT * FROM pasien";
		// Mengeksekusi query
		return $this->execute($query);
	}

	//mengambil data pasien berdasarkan id
	function getPasienById($id)
	{
		$query = "SELECT * FROM pasien WHERE id=$id";
        return $this->execute($query);
	}

	//menambahkan data pasien baru
	function addPasien($data)
	{
		$nik = $data['nik'];
		$nama = $data['nama'];
		$tempat = $data['tempat'];
		$tl = $data['tl'];
		$gender = $data['gender'];
		$email = $data['email'];
		$telp = $data['telp'];

        // Query mysql insert data pasien
		$query = "INSERT INTO pasien VALUES ('', '$nik', '$nama', '$tempat', '$tl', '$gender', '$email', '$telp')";

        // Mengeksekusi query
        return $this->execute($query);
	}

	//memperbarui data pasien berdasarkan id
	function updatePasien($data)
	{
		$id = $data['id'];
		$nik = $data['nik'];
		$nama = $data['nama'];
		$tempat = $data['tempat'];
		$tl = $data['tl'];
		$gender = $data['gender'];
		$email = $data['email'];
		$telp = $data['telp'];

        // Query mysql update data pasien
		$query = "UPDATE pasien SET nik='$nik', nama='$nama', tempat='$tempat', tl='$tl', gender='$gender', email='$email', telp='$telp' WHERE id=$id";

        // Mengeksekusi query
        return $this->execute($query);
	}

	//menghapus data pasien dari database
	function detelePasien($id)
	{
		// Query mysql delete data pasien
		$query = "DELETE FROM pasien WHERE id=$id";
		
		// Mengeksekusi query
		return $this->execute($query);
	}
}
