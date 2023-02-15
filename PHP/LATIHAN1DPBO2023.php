<?php

class LATIHAN1DPBO2023{

	// Atribut private dari Class LATIHAN1DPBO2023
	private $name = '';
    private $nim = '';
    private $jurusan = '';
    private $fakultas = '';
    private $gender = '';
    private $ttl = '';
	
	// Atribut public dari Class LATIHAN1DPBO2023
	public function __construct($name = '', $nim = '', $jurusan = '', $fakultas = '', $gender = '', $ttl = ''){
		$this->name = $name;
		$this->nim = $nim;
        $this->jurusan = $jurusan;
        $this->fakultas = $fakultas;
        $this->gender = $gender;
        $this->ttl = $ttl;
	}

// Setter Dan Getter

    // Untuk Nama
	public function setName($name){
		$this->name = $name;
	}

	public function getName(){
		return $this->name;
	}

    // Untuk Nim
    public function setNim($nim){
	    $this->nim = $nim;
	}

	public function getNim(){
		return $this->nim;
	}

    // Untuk Jurusan
    public function setJurusan($jurusan){
	    $this->jurusan = $jurusan;
	}

	public function getJurusan(){
		return $this->jurusan;
	}

    // Untuk Fakultas
    public function setFakultas($fakultas){
	    $this->fakultas = $fakultas;
	}

	public function getFakultas(){
		return $this->fakultas;
	}

    // Untuk Gender
	public function setGender($gender){
		$this->gender = $gender;
	}

	public function getGender(){
		return $this->gender;
	}

    // Untuk Tempat Tanggal Lahir
    public function setTtl($ttl){
	    $this->ttl = $ttl;
	}

	public function getTtl(){
		return $this->ttl;
	}
}

?>

<!-- Nama -->
<!-- NIM -->
<!-- Jurusan -->
<!-- Faktultas -->
<!-- Jenis Kelamin -->
<!-- TTL -->