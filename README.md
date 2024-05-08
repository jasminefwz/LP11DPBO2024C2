# LP11DPBO2024C2

## Janji
Saya Jasmine Noor Fawzia [2200598] mengerjakan soal LP11 dalam Mata Kuliah DPBO untuk keberkahan-Nya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan Aamiin

## Desain Program
**1. model/DB.class.php**

Kelas yang bertanggung jawab untuk mengelola koneksi ke database dan eksekusi query. Beberapa metode yang ada di dalamnya antara lain:
- __construct(): Constructor kelas yang menginisialisasi variabel-variabel untuk koneksi database.
- open(): Metode untuk membuka koneksi ke database.
- execute(): Metode untuk mengeksekusi query ke database.
- getResult(): Metode untuk mendapatkan hasil eksekusi query.
- close(): Metode untuk menutup koneksi ke database.

**2. model/Template.class.php**

File ini berisi kelas Template yang digunakan untuk mengelola template. Beberapa metode yang ada di dalamnya antara lain:
- __construct(): Constructor kelas yang menginisialisasi nama file template.
- clear(): Metode untuk membersihkan template dari placeholder yang cocok dengan pola DATA_[A-Z|_|0-9]+.
- write(): Metode untuk menampilkan isi template yang telah dibersihkan.
- getContent(): Metode untuk mendapatkan isi template yang telah dibersihkan.
- replace(): Metode untuk mengganti placeholder dalam template dengan nilai yang diberikan. Placeholder diganti menggunakan ekspresi reguler.

**3. model/Pasien.class.php**

File ini mendefinisikan kelas Pasien, yang merepresentasikan entitas Pasien. Memiliki properti untuk detail pasien seperti ID, NIK, nama, tempat lahir, tanggal lahir, jenis kelamin, email, dan telepon.Terdapat pula metode setter dan getter untuk mengatur dan mendapatkan nilai properti.

**4. model/TabelPasien.class.php**

Kelas ini bertanggung jawab untuk operasi database yang berkaitan dengan tabel pasien. Memiliki metode untuk mengambil semua data pasien, mengambil data pasien berdasarkan ID, menambahkan pasien baru, memperbarui data pasien, dan menghapus pasien dari database.

**5. presenter/KontrakPresenter.php**

Kelas ini merupakan antarmuka yang mendefinisikan kontrak untuk presenter yang bertanggung jawab untuk mengatur logika aplikasi dan berinteraksi dengan model dan view.

**6. presenter/ProsesPasien.php**

Kelas ini adalah implementasi dari kontrak presenter. Memiliki metode untuk memproses data pasien, mendapatkan data pasien berdasarkan ID, menambahkan pasien baru, memperbarui data pasien, dan menghapus pasien, serta terdapat get untuk setiap atributnya dan juga size.

**7. view/KontrakView.php**

Kelas ini merupakan antarmuka yang mendefinisikan kontrak untuk tampilan yang bertanggung jawab untuk menampilkan data kepada pengguna.

**8. view/TampilPasien.php**

Kelas ini adalah implementasi dari kontrak tampilan. Memiliki metode untuk menampilkan data pasien juga di dalamnya terdapat kondisi jika suatu button di klik, menampilkan form tambah pasien, dan menampilkan form edit pasien.

template skin.html digunakan untuk menampilkan data tabel, dan untuk form add dan edit pasien menggunakan template skinform.html.

**9.index.php**

Ini adalah file utama yang mengatur alur program. Bergantung pada parameter yang diterima, itu memanggil metode yang sesuai dari kelas TampilPasien untuk menampilkan data pasien, menampilkan form tambah pasien, atau menampilkan form edit pasien ketika pengguna klik button.

**10. templates/skin.html**

Ini adalah halaman utama aplikasi web untuk menampilkan tabel. Terdapat navigasi di bagian atas halaman (navbar) serta terdapat action untuk add, edit, dan delete data.

**11. templates/skinform.html**

Halaman ini digunakan untuk menambah atau mengedit data. Terdapat formulir di halaman ini yang memungkinkan pengguna untuk memasukkan informasi data. Terdapat button "submit" yang akan mengirimkan data formulir ke database.

## Penjelasan Alur
1. Pengguna akan memulai dengan membuka halaman utama aplikasi.
2. File index.php akan menampilkan navigasi (navbar) di bagian atas halaman, memungkinkan pengguna untuk menavigasi ke halaman pasien (halaman utama). Di bawahnya terdapat data pasien dalam bentuk tabel. Terdapat action untuk add, edit, dan delete data.
3. Jika pengguna klik tambah pasien, maka akan menampilkan halaman form di mana pengguna dapat memasukkan data pasien baru yang nantinya akan masuk ke dalam database dan akan ditampilkan jika sudah submit.
4. Jika pengguna klik ubah, maka akan menampilkan halaman form di mana pengguna dapat mengubah data pasien yang nantinya akan masuk ke dalam database dan akan ditampilkan hasil edit jika sudah submit.
5. Jika pengguna klik hapus, maka akan muncul konfirmasi hapus lalu data member akan terhapus dan database pun akan berubah.

## Dokumentasi saat Program Dijalankan
1. tabel pasien
![index](https://github.com/jasminefwz/LP11DPBO2024C2/assets/147362810/f0487f79-14ad-495f-8301-5fa01ec400b4)

2. add
![add](https://github.com/jasminefwz/LP11DPBO2024C2/assets/147362810/b9831aae-3bf5-4a55-8b83-fbda90dffb9e)
![add vernon](https://github.com/jasminefwz/LP11DPBO2024C2/assets/147362810/ad2d00f0-5920-4a9e-99e9-72202cd04cd9)
![add berhasil](https://github.com/jasminefwz/LP11DPBO2024C2/assets/147362810/2e3b3400-5db2-49c7-a417-aba6f955e430)

3. edit 
![edit dinda](https://github.com/jasminefwz/LP11DPBO2024C2/assets/147362810/227d7b46-4acd-45e6-b7da-624ef510fc30)
![edit berhasil](https://github.com/jasminefwz/LP11DPBO2024C2/assets/147362810/6f19ca2e-f009-459e-adb3-07e0ad3f7589)

4. delete
![delete](https://github.com/jasminefwz/LP11DPBO2024C2/assets/147362810/d985674c-4fa8-4afb-83a4-02c8d515c8eb)

5. hasil
![hasil](https://github.com/jasminefwz/LP11DPBO2024C2/assets/147362810/98a7c6b6-d30d-4419-8c77-87b42d80f518)

6. Video preview
https://github.com/jasminefwz/LP11DPBO2024C2/assets/147362810/60164f9c-a29b-43b2-aa73-ea7e383f04a5
