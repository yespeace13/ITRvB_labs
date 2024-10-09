<?php

include "classes.php";

$productPh = new PhysicalProduct();
$productPh->setCount(2);
$productPh->setPrice(100);
echo $productPh->calculateCost();

$productV = new VirtualProduct();
$productV->setPrice(100);
echo $productV->calculateCost();

$productW = new WeightProduct();
$productW->setPrice(100);
$productW->setWeight(5.4);
echo $productW->calculateCost();