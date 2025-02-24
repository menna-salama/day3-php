<?php
trait Circle {
    private $radius;
    private $color;

    public function __construct($radius = 1.0, $color = "red") {
        $this->radius = $radius;
        $this->color = $color;
    }

    public function setRadius($radius) {
        $this->radius = $radius;
    }

    public function getRadius() {
        return $this->radius;
    }

    public function setColor($color) {
        $this->color = $color;
    }

    public function getColor() {
        return $this->color;
    }

    public function getArea() {
        return pi() * pow($this->radius, 2);
    }

    public function __toString() {
        return "Circle[radius=" . $this->radius . ",color=" . $this->color . "]";
    }
}


class Shape {

    use Circle;
    public function __construct($radius = 1.0, $color = "red") {
        $this->setRadius($radius);
        $this->setColor($color);
    }
}


class Cylinder extends Shape{
    private $height;

    public function __construct($radius, $height, $color = "red") {
        parent::__construct($radius, $color);
        $this->height = $height;
    }

    public function setHeight($height) {
        $this->height = $height;
    }

    public function getHeight() {
        return $this->height;
    }

    public function getVolume() {
        return $this->getArea() * $this->height;
    }

    public function __toString() {
        return "Cylinder[radius=" . $this->getRadius() . ",height=" . $this->height . ",color=" . $this->getColor() . "]";
    }
}


$circle = new Shape(4.5, "red");
echo $circle->__toString() . "<br>";
echo "Area: " . $circle->getArea() . "<br>";

$cylinder = new Cylinder(4.5, 6, "blue");
echo $cylinder->__toString() . "<br>";
echo "Volume: " . $cylinder->getVolume() . "<br>";

?>