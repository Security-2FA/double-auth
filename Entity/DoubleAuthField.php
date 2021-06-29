<?php


namespace Double\Authentication\Component\Entity;


interface DoubleAuthField
{
    public function getTypeAuth(): int;

    public function getAuthHash(): string;

    public function getLasAuth(): \DateTime;
}