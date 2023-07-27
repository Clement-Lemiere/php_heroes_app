<?php declare(strict_types = 1);

class Combat
{
    private $hero = null;
    private $monster = null;


    private function determineFirstTurn()
    {
        // Compare the speeds of hero and monster to decide who goes first
        $heroSpeed = $this->hero->getSpeed();
        $monsterSpeed = $this->monster->getSpeed();

        if ($heroSpeed > $monsterSpeed) {
            $this->turnOrder = 'hero';
        } elseif ($heroSpeed < $monsterSpeed) {
            $this->turnOrder = 'monster';
        } else {
            // If both have the same speed, randomly decide who goes first
            $this->turnOrder = mt_rand(0, 1) === 0 ? 'hero' : 'monster';
        }
    }

    public function __construct(Hero $hero, Monster $monster)
    {
        $this->hero = $hero;
        $this->monster = $monster;
    }
    public function getHero(): Hero
    {
        return $this->hero;
    }
    public function setHero(Hero $hero): self
    {
        $this->hero = $hero;
        return $this;
    }
    public function getMonster(): Monster
    {
        return $this->monster;
    }
    public function setMonster(Monster $monster): self
    {
        $this->monster = $monster;
        return $this;
    }
    public function action()
    {
        // Monster attack
        $monsterAttack = $this->monster->getPower() * $this->monster->getLevel();

        $monsterAttacks = [$this->monster->getCharge(), $this->monster->getClaws(), $this->monster->getBite()];
        $randomMonsterAttack = $monsterAttacks[mt_rand(0, count($monsterAttacks) - 1)];
        
        if ($randomMonsterAttack) {
            $monsterAttack *= $randomMonsterAttack;
        }

        // Hero attack
        $heroAttack = $this->hero->getPower() * $this->hero->getLevel();

        $heroAttacks = [$this->hero->getSword(), $this->hero->getKick(), $this->hero->getSpit()];
        $randomHeroAttack = $heroAttacks[mt_rand(0, count($heroAttacks) - 1)];

        if ($randomHeroAttack) {
            $heroAttack *= $randomHeroAttack;
            echo "Attack:".$heroAttack;
        }

        // Apply the attacks to the hero and monster
        $heroLife = $this->monster->getLife() - $heroAttack;
        $this->monster->setLife($heroLife);

        $monsterLife = $this->hero->getLife() - $monsterAttack;
        $this->hero->setLife($monsterLife);
    }

 

    public function isFini()
    {
        if ($this->hero->getLife() == 0 || $this->monster->getLife() == 0) {
            return true;
        }
        return false;
    }
}