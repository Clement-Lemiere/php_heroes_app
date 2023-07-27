<?php

class Character
{
    protected $level = 1;

    public function getName()
    {
        return $this->name;
    }
    public function setName($name)
    {
        $this->name = $name;
        // design pattern "fluent
        return $this;
    }

    public function getLevel()
    {
        return $this->level;
    }
    public function setLevel($level)
    {
        if ($level<0) {
            $level = 0;
        }
        $this->level = $level;

        // design pattern "fluent"
        return $this;
    }

    public function getSpeed()
    {
        return $this->speed;
    }
    public function setSpeed($speed)
    {
        $this->speed = $speed;
        // design pattern "fluent
        return $this;
    }

    public function getLife()
    {
        return $this->life;
    }
    public function setLife($life)
    {
        if ($life<0) {
            $life = 0;
        }
        $this->life = $life;

        // design pattern "fluent"
        return $this;
    }
    public function getPower()
    {
        return $this->power;
        
    }

    public function setPower($power)
    {
        $this-> power = $power;
        
        // design pattern "fluent"
        return $this;
    }
    
    
}
