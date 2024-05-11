<?php

include("KontrakPresenter.php");


class ProsesPasien implements KontrakPresenter
{
	private $tabelpasien;
	private $data = [];

	function __construct()
	{
		//konstruktor
		try {
			$db_host = "localhost"; // host 
			$db_user = "root"; // user
			$db_password = ""; // password
			$db_name = "mvp_php"; // nama basis data
			$this->tabelpasien = new TabelPasien($db_host, $db_user, $db_password, $db_name); //instansi TabelPasien
			$this->data = array(); //instansi list untuk data Pasien
			// data = new ArrayList<Pasien>;//instansi list untuk data Pasien
		} catch (Exception $e) {
			echo "wiw error" . $e->getMessage();
		}
	}

	function prosesDataPasien()
	{
		try {
			//mengambil data di tabel pasien
			$this->tabelpasien->open();
			$this->tabelpasien->getPasien();
			while ($row = $this->tabelpasien->getResult()) {
				//ambil hasil query
				$pasien = new Pasien(); //instansiasi objek pasien untuk setiap data pasien
				$pasien->setId($row['id']); //mengisi id
				$pasien->setNik($row['nik']); //mengisi nik
				$pasien->setNama($row['nama']); //mengisi nama
				$pasien->setTempat($row['tempat']); //mengisi tempat
				$pasien->setTl($row['tl']); //mengisi tl
				$pasien->setGender($row['gender']); //mengisi gender
				// Periksa keberadaan kolom 'telp' dan 'email' sebelum mengaksesnya
				if (isset($row['telp'])) {
					$pasien->setTelp($row['telp']);
				} else {
					$pasien->setTelp(''); // Atur nilai default jika kolom 'telp' tidak ada
				}
	
				if (isset($row['email'])) {
					$pasien->setEmail($row['email']);
				} else {
					$pasien->setEmail(''); // Atur nilai default jika kolom 'email' tidak ada
				}

				$this->data[] = $pasien; //tambahkan data pasien ke dalam list
			}
			//tutup koneksi
			$this->tabelpasien->close();
		} catch (Exception $e) {
			//memproses error
			echo "wiw error part 2" . $e->getMessage();
		}
	}
	function getId($i)
    {
        return $this->data[$i]->getId();
    }
	function getNik($i)
	{
		//mengembalikan nik Pasien dengan indeks ke i
		return $this->data[$i]->getNik();
	}

	function getNama($i)
	{
		// Mengembalikan nama Pasien dengan indeks ke i
		return $this->data[$i]->getNama();
	}

	function getTempat($i)
	{
		// Mengembalikan nama Pasien dengan indeks ke i
		return $this->data[$i]->getTempat();
	}

	function getTl($i)
	{
		// Mengembalikan nama Pasien dengan indeks ke i
		return $this->data[$i]->getTl();
	}

	function getGender($i)
	{
		// Mengembalikan nama Pasien dengan indeks ke i
		return $this->data[$i]->getGender();
	}
	function getEmail($i)
	{
		// Mengembalikan nama Pasien dengan indeks ke i
		return $this->data[$i]->getEmail();
	}
	
	function getTelp($i)
	{
		//mengembalikan telp Pasien dengan indeks ke i
		return $this->data[$i]->getTelp();
	}

	function getSize()
	{
		return sizeof($this->data);
	}

	// Method untuk menambah pasien baru
    function tambahPasien($pasien)
    {
        $this->open();
        $this->tambahPasien($pasien);
        $this->close();
    }

    // Method untuk mengambil semua data pasien
    function getSemuaPasien()
    {
        $this->open();
        $result = $this->getPasien();
        $this->close();
        return $result;
    }

    // Method untuk mengambil data pasien berdasarkan ID
    function getPasienById($id)
    {
        $this->open();
        $result = $this->getPasienById($id);
        $this->close();
        return $result;
    }

    // Method untuk mengubah data pasien
    function updatePasien($pasien)
    {
        $this->open();
        $this->updatePasien($pasien);
        $this->close();
    }

    // Method untuk menghapus data pasien berdasarkan ID
    function hapusPasien($id)
    {
        $this->open();
        $this->hapusPasien($id);
        $this->close();
    }
}
