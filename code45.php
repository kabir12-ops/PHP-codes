<?php
class Rectangle {
    public $length = 10, $width = 5;

    public function getPerimeter() { return 2 * ($this->length + $this->width); }
    public function getArea() { return $this->length * $this->width; }

    public function showResult() {
        echo "Length: $this->length<br>Width: $this->width<br>";
        echo "Perimeter: {$this->getPerimeter()}<br>Area: {$this->getArea()}<br><br>";
        echo "Code executed by Kabir(0221BCA165)";
    }
}

(new Rectangle)->showResult();
?>
