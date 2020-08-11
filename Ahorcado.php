<?php

class Ahorcado{
  private $letrasJugadas=[];
  private $palabraOculta;
  private $vidas=5;

  public function __construct(string $palabra){
    $this->palabraOculta=$palabra; 
  }
  public function mostrar(){
    $palabraGuiada='';
    for ($i=0,$len = strlen($this->palabraOculta); $i < $len; $i++) { 
        if(array_search($this->palabraOculta[$i],$this->letrasJugadas)===false){
            $palabraGuiada .= '_ ';
        }else $palabraGuiada .= $this->palabraOculta[$i]." ";
    }
    return $palabraGuiada;
  }

  public function jugar(string $letra){
    $this->letrasJugadas[]=$letra;
  }

  public function getVidas(){
    $vidas=$this->vidas;

    for ($i=0,$len = count($this->letrasJugadas); $i < $len; $i++) { 
        if(strpos($this->palabraOculta,$this->letrasJugadas[$i])===false){
          $vidas-=1;
        }
    }
    return $vidas;
  }

  public function perdio(){
    if($this->getVidas() === 0){
        return true;
    }
    return false;
  }

  public function ganar(){
      if(strpos($this->mostrar(),"_")===false){
        return true;
      }
      return false;
  }

  public function terminoElJuego(){
    if ($this->perdio() || $this->ganar()){
        return true;
    }
    return false;
  }
}
