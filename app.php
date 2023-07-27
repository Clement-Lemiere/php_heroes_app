<?php

require __DIR__.'/src/Character.php';
require __DIR__.'/src/Hero.php';
require __DIR__.'/src/Monster.php';
require __DIR__.'/src/Combat.php';

$wolf = new Monster();
$wolf
    ->setLevel(15)
    ->setName('Wolf')
;
$meliodas = new Hero();
$meliodas
    ->setLevel(10)
    ->setName('Meliodas')
;
$ghoul = new Monster();
$ghoul
    ->setLevel(15)
    ->setName('Ghoul')
;

$combat1 = new Combat($meliodas, $wolf);
// $combat1->setMonster($m);
// $combat1->setHero($h);

$combat2 = new Combat($meliodas, $ghoul);
// $combat2->setMonster($ghoul);
// $combat2->setHero($h);
$iteration = 0;
while ($combat1->isFini() == false || $combat2->isFini() == false) {
    // Combat goes on
    $combat1->action();
    $combat2->action();
    $iteration++;

    echo "\n"."Round ".$iteration."\n";
    echo "Wolf: Level: ".$wolf->getLevel()." life: ".$wolf->getLife()."\n";
    echo "goul: Level: ".$ghoul->getLevel()." life: ".$ghoul->getLife()."\n";
    echo "Meliodas: Level: ".$meliodas->getLevel()." life: ".$meliodas->getLife()."\n";
}

if ($meliodas->getLife() == 0 && $wolf->getLife() == 0 && $ghoul->getLife() == 0){
    echo 'match nul\n';
} elseif ($meliodas->getLife() > 0) {
    echo "Yataaaa!!!!"."\n"."Vous avez gagné";
} else { // if($h-getLife() == 0)
    echo "GROAAAR!!!!"."\n"."Vous avez perdu";
}
