<?php

namespace App\models;

class List{

    public $arrayDatos=['nombre','email','tel','edad','talla','altura','nacimiento','cpelo','fechaturno','horaturno'];


    public function add($nombre,$email,$tel,$edad,$talla,$altura,$nacimiento,$cpelo,$fechaturno,$horaturno){

        $this->$arrayDatos['nombre']=$nombre;
        $this->$arrayDatos['email']=$email;
        $this->$arrayDatos['tel']=$tel;
        $this->$arrayDatos['edad']=$edad;
        $this->$arrayDatos['talla']=$talla;
        $this->$arrayDatos['altura']=$altura;
        $this->$arrayDatos['nacimiento']=$nacimiento;
        $this->$arrayDatos['cpelo']=$cpelo;
        $this->$arrayDatos['fechaturno']=$fechaturno;
        $this->$arrayDatos['horaturno']=$horaturno;
    }

}










?>