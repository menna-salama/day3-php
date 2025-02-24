<?php 
class Author {
    private $name, $email, $gender;
    
    function setEmail($email) {
        $this->email = $email;
    }
    
    function getEmail() {
        return $this->email;
    }
    
    function getName() {
        return $this->name;
    }
    
    function getGender() {
        return $this->gender;
    }
    
    function __construct($name, $email, $gender) {
        $this->name = $name;
        $this->email = $email;
        $this->gender = $this->fGender($gender);
    }
    
     function fGender($gender) {
        if ($gender == "m") {
            return "male";
        } elseif ($gender == "F") {
            return "female";
        } else {
            return "not allowed";
        }
    }
    
    public function __toString() {
        return "Author[name=" . $this->name . ", email=" . $this->email . ", gender=" . $this->gender . "]";
    }
}

$obj = new Author("MENNA", "menna@gmail.com", "s");
$obj1 = new Author("aaaaaaA", "nnnnnna@gmail.com", "f");

echo $obj;

//  class Book {
//     private $name;
//     private $price;
//     private $qty = 0;
//     private $author;
    
//     function __construct($name, Author $author, $price, $qty = 0) {
//         $this->name = $name;
//         $this->author = $author;
//         $this->price = $price;
//         $this->qty = $qty;
//     }
    
//     function setQty($qty) {
//         $this->qty = $qty;
//     } 
    
//     function setPrice($price) {
//         $this->price = $price;
//     }
    
//     function getAuthor() {
//         return $this->author;
//     }
    
//     function getName() {
//         return $this->name;
//     }
    
//     function getPrice() {
//         return $this->price;
//     }
    
//     function getQty() {
//         return $this->qty;
//     }
    
//     public function __toString() {
//         return "Book[name=" . $this->name . ", Author=" . $this->author . ", price=" . $this->price . ", Qty=" . $this->qty . "]";
//     }

// }

// $test = new Book("math", $obj, 500, 3);
// echo $test;

class Book {
    private $name;
    private $price;
    private $qty = 0;
    private $authors = [];  
    
    function __construct($name, $authors, $price, $qty = 0) {
        $this->name = $name;
        $this->authors = $authors;
        $this->price = $price;
        $this->qty = $qty;
    }

    function setQty($qty) {
        $this->qty = $qty;
    } 
    
    function setPrice($price) {
        $this->price = $price;
    }
    
    function getAuthors() {
        return $this->authors;
    }
    
    function getName() {
        return $this->name;
    }
    
    function getPrice() {
        return $this->price;
    }
    
    function getQty() {
        return $this->qty;
    }

    public function __toString() {
        $authorsStr = implode(", ", array_map(fn($author) => (string)$author, $this->authors));
        return "Book[name=" . $this->name . ", Authors=[" . $authorsStr . "], price=" . $this->price . ", Qty=" . $this->qty . "]";
    }

    
}

 
$author1 = new Author("MENNA", "menna@gmail.com", "f");
$author2 = new Author("Ali", "ali@example.com", "m");
$author3 = new Author("Sara", "sara@example.com", "f");

 
$book = new Book("Math Book", [$author1, $author2, $author3], 500, 3);

echo $book;