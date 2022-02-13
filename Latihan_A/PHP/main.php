<?php

/* memanggil file data */
include "data.php";

/* Meminta input set data mahasiswa 1 */
$mahasiswa = new data();
$mahasiswa->setNIM(2000360);
$mahasiswa->setName("Muhammad Aditya Hasta Pratama");
$mahasiswa->setGender("L");
$mahasiswa->setFakultas("FPMIPA");
$mahasiswa->setDepartemen("Kemakom");
$mahasiswa->setStudi("Ilmu Komputer");
$mahasiswa->setSemester(4);

/* Menampilkan data mahasiswa 1 */
echo "NIM           : " . $mahasiswa->getNIM() . "<br/>";
echo "Nama          : " . $mahasiswa->getName() . "<br/>";
echo "Gender        : " . $mahasiswa->getGender() . "<br/>";
echo "Fakultas      : " . $mahasiswa->getFakultas() . "<br/>";
echo "Departemen    : " . $mahasiswa->getDepartemen() . "<br/>";
echo "Program Studi : " . $mahasiswa->getStudi() . "<br/>";
echo "Semester      : " . $mahasiswa->getSemester() . "<br/>";

echo "<br/>";

/* Meminta input set data mahasiswa 2 */
$mahasiswa2 = new data();
$mahasiswa2->setNIM(2000360);
$mahasiswa2->setName("Muhammad Hafizh");
$mahasiswa2->setGender("L");
$mahasiswa2->setFakultas("FPMIPA");
$mahasiswa2->setDepartemen("Matematika");
$mahasiswa2->setStudi("Pendidikan Matematika");
$mahasiswa2->setSemester(4);

/* Menampilkan data mahasiswa 2 */
echo "NIM           : " . $mahasiswa2->getNIM() . "<br/>";
echo "Nama          : " . $mahasiswa2->getName() . "<br/>";
echo "Gender        : " . $mahasiswa2->getGender() . "<br/>";
echo "Fakultas      : " . $mahasiswa2->getFakultas() . "<br/>";
echo "Departemen    : " . $mahasiswa2->getDepartemen() . "<br/>";
echo "Program Studi : " . $mahasiswa2->getStudi() . "<br/>";
echo "Semester      : " . $mahasiswa2->getSemester() . "<br/>";
