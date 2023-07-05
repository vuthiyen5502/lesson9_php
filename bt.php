<?php
//Bai2: Tạo lớp điểm 2D
class Point2D {
    private $x;
    private $y;

    public function __construct($x, $y) {
        $this->x = $x;
        $this->y = $y;
    }

    public function calculateDistance($pointD) {
        $distanceX = $this->x - $pointD->x;
        $distanceY = $this->y - $pointD->y;
        $distance = sqrt(pow($distanceX, 2) + pow($distanceY, 2));
        return $distance;
    }
}

$point1 = new point2D(4, 3);
$point2 = new point2D(5, 6);

$distance = $point1->calculateDistance($point2);
echo "Distance between two points: " . $distance . "<br>";
//Bai3: Tạo lớp Mảng
class IntegerArray {
    private $array;

    public function __construct($array) {
        $this->array = $array;
    }

    public function calculateSum() {
        return array_sum($this->array);
    }

    public function calculateAverage() {
        $count = count($this->array);
        if ($count > 0) {
            return $this->calculateSum() / $count;
        }
        return 0;
    }

    public function findMaxElement() {
        return max($this->array);
    }
}

// Sử dụng lớp IntegerArray
$integerArray = new IntegerArray([1, 2, 3, 4, 5]);

$sum = $integerArray->calculateSum();
echo "Sum of elements in the array: " . $sum . "<br>";

$average = $integerArray->calculateAverage();
echo "Average of elements in the array: " . $average . "<br>";

$maxElement = $integerArray->findMaxElement();
echo "Max element in the array: " . $maxElement . "<br>";
//Bai4: Tao lớp Đồng hồ
class Clock {
    private $hour;
    private $minute;
    private $second;


    public function __construct($hour,$minute,$second) {
        $this->hour = $hour;
        $this->minute = $minute;
        $this->second = $second;
    }
    public function displayTime() {
        $formattedTime = sprintf("%02d:%02d:%02d", $this->hour, $this->minute, $this->second);
        return $formattedTime;
    }

    public function increaseSecond() {
        $this->second++;
        if ($this->second >= 60) {
            $this->second = 0;
            $this->minute++;
            if ($this->minute >= 60) {
                $this->minute = 0;
                $this->hour++;
                if ($this->hour >= 24) {
                    $this->hour = 0;
                }
            }
        }
    }
}
// Sử dụng lớp Clock
$clock = new Clock(12, 30, 45);

$time = $clock->displayTime();
echo "Current time: " . $time . "<br>";

$clock->increaseSecond();
$newTime = $clock->displayTime();
echo "Time after increasing second: " . $newTime . "<br>";
//Bai5: Tạo lớp danh sách sinh viên
class Student {
    private $studentId;
    private $fullName;

    public function __construct($studentId, $fullName) {
        $this->studentId = $studentId;
        $this->fullName = $fullName;
    }

    public function getStudentId() {
        return $this->studentId;
    }

    public function getFullName() {
        return $this->fullName;
    }
}

class StudentList {
    private $students;

    public function __construct() {
        $this->students = array();
    }

    public function addStudent($studentId, $fullName) {
        $student = new Student($studentId, $fullName);
        $this->students[] = $student;
    }

    public function displayStudentList() {
        echo "Student List:<br>";
        foreach ($this->students as $student) {
            echo "Student ID: " . $student->getStudentId() . "<br>";
            echo "Full Name: " . $student->getFullName() . "<br>";
            echo "<br>";
        }
    }
}

// Usage example
$studentList = new StudentList();
$studentList->addStudent("001", "Vu Yen");
$studentList->addStudent("002", "Vu Anh");

$studentList->displayStudentList();
//Bai6: Tạo lớp xe
class Car {
    private $brand;
    private $color;
    private $year;

    public function __construct($brand, $color, $year) {
        $this->brand = $brand;
        $this->color = $color;
        $this->year = $year;
    }

    public function displayCarInfo() {
        echo "Car Information:<br>";
        echo "Brand: " . $this->brand . "<br>";
        echo "Color: " . $this->color . "<br>";
        echo "Year: " . $this->year . "<br>";
    }
}

