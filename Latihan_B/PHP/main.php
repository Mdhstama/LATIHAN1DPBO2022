<?php

/* memanggil file data */
include "detail.php";

/* Meminta input set data tim sepakbola*/
$tim = new detail();
$tim2 = new detail();

/* Input data */
$tim->setTeam("Manchester United");
$tim->setNation("England");
$tim->setFound(1876);
$tim->setPlayer("GK-De Gea, RB-Dalot, CB-Varane, CB-Maguire, LB-Shaw, CM-Pogba, CM-Van de Beek, CAM-Bruno, LW-Rashford, RW-Sancho, ST-Ronaldo");

$tim2->setTeam("Manchester City");
$tim2->setNation("England");
$tim2->setFound(1880);
$tim2->setPlayer("GK-Ederson, RB-Walker, CB-Stones, CB-Dias, LB-Cancelo, CM-Fernandinho, CM-Gundongan, CAM-De Bruyne, LW-Sterling, RW-Benardo, ST-Jesus");

/* Menampilkan data mahasiswa 1 */
echo "Tim 1" . "<br/>";
echo "==============================" . "<br/>";
echo "Nama Tim                 : " . $tim->getTeam() . "<br/>";
echo "Asal Negara Tim          : " . $tim->getNation() . "<br/>";
echo "Tahun Berdiri            : " . $tim->getFound() . "<br/>";
echo "==============================" . "<br/>";
echo "Detail Pemain" . "<br/>";
echo "==============================" . "<br/>";
echo $tim->getPlayer() . "<br/>";
echo "<br/>";

echo "Tim 2" . "<br/>";
echo "==============================" . "<br/>";
echo "Nama Tim                 : " . $tim2->getTeam() . "<br/>";
echo "Asal Negara Tim          : " . $tim2->getNation() . "<br/>";
echo "Tahun Berdiri            : " . $tim2->getFound() . "<br/>";
echo "==============================" . "<br/>";
echo "Detail Pemain" . "<br/>";
echo "==============================" . "<br/>";
echo $tim2->getPlayer() . "<br/>";
echo "<br/>";

?>
