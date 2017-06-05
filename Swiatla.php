<?php

class Swiatla {
    protected $swiatlo = 'zielone';

    function __construct($swiatlo = 'zielone') {
      $this->swiatlo= $swiatlo;
    }
    public function info()
    {
        if ($this->swiatlo === 'zielony'){
            echo 'Zielone swiatlo, proszę jechać';
        } else if ($this->swiatlo === 'zolte'){
            echo 'Zolte swiatlo, proszę się zatrzymać';
        } else if ($this->swiatlo === 'czerwone'){
            echo 'Czerwone swiatlo, proszę czekać';
        } else {
            echo 'nie istenieje';
        }
    }
    public function get_swiatlo()
    {
      return $this->swiatlo;
    }
}

