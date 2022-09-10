<?php
class fruta{
    private $nome;
    private $cor;

    public function __construct($nome, $cor)
    {
        $this->nome = $nome;
        $this->cor = $cor;
    }
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

$maca = new fruta("Maçã Red", "Vermelha");
echo "Nome Da Fruta: " . $maca->get_nome() . "<br>";
echo "Cor Da Fruta: " . $maca->get_cor();
?>