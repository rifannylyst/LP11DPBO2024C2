<?php

/******************************************
Asisten Pemrogaman 13
 ******************************************/

class Pasien
{
	var $id = ''; //id Pasien
	var $nik = '';
	var $nama = '';
	var $tempat = '';
	var $tl = '';
	var $gender = '';
	var $email = ''; // Tambahkan kolom email
    var $telp = ''; // Tambahkan kolom telp

	function __construct($id = '', $nik = '', $nama = '', $tempat = '', $tl = '', $gender = '', $email = '', $telp = '')
	{
		$this->id = $id;
		$this->nik = $nik;
		$this->nama = $nama;
		$this->tempat = $tempat;
		$this->tl = $tl;
		$this->gender = $gender;
		$this->email = $email;
		$this->telp = $telp;
	}

	function setId($id)
	{
		$this->id = $id;
	}
	function setNik($nik)
	{
		$this->nik = $nik;
	}
	function setNama($nama)
	{
		$this->nama = $nama;
	}
	function setTempat($tempat)
	{
		$this->tempat = $tempat;
	}
	function setTl($tl)
	{
		$this->tl = $tl;
	}
	function setGender($gender)
	{
		$this->gender = $gender;
	}
	function setEmail($email)
    {
        $this->email = $email;
    }
    function setTelp($telp)
    {
        $this->telp = $telp;
    }

	function getId()
	{
		return $this->id;
	}
	function getNik()
	{
		return $this->nik;
	}
	function getNama()
	{
		return $this->nama;
	}
	function getTempat()
	{
		return $this->tempat;
	}
	function getTl()
	{
		return $this->tl;
	}
	function getGender()
	{
		return $this->gender;
	}
	function getEmail()
    {
        return $this->email;
    }
    function getTelp()
    {
        return $this->telp;
    }

	// Method untuk menambah pasien baru
    function tambahPasien($pasien)
    {
        // Logika untuk menambahkan pasien baru ke dalam database
        $query = "INSERT INTO pasien (nik, nama, tempat, tl, gender, email, telepon) VALUES ('" . $pasien->getNik() . "', '" . $pasien->getNama() . "', '" . $pasien->getTempat() . "', '" . $pasien->getTl() . "', '" . $pasien->getGender() . "', '" . $pasien->getEmail() . "', '" . $pasien->getTelepon() . "')";
        $this->execute($query);
    }

    // Method untuk mengambil semua data pasien dari database
    function getSemuaPasien()
    {
        // Logika untuk mengambil semua data pasien dari database
        $query = "SELECT * FROM pasien";
        $result = $this->execute($query);
        return $result;
    }

    // Method untuk mengambil data pasien berdasarkan ID
    function getPasienById($id)
    {
        // Logika untuk mengambil data pasien berdasarkan ID dari database
        $query = "SELECT * FROM pasien WHERE id = " . $id;
        $result = $this->execute($query);
        return $result;
    }

    // Method untuk mengubah data pasien
    function updatePasien($pasien)
    {
        // Logika untuk mengubah data pasien di dalam database
        $query = "UPDATE pasien SET nik = '" . $pasien->getNik() . "', nama = '" . $pasien->getNama() . "', tempat = '" . $pasien->getTempat() . "', tl = '" . $pasien->getTl() . "', gender = '" . $pasien->getGender() . "', email = '" . $pasien->getEmail() . "', telepon = '" . $pasien->getTelepon() . "' WHERE id = " . $pasien->getId();
        $this->execute($query);
    }

    // Method untuk menghapus data pasien berdasarkan ID
    function hapusPasien($id)
    {
        // Logika untuk menghapus data pasien dari database
        $query = "DELETE FROM pasien WHERE id = " . $id;
        $this->execute($query);
    }
}
