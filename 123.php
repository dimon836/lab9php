<?php
interface Hello {
    public function Hello();
}

interface World {
    public function World();
}

class HW implements Hello, World {
    public function Hello() {
        // TODO: Implement Hello() method.
        echo "Hello ";
    }
    public function World() {
        // TODO: Implement World() method.
        echo "world!<br>";
    }
    public function __destruct() {
        // TODO: Implement __destruct() method.
    }
}

$obj = new HW();
$obj->Hello();
$obj->World();
$obj->__destruct();

class A {
    public $name;
    function __construct($name) {
        $this->name = $name;
    }
    public function __destruct() {
        // TODO: Implement __destruct() method.
        echo 'Destroying: ', $this->name, '<br>';
    }
}

$obj = new A('Dima');
echo $obj->name, '<br>';
