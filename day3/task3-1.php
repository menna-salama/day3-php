<?php
abstract class Person {
    private $name;
    private $address;

    function __construct($name, $address) {
        $this->name = $name;
        $this->address = $address;
    }

    function set_name($n): void { 
        $this->name = $n;
    }
    function get_name(): string {  
        return $this->name;
    }
    function set_address($a): void { 
        $this->address = $a;
    }
    function get_address(): string {  
        return $this->address;
    }

    abstract function __toString(): string;
}

class Student extends Person {
    private $program;
    private $year;
    private $fee;

    public function __construct($name, $address, $program, $year, $fee) {
        parent::__construct($name, $address);
        $this->program = $program;
        $this->year = $year;
        $this->fee = (float) $fee;  
    }

    function set_program($p): void { 
        $this->program = $p;
    }
    function get_program(): string {  
        return $this->program;
    }
    function set_year($y): void { 
        $this->year = $y;
    }
    function get_year(): int { 
        return $this->year;
    }
    function set_fee($f): void { 
        $this->fee = (float) $f; 
    }
    function get_fee(): float {  
        return $this->fee;
    }

    public function __toString(): string {
        return "Student: " . $this->get_name() . ", Address: " . $this->get_address() . 
               ", Program: " . $this->get_program() . ", Year: " . $this->get_year() . 
               ", Fee: " . $this->get_fee();
    }
}

class Staff extends Person {
    private $school;
    private $pay;

    public function __construct($name, $address, $school, $pay) {
        parent::__construct($name, $address);
        $this->school = $school;
        $this->pay = (float) $pay;
    }

    function set_school($s) { 
        $this->school = $s;
    }
    function get_school () {  
        return $this->school;
    }
    function set_pay($p) { 
        $this->pay = (float) $p; 
    }
    function get_pay()  { 
        return $this->pay;
    }

    public function __toString(): string {
        return "Staff: " . $this->get_name() . ", Address: " . $this->get_address() . 
               ", School: " . $this->get_school() . ", Pay: " . $this->get_pay();
    }
}

$p = new Student("menna", "menofia", "is", 2025, 4005.0);
echo $p.'<br>';

$S = new Staff("manar", "alex", "it", 2007.0);
echo $S;
?>