<?php

class personne
{

    private $_name;
    private $_age;
    private $_truc;
    private $_mail;

    public function __construct($myname, $myage, $mytruc, $mymail)
    {

        $this->_name = $myname;
        $this->_age = $myage;
        $this->_truc = $mytruc;
        $this->_mail = $mymail;
    }

    /* public function getPersonne()
    {
        return $this->_mail;
    } */
    
    public function getPersonne()
    {
        return $this->_name;
    }
    public function getAge()
    {
        return $this->_age;
    }

    public function toString(){
        echo " <br> mon nom est : ". $this->getPersonne() . "<br> mon age est : ". $this->getAge(); ;
    }
}