<?php
interface Shape {
    function getColor() ;
    function setColor(string $color) ;
    function isFilled() ;
    function setFilled(bool $filled);
    function getArea() ;
    function getPerimeter() ;
    function __toString();
}

class Circle implements Shape {
    private string $color;
    private bool $filled;
    private float $radius;

    public function __construct(float $radius = 1.0, string $color = "red", bool $filled = true) {
        $this->radius = $radius;
        $this->color = $color;
        $this->filled = $filled;
    }

    public function getRadius(): float {
        return $this->radius;
    }

    public function setRadius(float $radius): void {
        $this->radius = $radius;
    }

    public function getColor(): string {
        return $this->color;
    }

    public function setColor(string $color): void {
        $this->color = $color;
    }

    public function isFilled(): bool {
        return $this->filled;
    }

    public function setFilled(bool $filled): void {
        $this->filled = $filled;
    }

    public function getArea(): float {
        return pi() * pow($this->radius, 2);
    }

    public function getPerimeter(): float {
        return 2 * pi() * $this->radius;
    }

    public function __toString(): string {
        return "Circle[Shape[color={$this->color}, filled=" . ($this->filled ? "true" : "false") . "], radius={$this->radius}]";
    }
}

class Rectangle implements Shape {
    private string $color;
    private bool $filled;
    protected float $width;
    protected float $length;

    public function __construct(float $width = 1.0, float $length = 1.0, string $color = "red", bool $filled = true) {
        $this->width = $width;
        $this->length = $length;
        $this->color = $color;
        $this->filled = $filled;
    }

    public function getWidth(): float {
        return $this->width;
    }

    public function setWidth(float $width): void {
        $this->width = $width;
    }

    public function getLength(): float {
        return $this->length;
    }

    public function setLength(float $length): void {
        $this->length = $length;
    }

    public function getColor(): string {
        return $this->color;
    }

    public function setColor(string $color): void {
        $this->color = $color;
    }

    public function isFilled(): bool {
        return $this->filled;
    }

    public function setFilled(bool $filled): void {
        $this->filled = $filled;
    }

    public function getArea(): float {
        return $this->width * $this->length;
    }

    public function getPerimeter(): float {
        return 2 * ($this->width + $this->length);
    }

    public function __toString(): string {
        return "Rectangle[Shape[color={$this->color}, filled=" . ($this->filled ? "true" : "false") . "], width={$this->width}, length={$this->length}]";
    }
}

class Square extends Rectangle {
    public function __construct(float $side = 1.0, string $color = "red", bool $filled = true) {
        parent::__construct($side, $side, $color, $filled);
    }

    public function getSide(): float {
        return $this->width;
    }

    public function setSide(float $side): void {
        $this->width = $this->length = $side;
    }

    public function setWidth(float $width): void {
        $this->setSide($width);
    }

    public function setLength(float $length): void {
        $this->setSide($length);
    }

    public function __toString(): string {
        return "Square[" . parent::__toString() . "]";
    }
}

$circle = new Circle(3, "yellow", true);
echo $circle . "<br>";

$rectangle = new Rectangle(3.0, 4.5, "green", true);
echo $rectangle . "<br>";

$square = new Square(3, "red", false);
echo $square . "<br>";
?>