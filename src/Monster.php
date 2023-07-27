<?php

class Monster extends Character
{
    protected $name = '';
    protected $level = 1;
    protected $power = 5;
    protected $life = 2000;
    protected $claws = 7;
    protected $charge = 5;
    protected $bite = 10;
    protected $eat = 10;
    protected $speed = 10;

    public function getClaws()
    {
        return $this -> claws;
    }
    public function setClaws(int $claws): self
    {
        $this->claws = $claws;
        return $this;
    }

    public function getCharge()
    {
        return $this -> charge;
    }
    public function setCharge(int $charge): self
    {
        $this->charge = $charge;
        return $this;
    }

    public function getBite()
    {
        return $this -> bite;
    }
    public function setBite(int $bite): self
    {
        $this->bite = $bite;
        return $this;
    }

    public function getEat()
    {
        return $this -> eat;
    }
    public function setEat(int $eat): self
    {
        $this->eat = $eat;
        return $this;
    }
}
