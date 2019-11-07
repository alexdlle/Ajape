<?php

class Functions 
{
    private $bdd;
    private $test;
    
    public function DbConnect()
    {
        $this->bdd = new PDO ("mysql:host=localhost; dbname=id11179498_ajape; charset=utf8','id11179498_hugzrr', 'cqfdcqfd'");
        $this->test = 'ntm';
    }

    public function getBDD()
    {
        return $this->bdd;
        echo $this->test;
    }
}