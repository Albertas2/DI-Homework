<?php

use Symfony\Component\DependencyInjection\ContainerBuilder;

$container = new ContainerBuilder();
$container->setParameter('multiplier.variable',5);
$container
    ->register('multiplier','Multiplier')
    ->addArgument('%multiplier.variable%');

$container
    ->register('adder','Adder')
    ->addMethodCall('setVariable', array(new Reference('multiplier')));