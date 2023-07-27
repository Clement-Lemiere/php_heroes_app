<?php

class Hero extends Character
{
    protected $name = '';
    protected $power = 5;
    protected $life = 5000;
    protected $spit = 3;
    protected $kick = 7;
    protected $sword = 20;
    protected $heal = 15;
    protected $speed = 15;


    public function getSpit()
    {
        return $this -> spit;
    }
    public function setSpit(int $spit): self
    {
        $this->spit = $spit;
        return $this;
    }
    
    public function getKick()
    {
        return $this -> kick;
    }
    public function setKick(int $kick): self
    {
        $this->kick = $kick;
        return $this;
    }
    
    public function getSword()
    {
        return $this -> sword;
    }
    public function setSword(int $sword): self
    {
        $this->sword = $sword;
        return $this;
    }

    public function getHeal()
    {
        return $this -> heal;
    }
    public function setHeal(int $heal): self
    {
        $this->heal = $heal;
        return $this;
    }
}
