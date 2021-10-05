<?php

#PUBLIC - Todo mundo pode usar
#PRIVATE - So a classe pode usar
#PROTECTED - A classe e quem herda

class MyClass 
{
    private $field1;
    public $field2;
    protected $field3;

    public function MetodoPublico() {
        echo "Public";        
        $this->MetodoPrivate();
    }

    protected function MetodoProtected() {
        echo "Protected";        
    }

    private function MetodoPrivate() {
        echo "Private";
    }
}

class DerivedClass extends MyClass {
    public function Write() {
        $this->MetodoProtected();
    }
}

$myclass = new MyClass();
echo "#MyClass";
echo "\n";
$myclass->MetodoPublico();
// $myclass->MetodoPrivate();
// $myclass->MetodoProtected();
echo "\n";
echo "#DerivedClass";
echo "\n";
$derivedClass = new DerivedClass();
$derivedClass->MetodoPublico();
$derivedClass->Write();