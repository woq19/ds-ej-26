<?php

class   PropiedadInmobiliaria{
    function __construct($id,$dir,$mc,$ciudad,$val){
    $this->Id=$id;
    $this->Direccion=$dir;
    $this->MetrosCuadrados=$mc;
    $this->Ciudad=$ciudad;
    $this->Valor=$val;
    }

    public $Id;
    public $Direccion;
    public $MetrosCuadrados;
    public $Ciudad;
    public $Valor;

    public function MostrarDatos(){
        echo 'Id: '. $this->Id.'<br>';
        echo 'Direccion: '. $this->Direccion.'<br>';
        echo 'Metros Cuadrados: '. $this->MetrosCuadrados.'<br>';
        echo 'Ciudad: '. $this->Ciudad.'<br>';
        echo 'Valor: '. $this->Valor.'<br>';
    }

}