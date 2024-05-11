# LP11DPBO2024C2

Saya Rifanny Lysara Annastasya [2200163] mengerjakan LP11 dalam mata kuliah Desain dan Pemrograman Berorientasi Objek (DPBO) untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin.

### Desain Program:

### 1. Model
- **DB.class.php**: Kelas untuk mengelola koneksi database dan menjalankan query.
- **Pasien.class.php**: Kelas untuk merepresentasikan objek Pasien.
- **TabelPasien.class.php**: Kelas turunan dari DB untuk mengelola data pasien dalam database.
- **Template.class.php**: Kelas untuk membaca dan mengubah template HTML.

### 2. Presenter
- **ProsesPasien.php**: Kelas untuk melakukan operasi pada data pasien, seperti menambahkan, mengambil, mengubah, dan menghapus data pasien dari database.

### 3. View
- **KontakView.php**: Interface untuk semua view.
- **TampilPasien.php**: Kelas untuk menampilkan data pasien dalam bentuk tabel menggunakan template.

### 4. Templates
- **skin.html**: Template untuk menampilkan tabel data pasien.
- **skinform.html**: Template untuk menampilkan form tambah dan edit data pasien.

### 5. Index
- **index.php**: File utama yang menginisialisasi kelas-kelas dan menampilkan data pasien menggunakan TampilPasien.

### Alur Program:

### 1. Inisialisasi Program
- **index.php** dijalankan sebagai file utama program.
- Seluruh kelas yang diperlukan diinisialisasi di dalamnya.

### 2. Presenter 
- **ProsesPasien.php** sebagai presenter mengelola logika bisnis terkait data pasien.
- Konstruktor **ProsesPasien** menginisialisasi koneksi ke database dan membuat objek TabelPasien untuk mengelola data pasien.
- **prosesDataPasien()** dipanggil untuk memproses data pasien dari database.
- Data pasien diperoleh dan disimpan dalam array.
- Setiap data pasien kemudian diambil dari array dan disiapkan untuk ditampilkan.

### 3. Model
- **DB.class.php** mengelola koneksi ke database dan menjalankan query.
- **Pasien.class.php** merepresentasikan struktur data pasien.
- **TabelPasien.class.php** menggunakan DB.class.php untuk mengambil data pasien dari database.

### 4. View
- **TampilPasien.php** bertanggung jawab menampilkan data pasien ke pengguna.
- **tampil()** memanggil **prosesDataPasien()** dari presenter untuk memperoleh data pasien.
- Data pasien diproses dan dimasukkan ke dalam template menggunakan kelas **Template**.
- Hasilnya, template HTML dengan data pasien dimuat ke layar.

### 5. Templates
- **skin.html** dan **skinform.html** adalah template HTML yang digunakan untuk menampilkan data pasien dan formulir tambah/edit.

### 6. Output
- Setelah semua proses selesai, hasil akhir dari **TampilPasien.php** yang berupa HTML dengan data pasien dimuat ke dalam **index.php** dan ditampilkan ke pengguna.

### Dokumentasi:

![1](https://github.com/rifannylyst/LP11DPBO2024C2/assets/147616851/01997571-42f5-4343-af25-a186c40bcf24)
