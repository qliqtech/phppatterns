<?php


class Animal{

    public $name;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {

        $this->name = $name;
    }

    public function callMyName(){

        echo "My Name is: ". $this->name;
    }

    public function callMyName2(){

        return $this;
    }


    public function __construct()
    {

        $this->name = "";
    }


}

 $animal = new Animal();

  $animal->setName("Doc Oc");

  $animal->callMyName2()->callMyName();

