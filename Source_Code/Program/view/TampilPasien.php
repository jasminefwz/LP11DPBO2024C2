<?php

include("KontrakView.php");
include("presenter/ProsesPasien.php");

class TampilPasien implements KontrakView
{
	private $prosespasien; //presenter yang dapat berinteraksi langsung dengan view
	private $tpl;

	function __construct()
	{
		//konstruktor
		$this->prosespasien = new ProsesPasien();
	}

	//fungsi untuk menampilkan halaman tabel pasien
	function tampil()
	{
		if (isset($_POST['tambah'])) {
			//memanggil add pasien
			$this->prosespasien->addPasien($_POST);
			echo "<script>
				  alert('Data berhasil ditambah!');
				  document.location.href = 'index.php';
				  </script>";
		  }
		else if (isset($_POST['ubah'])) {
			//memanggil edit pasien
			$this->prosespasien->updatePasien($_POST);
			echo "<script>
				alert('Data berhasil diubah!');
				document.location.href = 'index.php';
				</script>";
		}
		else if (isset($_GET['hapus'])) {
			//memanggil hapus
			$id = $_GET['hapus'];
			$this->prosespasien->deletePasien($id);
		}

		$this->prosespasien->prosesDataPasien();
		$data = null;
		$link = "index.php?add=true";

		//semua terkait tampilan adalah tanggung jawab view
		for ($i = 0; $i < $this->prosespasien->getSize(); $i++) {
			$no = $i + 1;
			$data .= "<tr>
			<td>" . $no . "</td>
			<td>" . $this->prosespasien->getNik($i) . "</td>
			<td>" . $this->prosespasien->getNama($i) . "</td>
			<td>" . $this->prosespasien->getTempat($i) . "</td>
			<td>" . $this->prosespasien->getTl($i) . "</td>
			<td>" . $this->prosespasien->getGender($i) . "</td>
			<td>" . $this->prosespasien->getEmail($i) . "</td>
			<td>" . $this->prosespasien->getTelp($i) . "</td>
			<td>
				<a class='btn btn-success' href='index.php?id=" . $this->prosespasien->getId($i) . "'>Ubah</a>
				<a class='btn btn-danger' href='index.php?hapus=" . $this->prosespasien->getId($i) . "' onclick='return confirm(\"Apakah Anda yakin ingin menghapus data?\")'>Hapus</a>
			</td>
			";
		}
		// Membaca template skin.html
		$this->tpl = new Template("templates/skin.html");

		// Mengganti kode Data_Tabel dengan data yang sudah diproses
		$this->tpl->replace("DATA_TABEL", $data);
		$this->tpl->replace("DATA_LINK", $link);

		// Menampilkan ke layar
		$this->tpl->write();
	}

	//fungsi untuk menampilkan halaman tambah data pasien
	function formadd()
	{
		$link = "index.php";
		$btnn = "tambah";
		$btn = "Tambah";
		$title = "Tambah";

		//semua terkait tampilan adalah tanggung jawab view
		$form = '
		<div class="mb-3">
			<label for="nik" class="form-label">NIK</label>
			<input type="text" class="form-control" id="nik" name="nik" required>
    	</div>
    	<div class="mb-3">
			<label for="nama" class="form-label">Nama</label>
			<input type="text" class="form-control" id="nama" name="nama" required>
    	</div>
    	<div class="mb-3">
			<label for="tempat" class="form-label">Tempat</label>
			<input type="text" class="form-control" id="tempat" name="tempat" required>
    	</div>
		<div class="mb-3">
			<label for="tl" class="form-label">Tanggal Lahir</label>
			<input type="date" class="form-control" id="tl" name="tl" required>
    	</div>
		<div class="mb-3">
			<label for="gender" class="form-label">Jenis Kelamin</label>
			<input type="text" class="form-control" id="gender" name="gender" required>
    	</div>
		<div class="mb-3">
			<label for="email" class="form-label">Email</label>
			<input type="email" class="form-control" id="email" name="email" required>
    	</div>
		<div class="mb-3">
			<label for="telp" class="form-label">Telepon</label>
			<input type="text" class="form-control" id="telp" name="telp" required>
    	</div>
		';

		// Membaca template skin.html
		$tpl = new Template("templates/skinform.html");

		// Mengganti kode Data_Tabel dengan data yang sudah diproses
		$tpl->replace("DATA_FORM", $form);
		$tpl->replace("DATA_LINK", $link);
		$tpl->replace("BTNN", $btnn);
		$tpl->replace("DATA_BUTTON", $btn);
		$tpl->replace("DATA_TITLE", $title);

		// Menampilkan ke layar
		$tpl->write();
	}

	//fungsi untuk menampilkan halaman edit data pasien
	function formedit($id)
	{
		$link = "index.php";
		$btnn = "ubah";
		$btn = "Ubah";
		$title = "Ubah";

		// Mengambil data pasien berdasarkan ID
		$pasien = $this->prosespasien->getbyId($id);

		//semua terkait tampilan adalah tanggung jawab view
		$form = '
		<input type="hidden" name="id" value="' . $pasien->getId() . '">
		<div class="mb-3">
			<label for="nik" class="form-label">NIK</label>
			<input type="text" class="form-control" id="nik" name="nik" value="' . $pasien->getNik() . '" required>
    	</div>
    	<div class="mb-3">
			<label for="nama" class="form-label">Nama</label>
			<input type="text" class="form-control" id="nama" name="nama" value="' . $pasien->getNama() . '" required>
    	</div>
    	<div class="mb-3">
			<label for="tempat" class="form-label">Tempat</label>
			<input type="text" class="form-control" id="tempat" name="tempat" value="' . $pasien->getTempat() . '" required>
    	</div>
		<div class="mb-3">
			<label for="tl" class="form-label">Tanggal Lahir</label>
			<input type="date" class="form-control" id="tl" name="tl" value="' . $pasien->getTl() . '" required>
    	</div>
		<div class="mb-3">
			<label for="gender" class="form-label">Jenis Kelamin</label>
			<input type="text" class="form-control" id="gender" name="gender" value="' . $pasien->getGender() . '" required>
    	</div>
		<div class="mb-3">
			<label for="email" class="form-label">Email</label>
			<input type="email" class="form-control" id="email" name="email" value="' . $pasien->getEmail() . '" required>
    	</div>
		<div class="mb-3">
			<label for="telp" class="form-label">Telepon</label>
			<input type="text" class="form-control" id="telp" name="telp" value="' . $pasien->getTelp() . '" required>
    	</div>
		';

		// Membaca template skin.html
		$tpl = new Template("templates/skinform.html");

		// Mengganti kode Data_Tabel dengan data yang sudah diproses
		$tpl->replace("DATA_FORM", $form);
		$tpl->replace("DATA_LINK", $link);
		$tpl->replace("BTNN", $btnn);
		$tpl->replace("DATA_BUTTON", $btn);
		$tpl->replace("DATA_TITLE", $title);

		// Menampilkan ke layar
		$tpl->write();
	}
}
