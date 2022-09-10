<?php
class Fruta {
    private $nome;
    private $cor;

    public function set_nome($nome)
    {
        $this->nome = $nome;
    }
    public function set_cor($cor)
    {
        $this->cor = $cor;
    }
    public function get_nome()
    {
        return $this->nome;
    }
    public function get_cor()
    {
        return $this->cor;
    } 
}

$laranja = new Fruta();
$laranja->set_nome("Laranja Pêra");
$laranja->set_cor("Laranja");
echo "Nome Da Fruta: " . $laranja->get_nome() . "<br>";
echo "Cor Da Fruta: " . $laranja->get_cor();
?>