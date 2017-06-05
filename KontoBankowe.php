<?php
class StanKonta
{
    protected $stankonta;
    
    function __construct($stankonta)
    {
        $this->stankonta = $stankonta;
    }
    public function wyswietl_stan_konta()
    {
        if ($this->stankonta) {
            echo "Twój stan konta to $this->stankonta";
        }
    }
    public function podaj_stan_konta()
    {
        return $this->stankonta;
    }
    public function zasil_konto($kwota)
    {
        $this->stankonta = $kwota + $this->stankonta;
    }
}
