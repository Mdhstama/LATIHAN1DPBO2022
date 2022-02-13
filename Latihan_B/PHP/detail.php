<?php

class detail
{
    /* Kelas untuk mendapatkan data tim sepakbola */

    /* Deklarasi atribut private */
    private $name = "";
    private $nation = "";
    private $found = 0;
    private $player = "";

    /* Membuat constructor */
    public function __construct()
    {
    }

    /*Set dan Get data nama tim sepakbola */
    public function setTeam($name)
    {
        $this->name = $name;
    }
    public function getTeam()
    {
        return $this->name;
    }

    /*Set dan Get data asal negara tim sepakbola */
    public function setNation($nation)
    {
        $this->nation = $nation;
    }
    public function getNation()
    {
        return $this->nation;
    }

    /*Set dan Get data tahun berdiri tim sepakbola */
    public function setFound($found)
    {
        $this->found = $found;
    }
    public function getFound()
    {
        return $this->found;
    }

    /*Set dan Get data nama pemain tim sepakbola */
    public function setPlayer($player)
    {
        $this->player = $player;
    }
    public function getPlayer()
    {
        return $this->player;
    }
}