// Sử dụng lớp Car
$car = new Car("Mazda", "Black", 2022);
$car->displayCarInfo();

//Bai7: Tạo lớp phân số
class Fraction {
    private $numerator;
    private $denominator;

    public function __construct($numerator, $denominator) {
        $this->numerator = $numerator;
        $this->denominator = $denominator;
    }

    public function add($fraction) {
        $resultNumerator = ($this->numerator * $fraction->denominator) + ($fraction->numerator * $this->denominator);
        $resultDenominator = $this->denominator * $fraction->denominator;
        return new Fraction($resultNumerator, $resultDenominator);
    }

    public function subtract($fraction) {
        $resultNumerator = ($this->numerator * $fraction->denominator) - ($fraction->numerator * $this->denominator);
        $resultDenominator = $this->denominator * $fraction->denominator;
        return new Fraction($resultNumerator, $resultDenominator);
    }

    public function multiply($fraction) {
        $resultNumerator = $this->numerator * $fraction->numerator;
        $resultDenominator = $this->denominator * $fraction->denominator;
        return new Fraction($resultNumerator, $resultDenominator);
    }

    public function divide($fraction) {
        $resultNumerator = $this->numerator * $fraction->denominator;
        $resultDenominator = $this->denominator * $fraction->numerator;
        return new Fraction($resultNumerator, $resultDenominator);
    }

    public function displayFraction() {
        echo $this->numerator . "/" . $this->denominator;
    }
}

// Sử dụng lớp Fraction
$fraction1 = new Fraction(1, 2);
$fraction2 = new Fraction(3, 4);

$sum = $fraction1->add($fraction2);
echo "Sum: ";
$sum->displayFraction();
echo "<br>";

$difference = $fraction1->subtract($fraction2);
echo "Difference: ";
$difference->displayFraction();
echo "<br>";

$product = $fraction1->multiply($fraction2);
echo "Product: ";
$product->displayFraction();
echo "<br>";

$quotient = $fraction1->divide($fraction2);
echo "Quotient: ";
$quotient->displayFraction();
echo "<br>";

//Bai8: Tạo lớp Người
class Person {
    private $name;
    private $age;
    private $address;

    public function __construct($name, $age, $address) {
        $this->name = $name;
        $this->age = $age;
        $this->address = $address;
    }

    public function displayPersonInfo() {
        echo "Person Information:<br>";
        echo "Name: " . $this->name . "<br>";
        echo "Age: " . $this->age . "<br>";
        echo "Address: " . $this->address . "<br>";
    }
}

// Sử dụng lớp Person
$person = new Person("Vu Yen", 21, "53 Trieu Khuc");
$person->displayPersonInfo();

//Bai9: Tạo lớp sản phẩm
class Product {
    private $name;
    private $price;
    private $description;

    public function __construct($name, $price, $description) {
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
    }

    public function displayProductDetails() {
        echo "Product Details:<br>";
        echo "Name: " . $this->name . "<br>";
        echo "Price: $" . $this->price . "<br>";
        echo "Description: " . $this->description . "<br>";
    }
}

// Sử dụng lớp Product
$product = new Product("Smartphone", 500.00, "A high-end smartphone with advanced features.");
$product->displayProductDetails();

//Bai10: Tạo lớp đặt phòng khách sạn
class HotelBooking {
    private $name;
    private $arrivalDate;
    private $numberOfNights;
    private $roomPricePerNight;

    public function __construct($name, $arrivalDate, $numberOfNights, $roomPricePerNight) {
        $this->name = $name;
        $this->arrivalDate = $arrivalDate;
        $this->numberOfNights = $numberOfNights;
        $this->roomPricePerNight = $roomPricePerNight;
    }

    public function calculateTotalPayment() {
        $totalPayment = $this->numberOfNights * $this->roomPricePerNight;
        return $totalPayment;
    }
}

// Sử dụng lớp HotelBooking
$booking = new HotelBooking("Vu Yen", "2023-07-04", 3, 100);
$totalPayment = $booking->calculateTotalPayment();
echo "Total Payment: $" . $totalPayment;

