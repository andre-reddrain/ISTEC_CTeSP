<?php
class Jogo{
  public static $total=0;
  public $Jogador;
  public $Montante;

  public function __construct($jogador,$montante){
      self::$total +=1;
      $this->Montante=$montante;
      $this->Jogador=$jogador;
  }
  public function ver(){
    echo "Jogador:$this->Jogador  Montante:$this->Montante  Total:". self::$total . "<br>";
  }

  public function __destruct(){
     self::$total--;
  }

}//class fim jogo

class JogoDados extends Jogo{
   public $Dados=[1,1];
   public function __construct($jogador, $montante){
       parent::__construct($jogador,$montante);
       $this->Dados[0]= rand(1,6);
       $this->Dados[1]=rand(1,6);
   }
   public function ver(){
      parent::ver();
      echo " Dados: " . $this->Dados[0]  . " <=> " . $this->Dados[1] . "<br>" ;
   }

}
//----------------------------------------------------------------------------
$ze = new JogoDados('Zé da Batota',3000);
$ze->ver();

$maria = new JogoDados('Maria das Dívidas',1500);
$maria->ver();