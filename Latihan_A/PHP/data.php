<?php

class data
{
    /* Kelas untuk mendapatkan data mahasiswa */

    /* Deklarasi atribut private */
    private $nim = 0;
    private $name = "";
    private $gender = "";
    private $fakultas = "";
    private $departemen = "";
    private $studi = "";
    private $semester = 0;

    /* Membuat constructor */
    public function __construct()
    {
    }

    /* Set dan Get data NIM Mahasiswa*/
    public function setNIM($nim)
    {
        $this->nim = $nim;
    }
    public function getNIM()
    {
        return $this->nim;
    }

    /* Set dan Get data Nama Mahasiswa*/
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }

    /* Set dan Get data Gender Mahasiswa*/
    public function setGender($gender)
    {
        $this->gender = $gender;
    }
    public function getGender()
    {
        return $this->gender;
    }

    /* Set dan Get data Fakultas Mahasiswa*/
    public function setFakultas($fakultas)
    {
        $this->fakultas = $fakultas;
    }
    public function getFakultas()
    {
        return $this->fakultas;
    }

    /* Set dan Get data Departemen Mahasiswa*/
    public function setDepartemen($departemen)
    {
        $this->departemen = $departemen;
    }
    public function getDepartemen()
    {
        return $this->departemen;
    }

    /* Set dan Get data Program Studi Mahasiswa*/
    public function setStudi($studi)
    {
        $this->studi = $studi;
    }
    public function getStudi()
    {
        return $this->studi;
    }

    /* Set dan Get data Semester Mahasiswa*/
    public function setSemester($semester)
    {
        $this->semester = $semester;
    }
    public function getSemester()
    {
        return $this->semester;
    }
}
