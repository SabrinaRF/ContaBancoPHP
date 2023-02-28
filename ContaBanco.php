<?php
/**
 * Description of ContaBanco
 *
 * @author sabrina
 */
class ContaBanco {
    public $codConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;
    
    public function ContaBanco() {
        $this->setSaldo(0);
        $this->status = false;
    }
    
    public function getCodConta() {
        return $this->codConta;
    }
    public function getTipo() {
        return $this->tipo;
    }
    public function getDono() {
        return $this->dono;
    }
    public function getSaldo() {
        return $this->saldo;
    }
    public function getStatus() {
        return $this->status;
    }
    public function setCodConta($codConta) {
        $this->codConta = $codConta;
    }
    public function setTipo($tipo){
        $this->tipo = $tipo;
    }
    public function setDono($dono) {
        $this->dono = $dono;
    }
    public function setSaldo($saldo){
        $this->saldo = $saldo;
    }
    
    public function AbrirConta($codConta,$nome,$tipo) {
        $this->status=true;
        $this->setDono($nome);
        $this->setCodConta($codConta);
        
        if($tipo == "CC"){
            $this->saldo=50;
            $this->tipo="CC";
        }else if ($tipo == "CP"){
            $this->saldo=150;
            $this->tipo="CP";
        }
    }
    public function fecharConta() {
        if($this->getSaldo() > 0){          
            echo "A Conta ainda possui saldo";
        }else if($this->getSaldo() < 0){
            echo "A conta está negativa";
        }else if($this->getSaldo() == 0){
            $this->status=false;
            echo "A conta foi encerrada";
            
        }
    }
    public function depositar($valor) {
        if($this->getStatus()){
            $this->setSaldo($this->getSaldo()+$valor);
        }else{
            echo "Conta Fechada";
        }
    }
    public function sacar($valor) {
        if ($this->getStatus()) {
            if($this->saldo >= $valor){
               $this->setSaldo($this->getSaldo()-$valor);
            }else{
            echo "Slado insuficiente";
            }
        }else{
            echo "Conta Fechada";
        }
    }
    public function pagarMensal() {
        if ($this->getStatus()) {
            if($this->tipo.equals("CC")){
                $this->setSaldo($this->getSaldo()-12);
            }else if($this->tipo.equals("CP")){
                $this->setSaldo($this->getSaldo()-20);
            }
        }else{
            echo "Conta Fechada";
        }
    }



    
}
