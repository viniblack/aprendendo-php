<?php

$idadeList = [21, 23, 19, 25, 30, 41, 18];

list($idadeVinicius, $idadeJoao, $idadeMaria) = $idadeList;
unset($idadeList[4]);

echo $idadeList; 